<?php
include ('../views/header.php');
?>

<div class="h2">
<h2>Administrator Login</h2>
<form id="form1" name="form1" method="post" action="verify_user.php">
<p>Username :
<label for="u_name"></label>
<input type="text" name="u_name" id="u_name" />
</p>
<p>Password :
<label for="pass"></label>
<input type="password" name="pass" id="pass" />
</p>
<p>
<input type="submit" name="submit" id="submit" value="Login" />
</p>
</form>
<br>
</div>
<?php
if(isset($_GET['id']))
{
echo $_GET['id'];
}
?>



<?php
include ('../views/footer.php');
?>
