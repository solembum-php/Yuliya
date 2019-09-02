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
            <?php foreach ($texts as $key => $text) : ?>
            <form>
                <textarea name="editor1" id="editor1" rows="10" cols="80">
                    <?= $text['new_text'] ?>
                </textarea>
            </form>
            <?php endforeach; ?>
        </main>
        <footer>Powered by solembum 2019</footer>
        <?php
        ?>
    </body>
</html>
