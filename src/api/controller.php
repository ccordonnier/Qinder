<?php
//require_once __DIR__ . '../../vendor/autoload.php';
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Credentials: true');

require "model.php";
require "Q.php";

//use Qinder\Http\Response;

//$Response = new Response();


$DB = new DB();

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
      break;

    case 'addLike':
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $Q = new Q();
        $Q->hydrate($DB->getQById($id));
        $Q->addLike($DB);
        echo getRandomQ($DB);
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
