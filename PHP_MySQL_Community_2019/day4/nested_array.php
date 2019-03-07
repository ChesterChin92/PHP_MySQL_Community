<?php

$myarray = [[1,2],
            [3,4]];

//First array first value
echo $myarray[0][0];
//First array second value
echo $myarray[0][1];

//Second array second value
echo $myarray[1][0];
//Second array second value
echo $myarray[1][1];

//3124
//42213

//Is this an assiociative array?
$myarray_string = [['Ali',50],['Abu',56],['MeiLi',88]];
 
// echo $myarray_string[0][0]; //Ali
// echo $myarray_string[0][1]; //50

// echo $myarray_string[1][0]; //Abu
// echo $myarray_string[1][1]; //56

for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 2 ; $j++) { 
    //   echo $myarray_string[$i][$j]."<br>";
    }
}

//Nested array is flexible
$myarray_flexi = [[5,2,12],[2,1],[4,12,42,56,29,76],[66],[1,2]];

for ($i=0; $i< sizeof($myarray_flexi) ;$i++) { 
    for ($j=0; $j < sizeof($myarray_flexi[$i]) ; $j++) { 
        echo $myarray_flexi[$i][$j]."<br>";
    }
}
?>