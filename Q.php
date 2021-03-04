<?php
include("./db_connect.php");

class Q
{
    private $id;
    private $url;
    private $likes;
    private $dislikes;
    private $pdo;

    function __construct($id = "", $url = "", $likes = 0, $dislikes = "")
    {
        $this->id = $id;
        $this->url = $url;
        $this->likes = $likes;
        $this->dislikes = $dislikes;
        $this->pdo = new PDO("mysql:host=localhost;dbname=qinder", 'root', '');
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId($id)
    {
        return $this->likes;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    public function getLikes()
    {
        return $this->dislikes;
    }

    public function setDislikes($dislikes)
    {
        $this->dislikes = $dislikes;
    }

    public function getDislikes()
    {
        return $this->dislikes;
    }

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
