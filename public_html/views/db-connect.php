<?php
define('DB_HOST', '50.62.160.227');
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




