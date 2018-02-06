<?php

var_dump($_POST);

echo "Email is..." . $_POST['msg'];
echo "Password is...". $_POST['pwd'];

//Set the local variables based on POST data
$email = $_POST['msg'];
$password = $_POST['pwd'];


//2 equal sign
//3 equal sign === compare value AND data type (Strict comparison)
if ($password == 12345)
{
    echo "<br>Welcome!";
}
elseif ($password == "54321")
{
    echo "<br>You are welcomed too!";
}
else
{
    echo "<br>You are not welcomed!";
}

?>


