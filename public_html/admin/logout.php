<?php
session_start();
$_SESSION=array();
setcookie(session_name(),"",time()-3600);
session_destroy();
header("Location: login.php?id=<div class='h2'>You are successfully logged out!</div>");
?>
