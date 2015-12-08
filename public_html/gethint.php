<?php
// Array with password suggestions
$a[] = "P@ssw0rd1";
$a[] = "password";
$a[] = "Password123";
$a[] = "pAssWord135!";
$a[] = "PassWord!@#";

$p = $_REQUEST["p"];

$hint = "";


if ($p !== "") {
    $p = strtolower($p);
    $len=strlen($p);
    foreach($a as $password) {
        if (stristr($p, substr($password, 0, $len))) {
            if ($hint === "") {
                $hint = $password;
            } else {
                $hint .= ", $password";
            }
        }
    }
}


echo $hint === "" ? "no suggestion" : $hint;
?> 