<?php

include 'functions/connect_bd.php';
$mysqli = connect();
$startFrom = $_POST['startFrom'];
$res = mysqli_query($mysqli, "SELECT id, title, text FROM articles ORDER BY id DESC LIMIT {$startFrom}, 5");
$articles = array();
while ($row = mysqli_fetch_assoc($res)) {
    $articles[] = $row;
}
echo json_encode($articles);

?>