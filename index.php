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

        <?php
        
        $mysqli = connect();
        
        $mydata = take($mysqli);
        
        echo $mydata['title'];
        echo "<br/>";
        echo $mydata['text'];
        
        ?>

    