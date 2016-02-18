<?php

function take($mysqli) {
    $result = mysqli_query($mysqli, 'SELECT id, title, text FROM articles') or die(mysqli_error());

    while ($row = mysqli_fetch_assoc($result)) {
        $myrow[] = $row;
    }

    return $myrow;
}

function take1($mysqli, $id) {
    $result = mysqli_query($mysqli, "SELECT id, title, text FROM articles WHERE id=$id")
            or die(mysqli_error());
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function insert($mysqli, $author, $page_id, $comment) {
    $result = mysqli_query($mysqli, "INSERT INTO comments (author, page_id, comment) "
            . "VALUES ('" . $author . "', '" . $page_id . "', '" . $comment . "') ")
            or die(mysqli_error());
    return $result;
}

function comment($mysqli, $page_id) {
    $result = mysqli_query($mysqli, "SELECT author, comment FROM comments WHERE page_id=$page_id")
            or die(mysqli_error());
    while (
    $row = mysqli_fetch_assoc($result)) {
        $myrow[] = $row;
    }
    return $myrow;
}
