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
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Article Index Page</h1>
        <p> Connect on : <span style="color:red"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "";?></span></p>
        <form action="/logout" method="post">
            <button type="submit" style="padding:0.5rem;background-color:red;">Logout</button>
        </form>
    </header>
    <main>
        <?php
    foreach ($article as $article) {
        ?>
        <div style="border: solid 1px black">
            <p>titre : <?php echo $article["title"];?></p>
            <p>contenu : <?php echo $article["contenu"];?></p>
            <p>slug : <?php echo $article["slug"];?></p>
            <p>date de creation : <?php echo $article["created_at"];?></p>
            <a href="/articles/<?php echo $article['slug'];?>/edit">Edit</a>
            <form action="/articles/<?php echo $article['slug'];?>/delete" method="post">
                <button type="submit">Delete</button>
            </form>
        </div>
        <?php 
        }
?>
    </main>
</body>

</html>