<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="windows-1251">
        <title></title>
    </head>
    <body>
        <?php
        $mysqli = new mysqli('localhost', 'Admin', '', 'bd1');
        if (mysqli_connect_errno()) {
            echo "error" . mysqli_connect_error();
        }
       
        $result = mysqli_query($mysqli, 'SELECT id, title, text FROM articles');
        if (!$result) {
            echo "error";
        }
        
            $myrow = mysqli_fetch_array($result);
         
        

        
        $mysqli->close();
        ?>
    </body>
</html>
