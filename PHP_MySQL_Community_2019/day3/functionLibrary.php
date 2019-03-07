<?php

function sayHello(){
    echo "<p>Welcome to my website</p>";
}

function sayGoodbye(){
    echo "<b>Thank you for visiting</b>";
}

function renderHead(){
    echo "<html>
            <head>
            <title>My Website</title>
            </head>
            <body>";
}

function renderFoot(){
    echo "</body>
          </html>";
}

function renderHeadAdv($title){
    echo "<html>
            <head>
            <title>$title</title>
            </head>
            <body>";
}

function checkSession(){
    
    session_start();

    if(isset($_SESSION['user'])){
        echo "<b>You are an active user.</b>";
    }else{
        echo "<b>You dont have a session.</b>";
        exit();
    }

}    


?>