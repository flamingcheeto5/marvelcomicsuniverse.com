<?php
include ('../views/header.php'); 
define('DB_HOST', '50.62.209.53:3306');
define('DB_NAME', 'cit336-test');
define('DB_USER','cit336');
define('DB_PASSWORD','cit336');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

function SignIn()
{
session_start(); 
if(!empty($_POST['user']))   
{
	$query = mysql_query("SELECT *  FROM websiteusers where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['userName']) AND !empty($row['pass']))
	{
		$_SESSION['userName'] = $row['pass'];
		echo "<h1 style='color:red'>Welcome to the Members Area!</h1>";
		echo "<br><br>";
		echo "<a href=logout.php style='color:blue'>Logout</a>";
		
		include ('../views/footer.php');
	}
else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>

<?php


?>
