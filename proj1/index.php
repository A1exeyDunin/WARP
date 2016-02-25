<?php

include 'functions/connect_bd.php';
include 'functions/functions.php';

$mysqli = connect();
$mydata_article = take_article($mysqli);


if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "";
}

if ($action == "add") {
    $id = $_GET["id"];


    $id = $_POST["id"];
    $title = $_POST["title"];
    $text = $_POST["text"];

    $newtext = new_article($mysqli, $id, $title, $text);
    header("Location: index.php");
}
include 'view/view.php';
?>
