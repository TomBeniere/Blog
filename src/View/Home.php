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
    <link rel="stylesheet" href="../../Css/Home.css">
    <title>Blog</title>
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
        <?php
    foreach ($articles as $article) {
        ?>
        <div class="bloc-article">
            <div>
                <h2><?php echo $article["title"];?></h2>
                <p><?php echo $article["contenu"];?></p>
                <p>slug : <?php echo $article["slug"];?></p>
                <p>created : <?php echo $article["created_at"];?></p>
            </div>
            <div class="bloc-article-action"> 
                <a class="edit" href="/articles/<?php echo $article['slug'];?>/edit"><i class="fas fa-edit"></i></a>
                <form action="/articles/<?php echo $article['slug'];?>/delete" method="post">
                    <button class="delete" type="submit"><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
        <?php 
        }
?>
    </main>
</body>

</html>