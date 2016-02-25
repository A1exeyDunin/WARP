<?php

function take_article($mysqli) {
    $result = mysqli_query($mysqli, "SELECT id, title, text FROM articles ORDER BY id DESC LIMIT 5")
            or die(mysqli_error());
    while ($row = mysqli_fetch_assoc($result)) {
        $myrow[] = $row;
    }
    return $myrow;
}

function take_single_article($mysqli, $id) {
    $result = mysqli_query($mysqli, "SELECT id, title, text FROM articles WHERE id=$id")
            or die(mysqli_error());
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function insert_comment($mysqli, $author, $page_id, $comment) {
    $result = mysqli_query($mysqli, "INSERT INTO comments (author, page_id, comment) "
            . "VALUES ('" . $author . "', '" . $page_id . "', '" . $comment . "') ")
            or die(mysqli_error());
    return $result;
}

function take_comment($mysqli, $page_id) {
    $result = mysqli_query($mysqli, "SELECT author, comment FROM comments WHERE page_id=$page_id")
            or die(mysqli_error());
    while (
    $row = mysqli_fetch_assoc($result)) {
        $myrow[] = $row;
    }
    return $myrow;
}

function new_article($mysqli, $id, $title, $text) {
    $result = mysqli_query($mysqli, "INSERT INTO articles (id, title, text) "
            . "VALUES ('" . $id . "','" . $title . "','" . $text . "') ")
            or die(mysqli_error());
    return $result;
}
