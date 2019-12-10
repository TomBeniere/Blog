<?php 
    if (isset($_SESSION['id'])) {
        header('Location: /');
    }     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../Css/Register.css">
    <title>Register</title>
    <script src="https://kit.fontawesome.com/793bab6dd0.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <form action="/login" method="post">
            <label for="username">Username </label>
            <input type="text" name="username" autocomplete="off">
            <span style="color:red"><?php echo errors("usernameErr");?></span>
            <label for="password">Password </label>
            <input type="password" name="password" autocomplete="off">
            <span style="color:red"><?php echo errors("passwordErr");?></span>
            <button type="submit"><i class="fab fa-affiliatetheme"></i></button>
            <a href="/login">Login here !</a>
        </form>
    </main>
</body>

</html>

<?php 
 unset($_SESSION["errors"]); 
