<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
// (A) DATABASE CONNECTION
require "model.php";
require "Q.php";
$DB = new DB();
//$pdo = new PDO("mysql:host=localhost;dbname=qinder", 'root', '');

if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case 'getRandomQ':
      $randomId = rand(1, 65);
      $Q = new Q();
      $Q->hydrate($DB->getQById($randomId));
      echo $Q->jsonFormat();
      //return $Q->jsonFormat();
      break;

    default:
      # code...
      break;
  }
}




// //SEARCH FOR Q
// $Q = new Q();

// $Q->hydrate($DB->getQById($_GET['id']));



// /*var_dump($Q);
// var_dump($DB->addLikes($_GET['id']));*/
// //$Q->hydrate($DB->addLikes($_GET['id']));
// //var_dump($Q);

// $results = $DB->select(
//   "SELECT * FROM `q` WHERE `id` LIKE ?",
//   [$_GET['id']]
// );

// //OUTPUT RESULTS
