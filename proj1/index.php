<?php

include 'functions/connect_bd.php';
include 'functions/functions.php';





$mysqli = connect();
$mydata = take($mysqli);

include 'view/view.php';






?>