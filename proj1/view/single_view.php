
<html>
    <head>
        <meta charset="utf-8">

        <title></title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="content">
            <?php
            // echo $mydata['title'] . "<br/>" . $mydata['text'] . "<br/>";
            ?>


            <h3><?= $mydata['title'] ?></h3>
            <p><?= $mydata['text'] ?></p>


            <form action="" method="post">
                <p>Name</p>
                <input type="text">
                <p>Theme</p>
                <input type="text">
                <p>Write comment:</p>
                <textarea name="comment" rows="10" cols="60"></textarea>
                <br>
                <input type="submit" value="Add comment">
            </form>
        </div>
    </body>
</html>
