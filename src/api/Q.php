<?php
//include("./db_connect.php");

/**
 * Class Q represent a q
 * @var int $id : Unique id of the Q 
 * @var string $url : Url of the image of the Q
 * @var int $likes : Number of likes of this Q
 * @var int $dislikes : Number of dislikes of this Q
 */
class Q
{
    private $id;
    public $url;
    public $likes;
    public $dislikes;

    /**
     * Allows you to update class attributes
     *
     * @param array $donnees : Use keys as attributes to update ex : ['id'=>3,'likes'=>3] 
     * @return void
     */
    public function hydrate(array $donnees)
    {
        // We make a loop with the data table
        foreach ($donnees as $key => $value) {
            // We recover the name of the corresponding setters
            // if the key is id its setter is id
            // just put the 1st letter of the key in Shift and prefix it by set
            $method = 'set' . ucfirst($key);

            // Check that the corresponding setter exists.
            if (method_exists($this, $method)) {
                // If it exists, it is called
                $this->$method($value);
            }
        }
    }

    /**
     * Return attr to json format
     *
     * @return json attributes of the class
     */
    public function jsonFormat()
    {
        return json_encode(get_object_vars($this));
    }

    /**
     * Undocumented function
     *
     * @param int $id : the id of the Q
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Undocumented function
     *
     * @return int : the number of likes of the Q
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Update the of Q's url
     *
     * @param string $url : the url to acces to the Q's picture
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Update the Q's url
     *
     * @return string : the url to acces to the Q's picture
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Update the number of of Q's likes
     *
     * @param int $likes : the number of of Q's likes
     * @return void
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    /**
     * Return the number of likes of the Q
     *
     * @return int : the number of Q's likes
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Update the number of dislikes of the q
     *
     * @param int $dislikes : the number of Q's dislikes
     * @return void
     */
    public function setDislikes($dislikes)
    {
        $this->dislikes = $dislikes;
    }

    /**
     * Return the number of likes of the q
     *
     * @return int : the number of likes
     */
    public function getDislikes()
    {
        return $this->dislikes;
    }

    public function addLike($DB)
    {
        $this->likes++;
        $DB->update(get_object_vars($this));
    }

    public function addDislike($DB)
    {
        $this->dislikes++;
        $DB->update(get_object_vars($this));
    }




    // public function update($DB){
    //     $db->select();

    // }

    /*function select($sql, $cond = null)
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
    }*/
}
