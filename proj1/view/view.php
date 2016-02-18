<?PHP header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>SITE</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="header">
            </div>
        </header>
        <div id="mainmenu">
            <ul>
                <li><a href="#"> Главная </a></li>
                <li><a href="#">link 2</a></li>
                <li><a href="#">link 3</a></li>
                <li><a href="#">link 4</a></li>
                <li><a href="#">link 5</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
            foreach ($mydata as $val) {
                echo '<a href = single_article.php?id=' . $val['id'] . '>' . $val['title'] . "</a><br/>"
                . $val['text'] . "<br/>";
            }
            ?>

            <p>вмирявпмивпарлпилкдвпмвочарпьквкиерилд </p>
        </div>
        <footer>
            <div class="footer">
            </div>
        </footer>
    </body>
</html>
