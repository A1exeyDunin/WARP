<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SITE</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="header">
                <div class="header_i">
                    <div class="header_c">
                        <div class="header_t">
                        </div>
                    </div>    
                </div>
            </div>
        </header>
        <div id="mainmenu">
            <ul>
                <li><a href="#"> MAIN </a></li>
                <li><a href="#">link 2</a></li>
                <li><a href="#">link 3</a></li>
                <li><a href="#">link 4</a></li>
                <li><a href="#">link 5</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
            foreach ($mydata as $val) {
                echo '<a href = single_article.php?id=' . $val['id'] . '>' . $val['title'] . "</a><br/>";
            }
            ?>

            <p>text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT 
                text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT 
                text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT
                text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT 
                text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT text TEXT </p>
        </div>
        <footer>
            <div class="footer">
                THE BEST SITE
            </div>
        </footer>
    </body>
</html>
