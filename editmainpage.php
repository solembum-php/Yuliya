<?php
include_once 'config.php';
include_once 'functionstextedit.php';


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>main page</title>
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <form action="edittext.php" method="get">
            <textarea name="new_text" id="editor1" rows="10" cols="80">
                Cats are the most mysterious creatures in the world.
            </textarea>
            <input id="add_btn" type="submit" value="save edit text"/>
            <script>
                CKEDITOR.replace('editor1');
            </script>
        </form>
    </body>
</html>



