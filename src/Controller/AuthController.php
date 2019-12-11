<?php 

function login() {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if (empty($_POST['username'])) {
            $_SESSION['errors']['usernameErr'] = "Username is required";
        }
        if (empty($_POST['password'])) {
            $_SESSION['errors']['passwordErr'] = "Password is required";
        }
        
        if (!isset($_SESSION["errors"])) {
            require MODEL . 'UserModel.php';
            $user = getUser();
            if ($user && password_verify($_POST['password'], $user["password"])) {
                $_SESSION['id'] = $user["id"];
                $_SESSION['username'] = $user['username'];
                header('Location: /');
                exit();
            } else {
                $_SESSION['errors']['identifiantErr'] = "Identifiant pas bon";
                header('Location: /login');
                exit();
            }
        } else {
            header('Location: /login');
            exit();
        }
    }
}

function register() {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if (empty($_POST['username'])) {
            $_SESSION['errors']['usernameErr'] = "Username is required";
        }
        if (empty($_POST['password'])) {
            $_SESSION['errors']['passwordErr'] = "Password is required";
        }
        if ($user = $_POST['username']) {
            $_SESSION['errors']['existErr'] = "Username is already taken";
        }
        if (!isset($_SESSION['errors'])) {
            # code...
            require MODEL . 'UserModel.php';
            registerUser();
            header('Location: /login');
            exit();
        } else {
            header('Location: /register');
            exit();
        }
    } 
}

function showLogin() {
    require VIEW . 'Auth/login.php';
}

function showRegister() {
    require VIEW . 'Auth/register.php';
}

function logout() {
    SESSION_unset();
    session_destroy();
    header('Location: /login');
}