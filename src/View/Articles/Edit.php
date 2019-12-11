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
    <link rel="stylesheet" href="../../Css/Articles-Edit.css">
    <title>Edit Page</title>
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
   
        <form class="form-edit" action="/articles/<?php echo $article['slug'];?>" method="post">
        <label for="title">title</label>
            <input type="text" name="title" value="<?php echo $article['title'];?>">
            <span style="color:red"><?php echo errors("titleErr");?></span>
            <label for="slug">slug</label>
            <input type="text" name="slug" value="<?php echo $article['slug'];?>">
            <span style="color:red"><?php echo errors("slugErr");?></span>
            <label for="contenu">contenu</label>
            <textarea name="contenu" id="contenu" cols="30" rows="10"><?php echo $article['contenu'];?></textarea>
            <span style="color:red"><?php echo errors("contenuErr");?></span>
            <button type="submit"><i class="fab fa-affiliatetheme"></i></button>
        </form>
    </main>
</body>

</html>
<?php 
 unset($_SESSION["errors"]); 
