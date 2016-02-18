<?php

function connect() {
    $mysqli = mysqli_connect('localhost', 'Admin', '', 'bd1');
    {
        if (!$mysqli) {
            echo "error in connet <br/>" . mysqli_connect_error();
        } else {
            
        }
        return $mysqli;
    }
}

?>