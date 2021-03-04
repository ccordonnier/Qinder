<?php
// (A) DATABASE CONNECTION
require "1-model.php";
require "Q.php";
$DB = new DB();
//$pdo = new PDO("mysql:host=localhost;dbname=qinder", 'root', '');


// function getQById($db)
// {
//   $DB = new DB();
//   $req_content = "SELECT * FROM q WHERE id=?";
//   $req = $DB->select($req_content, [$id])[0];
//   $Q = new Q($req['id'], $req['url'], $req['likes'], $req['dislikes']);
//   return $Q;
// }

// function updateQ($params)
// {
//   $q = json_decode($params);
//   $DB = new DB();
//   $Q = new Q($params['id'], $params['url'], $params['likes'], $params['dislikes']);
//   return $Q->update($DB);
// }



//SEARCH FOR Q
$Q = new Q();

$Q->hydrate($DB->getQById($_GET['id']));



/*var_dump($Q);
var_dump($DB->addLikes($_GET['id']));*/
$Q->hydrate($DB->addLikes($_GET['id']));
//var_dump($Q);

$results = $DB->select(
  "SELECT * FROM `q` WHERE `id` LIKE ?",
  [$_GET['id']]
);

//OUTPUT RESULTS
