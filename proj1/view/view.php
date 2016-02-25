<?PHP header("Content-Type: text/html; charset=utf-8"); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>SITE</title>
        <link rel="stylesheet" href="../css/bootstrap-theme.css"/>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <font face="Arial">
        <header>
            <div class="header">
            </div>
        </header>
        <div id="mainmenu" class="navbar-default">
            <ul class="nav nav-tabs"> 
                <li><a href="#">Главная</a></li>
                <li><a href="../view/newtext.php">Добавить статью</a></li>
                <li><a href="#">link 3</a></li>
                <li><a href="#">link 4</a></li>
                <li><a href="#">link 5</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
            foreach ($mydata as $val) {
                echo '<a href = single_article.php?id=' . $val['id'] . '>' . $val['title'] . "</a><br/><br/>"
                . $val['text'] . "<br/><br/>";
            }
            ?>

            <p> </p>
        </div>
        <footer>
            <div class="footer">
            </div>
        </footer>
        </font>
    </body>
</html>
