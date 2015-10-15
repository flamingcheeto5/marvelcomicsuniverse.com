<?php
include ('header.php');
define('DB_HOST', '50.62.209.53:3306');
define('DB_NAME', 'cit336-test');
define('DB_USER','cit336');
define('DB_PASSWORD','cit336');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$fullname = $_POST['name'];
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "<p style='color:red'>Successfully Registered!!</p>";
	}
}

function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "<p style='color:red'>SORRY...YOU ARE ALREADY REGISTERED USER...<p>";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}

?>

<?php

include ('footer.php');
?>
