<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminPage</title>
    </head>
    <body>
	<form method="post" name="admin_page" action="admin_correct.php">
            <label>
                Login:
                <input type="text" name="login" value="admin"/>
            </label>
	    <label>
                Password:
                <input type="password" name="pass" value="admin"/>
            </label>
            <input type="submit" value="log in"/>
        </form>
	<?php
	// put your code here
	?>
    </body>
</html>
