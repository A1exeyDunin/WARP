<?php

include 'functions/connect_bd.php';
include 'functions/functions.php';
$mysqli = connect();


if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "";
}

if ($action == "add") {
    $id = $_GET["id"];

    $author = $_POST["author"];
    $page_id = $_POST["page_id"];
    $comment = $_POST["comment"];

    $insert = insert_comment($mysqli, $author, $page_id, $comment);
    header("Location: single_article.php?id=$id");
} else {
    $id = $_GET["id"];
    $mydata_article = take_single_article($mysqli, $id);
    $mydata_comment = take_comment($mysqli, $id);

    include 'view/single_view.php';
}
?>
