<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
// (A) DATABASE CONNECTION
require "model.php";
require "Q.php";
$DB = new DB();
//$pdo = new PDO("mysql:host=localhost;dbname=qinder", 'root', '');

function getRandomQ($DB)
{
  $randomId = rand(1, 65);
  $Q = new Q();
  $Q->hydrate($DB->getQById($randomId));
  return $Q->jsonFormat();
}

if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case 'getRandomQ':
      echo getRandomQ($DB);
      //return $Q->jsonFormat();
      break;

    case 'addLike':
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $Q = new Q();
        $Q->hydrate($DB->getQById($id));
        $Q->addLike($DB);
        echo getRandomQ($DB);
        //return $Q->jsonFormat();
      }
      break;

    case 'addDislike':
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $Q = new Q();
        $Q->hydrate($DB->getQById($id));
        $Q->addDislike($DB);
        echo getRandomQ($DB);
      }
      break;

    case 'getRanking':
      $max = isset($_GET['max']) ? (int) $_GET['max'] : 8;
      $ranking = $DB->getRanking($max);
      echo ($ranking);
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
