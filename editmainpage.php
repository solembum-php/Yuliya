<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>main page</title>
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <form action="edittext.php" method="post">
            <textarea name="text" id="editor1" rows="10" cols="80">
                    Here's some information on cats I'd like to share with you.
            </textarea>
            <input id="add_btn" type="submit" value="save edit text"/>
            <script>
                CKEDITOR.replace('editor1');
            </script>
        </form>
    </body>
</html>



