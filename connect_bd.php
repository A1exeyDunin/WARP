        <?php
        $mysqli = mysqli_connect('localhost', 'Admin', '', 'bd1');
        if (!$mysqli) { echo "error" . mysqli_connect_error(); }
             
              return $mysqli;  
            
        
            
        $result = mysqli_query($mysqli, 'SELECT id, title, text FROM articles');
        if (!$result) {
            echo "error";
        }   
            
            
     
            $myrow = mysqli_fetch_array($result);   

        
         
            mysqli_close($mysqli);
            
            
            
            
            
            
?>