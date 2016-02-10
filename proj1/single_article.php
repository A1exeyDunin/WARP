<?php

include 'functions/connect_bd.php';
include 'functions/functions.php';





$mysqli = connect();

$id = $_GET["id"];



$mydata = take1($mysqli,$id);


include 'view/single_view.php';








?>