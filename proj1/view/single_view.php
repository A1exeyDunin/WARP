<?PHP header("Content-Type: text/html; charset=utf-8"); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title></title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="content">

            <h3><?= $mydata['title'] ?></h3>
            <p><?= $mydata['text'] ?></p>
            <hr>

            <?php
            if (!isset($mydata1)) {
                echo "no comments";
            } else {

                foreach ($mydata1 as $com) {

                    echo $com['author'] . "<br/>";

                    echo $com['comment'] . "<br/>" . "<hr>";
                }
            }
            ?>
            
            <form name="comments" action="../single_article.php?action=add&id=<?= $mydata['id'] ?>" method="post">
                <p>
                    <label>Author:</label>
                    <input type="text" name="author" required/>
                </p>
                <p>
                    <label>Comment:</label>
                    <br />
                    <textarea name="comment" cols="80" rows="10"></textarea>
                </p>
                <p>
                    <input type="hidden" name="page_id" value="<?php echo $id ?>" />
                    <input type="submit" value="Send"  />
                </p>
            </form>
            <form>
                 <a href="http://site.ua">На главную</a> 
            </form>
        </div>


    </body>
</html>
