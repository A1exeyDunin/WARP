<?php

include 'connect_bd.php';
include 'functions.php';
include 'articles.php';




$mysqli = connect();

$mydata = take($mysqli);

echo $mydata['title'] . "<br/>" . $mydata['text'];



?>

