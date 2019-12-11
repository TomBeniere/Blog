<?php 

function getlastArticles() {
    global $bdd;
    // requete sql
    $req = $bdd->query('SELECT * FROM article ORDER BY created_at DESC LIMIT 4');
    $articles = $req->fetchAll();

    return $articles;
}

function getArticles() {
    global $bdd;
    // requete sql
    $req = $bdd->query('SELECT * FROM article ORDER BY created_at DESC ');
    $article = $req->fetchAll();

    return $article;
}

function getArticle($slug) {
    global $bdd;
    // requete sql
    $req = $bdd->prepare('SELECT * FROM article WHERE slug = :slug');
    $req->execute(array(   
        'slug' => $slug
       ));
       $article = $req->fetch();

       return $article;
}

function updateArticle($slug) {
    global $bdd;
    // requete sql
    $req = $bdd->prepare('UPDATE article SET title = :title, contenu = :contenu, slug = :slugPost  WHERE slug = :slug');
    $req->execute(array(   
        'slug' => $slug,
        "title" => test_input($_POST['title']),
        "contenu" => test_input($_POST['contenu']),
        "slugPost" => test_input($_POST['slug'])
       ));
}

function deleteArticle($slug) {
    global $bdd;
    // requete sql
    $req = $bdd->prepare('DELETE FROM article WHERE slug = :slug');
    $req->execute(array(   
        'slug' => $slug,
       ));
}

function storeArticle() {
    global $bdd;
    // requete sql
    $req = $bdd->prepare('INSERT INTO article (title,contenu,slug,user_id) VALUES (:title,:contenu,:slug,:user_id) ');
    $req->execute(array(   
        'slug' => test_input($_POST['slug']),
        "title" => test_input($_POST['title']),
        "contenu" => test_input($_POST['contenu']),
        "user_id" => test_input($_POST['user_id']),
       ));
}