<?php

$date = "2017-12-08"; //yyyy-mm-dd

$array = explode("-",$date);

var_dump($array); //To study the behavior

echo $array[2]."-".$array[1]."-".$array[0]; //dd-mm-yyyy


?>