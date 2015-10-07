<?php
session_start();
include ("../views/header.php");
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
<div class="h2"><h2>Marvel Comics Universe User Management Console</h2></div>
<div class="h3"><h2>Remove Users</h2></div>
<?php
$qry=mysql_query("SELECT * FROM websiteusers", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
?>
<form id="form1" name="form1" method="post" action="category_removed.php">
<div class="h3"> <p>Select a User:</p><div>
<label for="category"></label>
<select name="category" id="category">
<?php
while($row=mysql_fetch_array($qry))
{
echo "<option value='".$row['fullname']."'>".$row['fullname']."</option>";
}
?>

</select>
<input type="submit" name="submit" id="submit" value="Remove" />
</form>
<?php
include ('../views/footer.php');
?>


