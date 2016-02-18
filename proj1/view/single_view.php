<?PHP header("Content-Type: text/html; charset=utf-8"); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
        <div class="content">

            <h3><?= $mydata['title'] ?></h3>
            <p class="text-justify"><?= $mydata['text'] ?></p>
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
                <div class="form-group">
                    <label>Author:</label>
                    <input type="text" name="author" class="form-item form-control" required placeholder="write your name"/>
                </div>
                <div class="form-group">
                    <label>Comment:</label>
                    <br />
                    <textarea name="comment" class="form-control" cols="80" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="page_id" value="<?php echo $id ?>" />
                    <input type="submit" class="btn btn-success" value="Send"  />
                </div>
            </form>
                 <a href="http://site.ua">На главную</a> 
        </div>
        </div>

    </body>
</html>
