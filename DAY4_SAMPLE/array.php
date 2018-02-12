<?php
$bola = array("Bola Sepak", "Ping Pong", "Gold");
echo "I like " . $bola[0] . ", " . $bola[1] . " and " . $bola[2] . ".";

$arrlength = count($bola);

for($x = 0; $x < $arrlength; $x++) {
    echo $bola[$x];
    echo "<br>";
}

?>