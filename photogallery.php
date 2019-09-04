<?php
include_once 'functions.php';

$pictures = getAllPictures();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yuliya's Photogallery</title>
        <link href="CSS/mainpage.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <h1>Yuliya's Photogallery</h1>
        </header>
        <main>
            <?php foreach ($pictures as $key => $picture) : ?>
                <div id="pictures">
                    <?php if ($key !== 0 && $key !== 1) : ?>
                        <a><img src="photos/<?= $picture ?>" alt="photo" height="200"/></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </main>
    </body>
</html>
