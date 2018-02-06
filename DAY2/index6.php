<?php

session_start();
$a = 5;
$b = 10;
$c = 100;
$d = 100;
$e = 100;
$f = 100;
$g = 100;

$c = $d = $e = $f = $g = 100;

var_dump($_SESSION);

$name = $_SESSION['specialBucket'];

echo "Special bucket contains $name";

?>