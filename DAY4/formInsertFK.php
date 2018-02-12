<?php

require_once('dbcon.php');
var_dump($_GET);

$MuridID = $_GET['MuridID'];
$BarangID = $_GET['BarangID'];


// For checking purpose.
echo $MuridID . $BarangID ;

$sqlInsert = "INSERT INTO `murid` (`MuridID`, `BarangID`) 
VALUES ('$MuridID', '$BarangID')";


 if ($con->query($sqlInsert) === TRUE) 
 {
     echo "New record created successfully";    
 } 
 else 
 {
     echo "Error: " . $sqlInsert . "<br>" . $con->error;
 }
 echo "<br><a href='formFK.php'>Click here to go back</a>";
?>