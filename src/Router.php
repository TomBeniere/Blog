<?php 

function run() {
    if ($_SERVER['REQUEST_URI'] == '/') {
        require CONTROLLER . 'HomeController.php';
        home();
    } 
    elseif (preg_match('#^\/articles\/([a-zA-Z0-9_-]+)\/delete$#',$_SERVER['REQUEST_URI'],$match) && $_SERVER["REQUEST_METHOD"] == "POST") {
        require CONTROLLER . 'ArticleController.php';
        articleDelete($match[1]);
    } 
    elseif (preg_match('#^\/articles\/([a-zA-Z0-9_-]+)$#',$_SERVER['REQUEST_URI'],$match) && $_SERVER["REQUEST_METHOD"] == "POST") {
        require CONTROLLER . 'ArticleController.php';
        articleUpdate($match[1]);
    }
    elseif (preg_match('#^\/articles$#',$_SERVER['REQUEST_URI']) && $_SERVER["REQUEST_METHOD"] == "POST") {
        require CONTROLLER . 'ArticleController.php';
        articleStore();
    } 
    elseif ($_SERVER['REQUEST_URI'] == '/articles') {
        require CONTROLLER . 'ArticleController.php';
        articleIndex();
    } 
    elseif (preg_match('#^\/articles\/nouveau$#',$_SERVER['REQUEST_URI'])) {
        require CONTROLLER . 'ArticleController.php';
        articleCreate();
    }  
    elseif (preg_match('#^\/articles\/([a-zA-Z0-9_-]+)$#',$_SERVER['REQUEST_URI'],$match)) {
        require CONTROLLER . 'ArticleController.php';
        articleShow($match[1]);
    } 
    elseif (preg_match('#^\/articles\/([a-zA-Z0-9_-]+)\/edit$#',$_SERVER['REQUEST_URI'],$match)) {
        require CONTROLLER . 'ArticleController.php';
        articleEdit($match[1]);
    } 
    elseif ($_SERVER['REQUEST_URI'] == '/login' && $_SERVER["REQUEST_METHOD"] == "POST") {
        require CONTROLLER . 'AuthController.php';
        login();
    }
    elseif ($_SERVER['REQUEST_URI'] == '/register' && $_SERVER["REQUEST_METHOD"] == "POST") {
        require CONTROLLER . 'AuthController.php';
        register();
    }
    elseif ($_SERVER['REQUEST_URI'] == '/logout' && $_SERVER["REQUEST_METHOD"] == "POST") {
        require CONTROLLER . 'AuthController.php';
        logout();
    }
    elseif ($_SERVER['REQUEST_URI'] == '/register') {
        require CONTROLLER . 'AuthController.php';
        showRegister();
    } 
    elseif ($_SERVER['REQUEST_URI'] == '/login') {
        require CONTROLLER . 'AuthController.php';
        showLogin();
    }
} 