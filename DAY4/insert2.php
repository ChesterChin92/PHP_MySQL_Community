<?php
   
   require_once('dbcon.php');
   
   $noBarang = rand(0,999);

   $sql = "INSERT INTO `barang` (`NoBarang`, `Nama`, `Kuantiti`, `HargaSeunit`) 
   VALUES ('$noBarang', 'lunchsoon', '36', '99')";
   
//    $result = $con->query($sql);
   
    if ($con->query($sql) === TRUE) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

   $con->close();
   ?>