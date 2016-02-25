<?PHP header("Content-Type: text/html; charset=utf-8"); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Новая статья</title>
        <link rel="stylesheet" href="../css/bootstrap-theme.css"/>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="content">

            <form name="articles" action="../index.php?action=add&id=<?= $mydata_article['id'] ?>" method="post">
                <div class="form-group">
                    <label>Название статьи:</label>
                    <input type="text" name="title" class="form-item form-control" required placeholder="Введите название статьи"/>
                </div>
                <div class="form-group">
                    <label>Текст статьи:</label>
                    <br />
                    <textarea name="text" class="form-control" cols="100" rows="30"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Опубликовать"  />
                </div>
            </form>

            <a href="../index.php">На главную</a>
        </div>
    </body>
</html>
