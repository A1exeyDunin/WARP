<?php include 'connect_bd.php'; ?>


        <?php
        
        

        
        function articles_all($mysqli)
        {
            
            $result = mysqli_query($mysqli, 'SELECT id, title, text FROM articles');
        if (!$result) {
        echo "error";}
            $myrow = mysqli_fetch_array($result);   
        }
        
        
      
        
        
        ?>
    