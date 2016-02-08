<?php

include 'connect_bd.php';
include 'functions.php';





$mysqli = connect();
$mydata = take($mysqli);

include 'view.php';




?>

