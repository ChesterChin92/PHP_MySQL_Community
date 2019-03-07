<?php

echo "What you have entered.";

//Special Bucket/Global Variable
echo $_POST['email'];
echo $_POST['password'];

//Move from global to normal variable. Good and common practice.
$email = $_POST['email'];
$password = $_POST['password'];

//Partial answer.
if($email=="chester@demo.com" && $password=="123456"){
    echo "Pass";
}
else{
    echo "Fail";
}


if($email=="" || $password==""){
    echo "<br>";
    echo "<b>Invalid Input!</b>";
    echo "<a href='login_form.html'>Back to login</a>";
}

//Q1 3.10PM
//IF email OR password is empty inform user invalid input. Tips  ||
//Provide a link back to login form

//Q2 Senior sila jawab. 3.15PM
//Perbezaan GET dan POST. 





?>