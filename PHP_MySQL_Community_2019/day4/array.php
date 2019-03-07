<?php


$myarray = [1,2,3];
$myarray_string = ["Abu","MeiLi","Roti","Kopi","NasiLemak"];

// echo $myarray[0];
// echo $myarray_string[2];

echo sizeof($myarray_string); //Count size of array
echo count($myarray_string); //Same, count size of array

for ($i=0; $i < sizeof($myarray_string); $i++) { 
    echo $myarray_string[$i]."<br>";
}


?>