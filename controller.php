<?php
// (A) DATABASE CONNECTION
require "1-model.php";
require "Q.php";
$DB = new DB();
$pdo = new PDO("mysql:host=localhost;dbname=qinder", 'root', '');

/**
 * This function find a Q by his id
 *
 * @param [int] $id
 * @return [Object] Q
 */
function getQById($id)
{
  $DB = new DB();
  $req_content = "SELECT * FROM q WHERE id=?";
  $req = $DB->select($req_content, [$id])[0];
  $Q = new Q($req['id'], $req['url'], $req['likes'], $req['dislikes']);
  return $Q;
}

var_dump(getQById($_GET['id']));
//SEARCH FOR Q
$Q = getQById($_GET['id']);


$results = $DB->select(
  "SELECT * FROM `q` WHERE `id` LIKE ?",
  [$_GET['id']]
);

//OUTPUT RESULTS
