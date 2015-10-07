<?php
include ('header.php'); 
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
		echo "<h1 style='color:red'>Welcome!</h1><p style='color:red'>Click below to go to members area:<p>
				<a href='index.html' style='color:white'>Home</a>";
		include ('footer.php');
	}
	else
	{
		echo "<p style='color:red'>SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...</p>";
		include ('footer.php');
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
