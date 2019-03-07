<?php
//192.168.7.105 look for login_process_practice.txt
//var_dump($_POST);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$m1 = "";
$m2 = "";
$m3 = "";
$m4 = "";

if($firstname===""){
    //echo "<br>Firstname is empty!";
    $m1 = "First name,";
}

if($lastname===""){
    //echo "<br>Lastname is empty!";
    $m2 = "last name,";
}

if($email===""){
    //echo "<br>Email is empty!";
    $m3 = "email,";
}

if($password===""){
    //echo "<br>Password is empty!";


    if($m1<>"" || $m2<>""|| $m3 <> ""){
        $m3 = "email ";
        $m4 = " and password";
    }
    else{
        $m4 = "password";
    }

  
}

echo $m1 . $m2 . $m3 . $m4 . " Is Empty!";


?>