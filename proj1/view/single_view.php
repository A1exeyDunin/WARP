<?PHP header("Content-Type: text/html; charset=utf-8"); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h3><?= $mydata_article['title'] ?></h3>
                <p class="text-justify"><?= $mydata_article['text'] ?></p>
                <hr>

                <?php if (!isset($mydata_comment)) : ?>
                    <p>no comments</p>
                <?php else : ?>
                    <?php foreach ($mydata_comment as $com) : ?>
                        <?= $com['author'] ?> <br/>
                        <?= $com['comment'] ?> <br/> <hr>
                    <?php endforeach; ?>
                <?php endif; ?>

                <form name="comments" action="../single_article.php?action=add&id=<?= $mydata_article['id'] ?>" method="post">
                    <div class="form-group">
                        <label>Имя:</label>
                        <input type="text" name="author" class="form-item form-control" required placeholder="Введите Ваше имя"/>
                    </div>
                    <div class="form-group">
                        <label>Комментарий:</label>
                        <br />
                        <textarea name="comment" class="form-control" cols="80" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="page_id" value="<?php echo $id ?>" />
                        <input type="submit" class="btn btn-success" value="Комментировать"  />
                    </div>
                </form>

                <a href="../index.php">На главную</a> 
            </div>
        </div>
    </body>
</html>
