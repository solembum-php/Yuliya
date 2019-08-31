<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>main page</title>
        <script src="../ckeditor.js"></script>
    </head>
    <body>
        <header>
            <h1>Yuliya's Site</h1>
        </header>
        <main>
            <h2>Hi, all cat lovers!</h2>
            <form>
                <textarea name="editor1" id="editor1" rows="10" cols="80">
                    Here's some information on cats I'd like to share with you.
                </textarea>
                <script>
                    CKEDITOR.replace('editor1');
                </script>
            </form>
        </main>
        <?php
        ?>
    </body>
</html>



