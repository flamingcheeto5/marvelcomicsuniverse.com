<?php
    require_once('../util/secure_conn.php');  // require a secure connection
    require_once('../util/valid_admin.php');  // require a valid admin user
	include ('header.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Admin Console</title>
    </head>
    <body>

                <h1 style="color:white">Marvel Comics Universe Admin Console</h1>


                <h1 style="color:white">Menu</h1>
                <p><a href="index.php?action=show_product_manager">Product Manager</a></p>
                <p><a href="index.php?action=show_order_manager">Order Manager</a></p>
                <p><a href="index.php?action=logout">Logout</a></p>
    </body>
</html>

<?php
include ('footer.php');
?>
