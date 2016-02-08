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
        

        while ($row = mysql_fetch_assoc($result))  {
        $myrow[] = $row; 
         echo $myrow['title'] . "<br/>" . $myrow['text'] . "<br/>";
        } 
        
        ?>
    </body>
</html>
