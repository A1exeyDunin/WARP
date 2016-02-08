<?php

function take($mysqli) {
    $result = mysqli_query($mysqli, 'SELECT id, title, text FROM articles') or die(mysqli_error());

    while ($myrow = mysqli_fetch_assoc($result)) {
        echo $myrow['title'] . "<br/>" . $myrow['text'] . "<br/>";
    }
}

return $myrow;
?>