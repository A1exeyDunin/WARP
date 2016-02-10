<?php

function take($mysqli) {
    $result = mysqli_query($mysqli, 'SELECT id, title, text FROM articles') or die(mysqli_error());

    while ($row = mysqli_fetch_assoc($result)) {
        $myrow[] = $row;
    }

    return $myrow;
}




function take1($mysqli,$id)
{
    $result = mysqli_query($mysqli, "SELECT id, title, text FROM articles WHERE id=$id") 
           or die(mysqli_error());
    $row = mysqli_fetch_assoc($result);
    return $row;
}
?>