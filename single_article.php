<?php

include 'connect_bd.php';
include 'functions.php';





$mysqli = connect();

$id = $_GET["id"];



$mydata = take1($mysqli,$id);


include 'single_view.php';








?>