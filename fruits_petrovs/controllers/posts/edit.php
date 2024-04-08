<?php


require "Validator.php";
require "Database.php";
$config = require "config.php";
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];
  $title = $_POST["title"];
  if (!Validator::string($title, null, 255))
  $errors["title"] = "Nedrīkst būt mazs vai liels";
  }

  $max_category_id = $db->execute("SELECT MAX(id) FROM categories;", [])->fetch()["MAX(id)"];
  if (!Validator::number($_POST["category_id"] > $max_category_id)) {
    $errors["category_id"] = "Nav atbilstošas kategorijas";
  }

  if (empty($errors)) {
    $query = "UPDATE posts
    SET tittle = :tittle , category_id = :category_id
    WHERE id = :id";
  }
    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category_id"],
        ":id" => $_POST=["id"]
    ];
    $db->execute($query, $params);
    header("Location: /");
    die();
  



  $query = "SELECT * FROM posts where id = :id";
  $params= [":id" =>$_GET["id"]];
 $_POST = $db->execute($query, $params)->fetch();




$page_title = "Create a Post";

require "views/components/posts/edit.view.php";