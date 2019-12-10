<?php

function registerUser() {
    global $bdd;
    // requete sql
    $req = $bdd->prepare('INSERT INTO user (username,password) VALUES (:username,:password) ');
    $req->execute(array(   
        'username' => test_input($_POST['username']),
        "password" => password_hash(test_input($_POST['password']), PASSWORD_DEFAULT)
    ));
}

function getUser() {
    global $bdd;
    // requete sql
    $response = $bdd->prepare('SELECT * FROM user WHERE username = :username');

    $response->execute(array(
        "username" => $_POST["username"]
    ));
    return $user = $response->fetch();
}