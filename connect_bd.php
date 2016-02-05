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
