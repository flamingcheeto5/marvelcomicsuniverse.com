<?php
$dsn = 'mysql:host=localhost;dbname=cit336-test';
$username = 'cit336';
$password = 'cit336';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error = $e->getMessage();
    include('view/error.php');
    exit();
}
?>