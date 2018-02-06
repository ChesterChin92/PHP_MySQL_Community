<?php

$a = "I";
$b = "am";
$c = "very";
$d = "happy";

//Dangerous part of php
//Because we did not specify the DATA TYPE. 
//PHP will try it best to work.
echo $a+$b;

//I am very happy
$sentence = $a . ' ' . $b . ' ' . $c . ' ' . $d;

//very happy I am
$sentence2 = $c . ' '. $d . ' ' . $a . ' ' . $b;

//am I very happy
$sentence3 = $b . ' '. $a . ' ' . $c . ' '. $d;  

echo $sentence . $sentence2 . $sentence3;

?>