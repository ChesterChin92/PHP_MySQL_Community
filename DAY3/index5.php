<?php


date_default_timezone_set("Asia/Kuala_Lumpur");

//Db location, localhost or 127.0.0.1 most of the time
$host="127.0.0.1";

$port=3306;

$socket="";

//database username
$user="root";

//Most of the time empty
$password="";

//your database name
$dbname="storsukan";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket) 
or die ('Could not connect to the database server' . mysqli_connect_error());


$sql = "SELECT * FROM barang";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        echo "<tr>";
            echo "<td>".$row['NoBarang'] . "</td>" ;
            echo "<td>".$row['Nama'] . "</td>" ;
            echo "<td>".$row['Kuantiti'] . "</td>" ;
            echo "<td>".$row['HargaSeunit'] . "</td>" ;
        echo "</tr>";
    }
    echo "</table>";

} else {
    echo "0 results";
}
$con->close();



?>