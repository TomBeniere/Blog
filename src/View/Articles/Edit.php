<?php 
    require SRC . 'Helper.php';
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
        <h1>Articles Edit Page</h1>
    </header>
    <main>
   
        <form action="/articles/<?php echo $article['slug'];?>" method="post">
        <label for="title">title</label>
            <input type="text" name="title" value="<?php echo $article['title'];?>">
            <span style="color:red"><?php echo errors("titleErr");?></span>
            <label for="slug">slug</label>
            <input type="text" name="slug" value="<?php echo $article['slug'];?>">
            <span style="color:red"><?php echo errors("slugErr");?></span>
            <label for="contenu">contenu</label>
            <textarea name="contenu" id="contenu" cols="30" rows="10"><?php echo $article['contenu'];?></textarea>
            <span style="color:red"><?php echo errors("contenuErr");?></span>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>
<?php 
 unset($_SESSION["errors"]); 
 ?>