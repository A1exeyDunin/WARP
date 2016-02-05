       

 <?php
        $mysqli = mysqli_connect('localhost', 'Admin', '', 'bd1');
        if (!$mysqli) { echo "error" . mysqli_connect_error(); }
        else { return $mysqli; } 
        
            

            mysqli_close($mysqli);
            
            
            
            
            
            
?>