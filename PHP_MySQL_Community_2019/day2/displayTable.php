<?php

// var_dump($_GET);

$howManyLoop = $_GET['numberOfRow'];

echo "<a href='./loopForm.html'>Click here to go back</a>";

echo "<table border=1>";
for ($i=1; $i <= $howManyLoop; $i++) { 
    echo "<tr><td> DATA $i</td><tr>";
}
echo "</table>";

?>