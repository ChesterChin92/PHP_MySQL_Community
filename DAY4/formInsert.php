<?php

require_once('dbcon.php');
var_dump($_GET);

$NoBarang = $_GET['NoBarang'];
$Nama = $_GET['Nama'];
$Kuantiti = $_GET['Kuantiti'];
$HargaSeunit = $_GET['HargaSeunit'];

// For checking purpose.
echo $NoBarang . $Nama . $Kuantiti . $HargaSeunit ;

$sqlInsert = "INSERT INTO `barang` (`NoBarang`, `Nama`, `Kuantiti`, `HargaSeunit`) 
VALUES ('$NoBarang', '$Nama', '$Kuantiti', '$HargaSeunit')";


 if ($con->query($sqlInsert) === TRUE) 
 {
     echo "New record created successfully";    
 } 
 else 
 {
     echo "Error: " . $sqlInsert . "<br>" . $con->error;
 }
 echo "<br><a href='form.php'>Click here to go back</a>";
?>