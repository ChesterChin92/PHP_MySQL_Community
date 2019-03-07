<?php

function sumReturn($a,$b){
    return $a+$b;
}

function minusReturn($a,$b){
    return $a-$b;
}

function multiplicationReturn($a,$b){
    return $a*$b;
}

function divisionReturn($a,$b){
    return $a/$b;
}

function greeting($username){
    return "Hello, $username welcome to my website";
}

function generateNavbar($filename,$theCssClass){
    return "<nav class='$theCssClass'>
                <a href='$filename'>Go to $filename</a>
            </nav>";
}


echo greeting("Abu");
echo generateNavbar("practice.html","black");
echo generateNavbar("swicth.php",'white');

// echo sumReturn(5,5);
// echo minusReturn(5,1);
// echo multiplicationReturn(5,2);
// echo divisionReturn(10,2);


/// (5+5)-1
// (((5+5)-1)*5)/2
?>