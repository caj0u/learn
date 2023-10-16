<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
</head>
<body>
    <h1>Blog</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <a href="ArticleController.php?id=<?= $article['id'] ?>">
                    <?= $article['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
<?php
require_once('controllers/ArticleController.php');
?>
