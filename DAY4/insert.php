<?php

require_once('dbcon.php');

// Create a random NoBarang 
$NoBarang = rand(0, 999);

$sql = "INSERT INTO `barang` (`NoBarang`, `Nama`, `Kuantiti`, `HargaSeunit`) VALUES ('A88', 'Kopi', '20', '3')";

$result = $con->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<b>".$row['NoBarang'] . "</b>" ;
       echo "<b>".$row['Nama'] . "</b>" ;
       echo "<b>".$row['Kuantiti'] . "</b>" ;
       echo "<b>".$row['HargaSeunit'] . "</b><br>" ;
    }
} else {
    echo "0 results";
}




$con->close();



$con->close();


?>



<?php

// if ($con->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $con->error;
// }


?>