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

function insert($mysqli){
    $result = mysqli_query($mysqli, "INSERT INTO comment (author, page_id, comment) "
            . "VALUES ('author', 'page_id', 'comments')");
}

function comment($mysqli,$page_id){
    $result = mysqli_query($mysqli, "SELECT * FROM comment WHERE page_id=$page_id")
            or die(mysqli_error());
    $row = mysqli_fetch_assoc($result);
    return $row;
}