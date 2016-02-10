<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SITE</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
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
                <li><a href="http://localhost/proj1/index.php#"> MAIN </a></li>
                <li><a href="#"> Пункт 2 </a></li>
                <li><a href="#"> Пункт 3 </a></li>
                <li><a href="#"> Пункт 4 </a></li>
                <li><a href="#"> Пункт 5 </a></li>
            </ul>
        </div>
        <div class="content">
            <?php
            foreach ($mydata as $val) {
                echo '<a href = single_article.php?id=' . $val['id'] . '>' . $val['title'] . "</a><br/>";
            }
            ?>

            <p>Перед вами учебный сайт для демонстрации возможностей HTML и CSS по 
                созданию своего ресурса и его публикации в Интернете. Поскольку 
                любой сайт должен содержать полезную или интересную информацию, мы 
                выбрали тему ловли льва в пустыне, которая будет, без всяких сомнений, 
                полезна любому посетителю. Так, на всякий случай.</p>
        </div>
        <footer>
            <div class="footer">
                САМЫЙ ЛУЧШИЙ САЙТ
            </div>
        </footer>
    </body>
</html>
