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
        <h1>Articles Create Page</h1>
    </header>
    <main>
        <form action="/articles" method="post">
        <label for="title">title</label>
            <input type="text" name="title">
            <span style="color:red"><?php echo errors("titleErr");?></span>
            <label for="slug">slug</label>
            <input type="text" name="slug">
            <span style="color:red"><?php echo errors("slugErr");?></span>
            <label for="user_id">user_id</label>
            <input type="text" name="user_id">
            <span style="color:red"><?php echo errors("user_idErr");?></span>
            <label for="contenu">contenu</label>
            <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
            <span style="color:red"><?php echo errors("contenuErr");?></span>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>
<?php 
 unset($_SESSION["errors"]); 
 ?>