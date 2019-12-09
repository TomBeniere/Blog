<?php 
function articleIndex() {
    require MODEL . 'ArticleModel.php';
    $article = getArticles();
    require VIEW . 'Articles/Index.php';
}

function articleCreate() {
   require VIEW . 'Articles/Create.php';
}

function articleShow($slug) {
    require MODEL . 'ArticleModel.php';
    $article = getArticle($slug);
    if ($article) {
        require VIEW . 'Articles/Show.php';
    } else {
        header('Location: /articles');
    }
}

function articleEdit($slug) {
    require MODEL . 'ArticleModel.php';
    $article = getArticle($slug);
    if ($article) {
        require VIEW . 'Articles/Edit.php';
    } else {
        header('Location: /articles');
    }
}

function articleUpdate($slug) {
    if (isset($_POST['slug']) && isset($_POST['title']) && isset($_POST['contenu'])) {
        if(empty($_POST['slug'])) {
            $_SESSION['errors']['slugErr'] = "Slug is required";
        } elseif (empty($_POST['title'])) {
            $_SESSION['errors']['titleErr'] = "Title is required";
        }elseif (empty($_POST['contenu'])) {
            $_SESSION['errors']['contenuErr'] = "Contenu is required";
        } else {
    require MODEL . 'ArticleModel.php';
    UpdateArticle($slug);
    header('Location: /articles/' . $_POST['slug']);
        }
    }
}

function articleDelete($slug) {
    require MODEL . 'ArticleModel.php';
    deleteArticle($slug);
    header('Location: /articles');
}

function articleStore() {
        if (isset($_POST['slug']) && isset($_POST['title']) && isset($_POST['contenu']) && isset($_POST['user_id'])) {
        if(empty($_POST['slug'])) {
        $_SESSION['errors']['slugErr'] = "Slug is required";
        } elseif (empty($_POST['title'])) {
            $_SESSION['errors']['titleErr'] = "Title is required";
        }elseif (empty($_POST['contenu'])) {
            $_SESSION['errors']['contenuErr'] = "Contenu is required";
        }elseif (empty($_POST['user_id'])) {
            $_SESSION['errors']['user_idErr'] = "User_id is required";
        } else {
    Require MODEL . 'ArticleModel.php';
    storeArticle();
    header('Location: /articles');
            }
        }
}