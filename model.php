<?php
class DB
{
    //CONNECT TO DATABASE
    public $error = "";
    private $pdo = null;
    private $stmt = null;
    function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
                DB_USER,
                DB_PASSWORD,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    //CLOSE CONNECTION
    function __destruct()
    {
        if ($this->stmt !== null) {
            $this->stmt = null;
        }
        if ($this->pdo !== null) {
            $this->pdo = null;
        }
    }

    //RUN A SELECT QUERY
    function select($sql, $cond = null)
    {
        $result = false;
        try {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($cond);
            $result = $this->stmt->fetchAll();
            return $result;
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }

    //RUN A UPDATE QUERY
    function update(array $cond)
    {
        $result = false;
        try {


            $sql = "SELECT * FROM q WHERE id=?";
            $result = $this->select($sql, [$cond['id']]);
            if ($result) {
                $result[0]['likes']++;
            } else {
                //echo "<pre>";
                die($this->error);
                //echo "</pre>";
            }

            $this->stmt = $this->pdo->prepare("UPDATE q set url=:url, likes= :likes, dislikes= :dislikes WHERE id=:id");




            if ($this->stmt->execute($result[0])) {
                return $this->getQById($cond['id']);
            }
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }

    /**
     * This function find a Q by his id
     *
     * @param int $id
     * @return array The fetch array of the Q who get the id $id
     */
    function getQById($id)
    {
        $req_content = "SELECT * FROM q WHERE id=?";
        $req = $this->select($req_content, [$id])[0];
        return $req;
    }

    function addLikes(int $id)
    {
        $cond = $this->getQById($id);
        return $this->update($cond);
    }
}

//DATABASE SETTINGS
define('DB_HOST', 'localhost');
define('DB_NAME', 'qinder');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
