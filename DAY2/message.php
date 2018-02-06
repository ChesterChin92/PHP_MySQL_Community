<?php


//Dumping all variables in GET method.
var_dump($_GET);

echo "Welcome!<br>";
//Same like session they behave the same.
echo "Your email" . $_GET['msg'];
echo "<br>";
echo "Your password" . $_GET['pwd'];

?>