


        <?php
        
        

        
       
        function take($mysqli)
        {


        $result = mysqli_query($mysqli, 'SELECT id, title, text FROM articles');
        {
        if (!$result) { echo "error in functions <br/>"; }
            else { $myrow = mysqli_fetch_array($result); }
           
        }       
         return $myrow;
        }   
        
      
        
        
        ?>
    