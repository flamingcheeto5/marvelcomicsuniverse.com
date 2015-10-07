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
$uname=$_POST['u_name'];
$pass=$_POST['pass'];

$qry=mysql_query("SELECT * FROM login WHERE user='$uname'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
$row=mysql_fetch_array($qry);

if($_POST['u_name']==$row["user"]&&$_POST['pass']==$row["password"])
{
session_start();
$_SESSION['name']=$_POST['u_name'];
$uname=$_POST['u_name'];
header("Location:admin_panel.php");
}
else
{
header("Location:login.php?id=<div class='h2'>Bad username or password! Please try again!</div>");
}
}

?>