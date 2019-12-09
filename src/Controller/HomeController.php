<?php 

function home() {
    require MODEL . 'ArticleModel.php';
    $articles = getlastArticles();
    require VIEW . 'Home.php';
}