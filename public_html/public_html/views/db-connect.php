<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'cit336-test');
define('DB_USER','cit336');
define('DB_PASSWORD','cit336');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
echo “Successfully connected to your database…”;
}


Read more: http://mrbool.com/how-to-create-a-sign-up-form-registration-with-php-and-mysql/28675#ixzz3LzUwxaOt

?>


