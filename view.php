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
        
        foreach ($mydata as $val) {
        echo $val['title'] . "<br/>" . $val['text'] . "<br/>";
        }
        
        
        ?>
    </body>
</html>
