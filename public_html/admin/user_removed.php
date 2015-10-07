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
<?php
$con = mysql_connect("50.62.209.53:3306","cit336","cit336");
if(!$con)
{
die("connection to database failed".mysql_error());
}
$dataselect = mysql_select_db("cit336-test",$con);
if(!$dataselect)
{
die("Database namelist not selected".mysql_error());
}
?>

<?php
$user=$_POST['category'];
$qry=mysql_query("DELETE FROM websiteusers WHERE fullname='$user'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
echo "<br/>";
echo "<p style='color:red'>User ".$user." successfully removed.</p>";
echo "<br/>";
}

?>
<a href=admin_panel.php style='color:white'>Go back to Admin Panel</a>

<?php
include ('../views/footer.php');
?>