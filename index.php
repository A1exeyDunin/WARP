<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'connect_bd.php';
include 'functions.php';
include 'articles.php';
?>
<html>
    <head>
        <meta charset="windows-1251">
        <title>SITE</title>
    </head>
    <body>
        <?php
        
        echo $myrow["title"];
        echo "<br/>";
        echo $myrow["text"];
        
        ?>
    </body>
</html>
