<?php

function take($mysqli) {
    $result = mysqli_query($mysqli, 'SELECT id, title, text FROM articles') or die(mysqli_error());

    $myrow = mysqli_fetch_assoc($result);
    
    return $myrow;
}


?>