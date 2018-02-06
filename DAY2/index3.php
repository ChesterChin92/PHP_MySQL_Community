<html>
<head>
    <title>Title of the page</title>
</head>
<body>
    <p>A simple paragraph</p>
    <?php

    session_start();
    $_SESSION['specialBucket'] = "Chester";
    $_SESSION['sharedBucket2'] = "Chin";
    $_SESSION['sharedBucket3'] = "Chin";
    $_SESSION['sharedBucket4'] = "Chin";
    $_SESSION['sharedBucket5'] = 20;
    $_SESSION['sharedBucket6'] = "02";


    echo "Something from special bucket... " . $_SESSION['specialBucket'];

    $name = "Chester";
    $lastname = "Chin";
    $age = "21" ;
    $town = "Butterworth";
    $answer = 5 + 5;


    echo "<b>My name is.... $name $lastname. I am $age years old</b>";
    echo "<b>I am from $town </b>";
    echo "The answer for 5+5 is <i>$answer</i>";



    ?>
</body>
</html>