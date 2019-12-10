<?php
session_start();
define('SRC',__DIR__ . '/../src/');

define('CONTROLLER',__DIR__ . '/../src/controller/');
define('MODEL',__DIR__ . '/../src/model/');
define('VIEW',__DIR__ . '/../src/view/');

define('DATABASE', 'blog');
define('USER', 'root');
define('PASSWORD', 'root');

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

require_once SRC . 'Router.php';
require SRC . 'Helper.php';
    run();