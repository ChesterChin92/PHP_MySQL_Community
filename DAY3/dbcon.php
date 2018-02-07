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



?>