<?php

include 'functions/connect_bd.php';
include 'functions/functions.php';





$mysqli = connect();

$id = $_GET["id"];


$mydata = take1($mysqli, $id);




include 'view/single_view.php';



$author = $_POST["author"];
$page_id = $_POST["page_id"];
$comment = $_POST["comment"];

$insert = insert($mysqli);

$mydata = comment($mysqli, $page_id);

?>
