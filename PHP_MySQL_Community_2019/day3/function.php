<?php

function saysomething(){
    echo "Hello";
}

function sum($a,$b){
    echo $a+$b;
}

function sumReturn($a,$b){
    return $a+$b;
}

function sayMsg($a){
    echo $a;
}

sayMsg(
    sumReturn(
        sumReturn(
            sumReturn(1,2),2),2));

// saysomething();
// sum(1,2);
// sayMsg("This is a custom message");



?>