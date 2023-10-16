<?php
require_once('../includes/config.php');
require_once('../models/ArticleModel.php');

$articleModel = new ArticleModel($conn);

if (isset($_GET['id'])) {
    $articleId = $_GET['id'];
    $article = $articleModel->getArticleById($articleId);
    include('../views/single.php');
} else {
    $articles = $articleModel->getAllArticles();
    include('../views/index.php');
}
?>
