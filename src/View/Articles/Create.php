<?php 
    if (!isset($_SESSION['id'])) {
        header('Location: /login');
    }     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../Css/Articles-Create.css">
    <title>Create Page</title>
    <script src="https://kit.fontawesome.com/793bab6dd0.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
        <div class="left-header">
            <a href="/"><img src="../../Img/logo.png" alt="logo"></a>
        </div>
        <div class="right-header">
            <div class="div-nav">
                <nav>
                    <ul>
                        <li><a href="/articles">Articles</a></li>
                    </ul>
                </nav>
            </div>
            <div class="div-form-logout">
                <form action="/logout" method="post">
                    <button type="submit"><i class="fas fa-door-open"></i></button>
                </form>
                <p> Connected on : <span
                        style="color:red"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "";?></span>
                </p>
            </div>
        </div>
    </header>

    <main>
        <form class="form-create" action="/articles" method="post">
        <label for="title">Title</label>
            <input type="text" name="title" autocomplete="off">
            <span style="color:red"><?php echo errors("titleErr");?></span>
            <label for="slug">Slug</label>
            <input type="text" name="slug" autocomplete="off">
            <span style="color:red"><?php echo errors("slugErr");?></span>
            <label for="user_id">User_id</label>
            <input type="text" name="user_id" autocomplete="off">
            <span style="color:red"><?php echo errors("user_idErr");?></span>
            <label for="contenu">Contenu</label>
            <textarea name="contenu" id="contenu" cols="30" rows="10" autocomplete="off"></textarea>
            <span style="color:red"><?php echo errors("contenuErr");?></span>
            <button type="submit"><i class="fab fa-affiliatetheme"></i></button>
        </form>
    </main>
</body>

</html>
<?php 
 unset($_SESSION["errors"]); 
