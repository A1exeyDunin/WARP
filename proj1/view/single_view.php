
<html>
    <head>
        <meta charset="utf-8">

        <title></title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="content">

            <h3><?= $mydata['title'] ?></h3>
            <p><?= $mydata['text'] ?></p>

            <hr>

            <h4><?= $mydata1['author'] ?></h4>
            <p><?= $mydata1['comment'] ?></p>

            <hr>

            <form name="comments" action="../single_article.php" method="post">
                <p>
                    <label>Author:</label>
                    <input type="text" name="author" />
                </p>
                <p>
                    <label>Comment:</label>
                    <br />
                    <textarea name="comment" cols="80" rows="10"></textarea>
                </p>
                <p>
                    <input type="hidden" name="page_id" value="150" />
                    <input type="submit" value="Send" />
                </p>
            </form>
        </div>


    </body>
</html>
