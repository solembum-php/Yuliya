<?php

include_once 'config.php';
include_once 'functions.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>main page</title>
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <form action="edittext.php" method="post">
            <textarea name="new_text" id="editor1" rows="10" cols="80">
                    <?php echo $texts; ?>
            </textarea>
            <input id="add_btn" type="submit" value="save edit text"/>
            <script>
                CKEDITOR.replace('editor1');
            </script>
        </form>
    </body>
</html>



