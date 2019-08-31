<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>main page</title>
        <script src="../ckeditor.js"></script>
    </head>
    <body>
        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                    Here's some information on cats I'd like to share with you.
            </textarea>
            <script>
                CKEDITOR.replace('editor1');
            </script>
        </form>
    </body>
</html>



