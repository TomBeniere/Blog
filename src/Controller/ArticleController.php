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
    $_SESSION['previous'] = $_SERVER['HTTP_REFERER'];
    require MODEL . 'ArticleModel.php';
    $article = getArticle($slug);
    if ($article) {
        require VIEW . 'Articles/Edit.php';
    } else {
        header('Location: /articles/edit');
    }
}

function articleUpdate($slug) {
    if (isset($_POST['slug']) && isset($_POST['title']) && isset($_POST['contenu'])) {
        if(empty($_POST['slug'])) {
            $_SESSION['errors']['slugErr'] = "Slug is required";
        } if (empty($_POST['title'])) {
            $_SESSION['errors']['titleErr'] = "Title is required";
        }if (empty($_POST['contenu'])) {
            $_SESSION['errors']['contenuErr'] = "Contenu is required";
        } if (!isset($_SESSION['errors'])) {
            require MODEL . 'ArticleModel.php';
            UpdateArticle($slug);
            header('Location: '. $_SESSION['previous']);
            exit();
        } else {
            header('Location: /articles/' . $slug . '/edit');
            exit();
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
        } if (empty($_POST['title'])) {
            $_SESSION['errors']['titleErr'] = "Title is required";
        }if (empty($_POST['contenu'])) {
            $_SESSION['errors']['contenuErr'] = "Contenu is required";
        }if (empty($_POST['user_id'])) {
            $_SESSION['errors']['user_idErr'] = "User_id is required";
        } if (!isset($_SESSION['errors'])) {
    Require MODEL . 'ArticleModel.php';
    storeArticle();
    header('Location: /articles');
    exit();
            } else {
                header('Location: /articles/nouveau');
                exit();
            }
        }
}