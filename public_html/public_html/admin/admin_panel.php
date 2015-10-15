<?php
session_start();
include ('../views/header.php');
if(isset($_SESSION['name']))
{
if(!$_SESSION['name']=='admin')
{
header("Location:login.php?id=<div class='h2'>You are not authorised to access this page unless you are administrator of this website</div>");
}
}
else
{
header("Location:login.php?id=<div class='h2'>You are not authorised to access this page unless you are administrator of this website</div>");
}
?>

<div class="h2">
<h2>Marvel Comics Universe User Management Console</h2>
</div>
<div class="h3">
<?php
echo "Welcome ".$_SESSION['name']." !";
?>
</div>
<br><br>
<a href=remove_user.php style='color:red'>Remove a User</a><br/>
<br><br>

<?php
echo "<a href=logout.php style='color:white'>Logout</a>";
include ('../views/footer.php');
?>