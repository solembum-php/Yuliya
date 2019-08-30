<?php
include_once 'functions.php';

$pictures = getAllPictures();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yuliya's Photogallery</title>
    </head>
    <body>
	<header>
	    <h1>Yuliya's Photogallery</h1>
	</header>
	
        <?php foreach ($pictures as $key => $picture) : ?>
            <div id="pictures">
                <?php if ($key !== 0 && $key !== 1) : ?>
                <a><img src="photos/<?= $picture ?>" alt="photo" width="250"/></a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </body>
</html>
