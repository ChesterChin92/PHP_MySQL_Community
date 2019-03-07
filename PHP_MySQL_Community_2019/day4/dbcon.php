<?php
date_default_timezone_set('Asia/Kuala_Lumpur');

//Db location, localhost or 127.0.0.1 most of the time
$host = "127.0.0.1";

//Port number in XAMPP
$port = "3306";

//Socket number (rarely used)
$socket = "";

//Username
$user = "root";

//Password, default windows is empty, MacOS is toor
$password = "";

//Your databasename
$dbname = "sekolah";

//1 line only. Line 23 no semicolon.
$con = new mysqli($host,$user,$password,$dbname,$port,$socket) 
or die ('Could not connect to the database server'.mysqli_connect_error());

$sql = "Select * FROM kelas";

$result = $con->query($sql);

if($result->num_rows > 0){
    var_dump($result);
    // $row = $result->fetch_assoc(); //Load all assiociated data from $results;
    // //var_dump($row);

    // //As long as fetch_assoc is not finish, continue. 
    // while($row = $result->fetch_assoc()){
    //     echo $row['id'];
    //     echo $row['name'];
    //     echo $row['class'];
    //     echo $row['number'];
    //     echo "<br>";
    // }
}
else{
    echo "No results";
}

$con->close();







?>