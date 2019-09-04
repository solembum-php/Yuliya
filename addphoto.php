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
	<form method="post" enctype="multipart/form-data" name="send_photo" action="uploadphoto.php">
            <label>
                Add photo:
                <input type="file" name="photo"/>
            </label>
            <input type="submit" value="upload"/>
        </form>
        <?php foreach ($pictures as $key => $picture) : ?>
            <div id="pictures">
                <?php if ($key !== 0 && $key !== 1) : ?>
                <a><img src="photos/<?= $picture ?>" alt="photo" height="200"/></a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </body>
</html>



