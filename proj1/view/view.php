<?PHP header("Content-Type: text/html; charset=utf-8"); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" src="jquery-1.5.1.min.js"></script>
        <title>SITE</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/scripts.js"></script>
    </head>
    <body>
        <font face="Arial">

        <div id="mainmenu" class="navbar-default">
            <ul class="nav nav-tabs"> 
                <li><a href="../index.php">Главная</a></li>
                <li><a href="../view/newtext.php">Добавить статью</a></li>
                <li><a href="#">link 3</a></li>
                <li><a href="#">link 4</a></li>
                <li><a href="#">link 5</a></li>
            </ul>
        </div>

        <div id="content" class="content">

            <?php foreach ($mydata_article as $val) : ?>
                <a href = "single_article.php?id=<?= $val['id'] ?>">
                    <?= $val['title'] ?> </a><br/><br/>
                <?= $val['text'] ?> <br/><br/>
            <?php endforeach; ?>

        </div>
        <footer>
            <div class="footer">
            </div>
        </footer>
        </font>
    </body>
</html>
