<?php
include_once 'config.php';
include_once 'functionstextedit.php';

$new_text = getRequestText();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Yuliya's Site</title>
        <link href="CSS/mainpage.css" rel="stylesheet" type="text/css"/>
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <header>
            <h1>Yuliya's Site</h1>
        </header>
        <nav>
            <a href="mainpage.php">About me</a>
            <a href="photogallery.php">Photogallery</a>
        </nav>
        <main>
            <h2>Hi, all cat lovers!</h2>
            <div>
                <h3><?php echo $new_text ?></h3>
            </div>
            <h4>And here are some famous sayings about cats:</h4>
            <p>“Time spent with cats is never wasted.” – Sigmund Freud.</p>
            <p>“Cats rule the world.” – Jim Davis.</p>
            <p>“Like all pure creatures, cats are practical.” – William S. Burroughs.</p>
            <p>“Cats will outsmart dogs every time.” – John Grogan.</p>
            <p>“Cats choose us; we don't own them.” – Kristin Cast.</p>
        </main>
        <footer>Powered by solembum 2019</footer>
        <?php
        ?>
    </body>
</html>
