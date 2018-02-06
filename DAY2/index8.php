<?php

// The program starts with setting number to 0
// Then it checks if the number is < 10
// If yes INCREMENT 1 to the $number
// Inside the LOOP output the $number



$message = "Hello";

for ($number = 0 ; $number < 10 ; $number++)
{
    // Top up Goodbye into message
    //$message = $message . "Goodbye "
    $message .= "Goodbye";

    //If you want to see which loop it is right now.
    echo $number ;
}

echo $message;
?>