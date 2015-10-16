<?php

	$server="50.62.209.53:3306";
	$user="tutorials";
	$pass="tutorials123";
	$db="flamingcheeto5_tutorials";
	
	// connect to mysql
	
	mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql.");
	
	// select the db
	
	mysql_select_db($db) or die("Sorry, can't select the database.");

?>