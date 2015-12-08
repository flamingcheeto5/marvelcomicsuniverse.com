<?php
// Array with username suggestions
$a[] = "Mandy465";
$a[] = "blink-182";
$a[] = "bogus.journey2";
$a[] = "kittykat1962";
$a[] = "dhardin12";

$u = $_REQUEST["u"];

$result = "";


if ($u !== "") {
    $u = strtolower($u);
    $len=strlen($u);
    foreach($a as $username) {
        if (stristr($u, substr($username, 0, $len))) {
            if ($result === "") {
                $result = $username;
            } else {
                $result .= ", $username";
            }
        }
    }
}


echo $result === "" ? "no username found" : $result;
?> 