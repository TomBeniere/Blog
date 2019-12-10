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
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Register Page</h1>
    </header>
    <main>
        <form action="/register" method="post">
            <label for="username">username :</label>
            <input type="text" name="username">
            <span style="color:red"><?php echo errors("usernameErr");?></span>
            <label for="password">password :</label>
            <input type="password" name="password">
            <span style="color:red"><?php echo errors("passwordErr");?></span>
            <button type="submit">Submit</button>
            <a href="/login">login here !</a>
        </form>
    </main>
</body>

</html>

<?php 
 unset($_SESSION["errors"]);