<?php

$myarray = array("Ali"  => [50,100],
                 "Abu"  => [20,14],
                 "MeiLi"=> [50,88]);

// echo $myarray['Ali'][0]; //get 50
// echo $myarray["Ali"][1]; //get 100

foreach ($myarray as $lockername => $whatisinside) {
    for ($i=0; $i < sizeof($whatisinside) ; $i++) { 
        echo $myarray[$lockername][$i]."<br>";
    }
}

$myarray2 = array("Ali"  => [[52,100],[1,2]],
                 "Abu"  => [[42,100],[3,4]],
                 "MeiLi"=> [[77,62],[5,6]]);


foreach ($myarray2 as $lockername => $whatisinside) {
    for ($i=0; $i < sizeof($myarray2[$lockername])  ; $i++ ){ 
        for ($j=0; $j < sizeof($myarray2[$lockername][$i]); $j++) {
                echo $myarray2[$lockername][$i][$j]."<br>";    
        }
    }
}

?> 