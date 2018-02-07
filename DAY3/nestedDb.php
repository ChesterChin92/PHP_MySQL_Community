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


$sql = "SELECT DISTINCT(Nama) AS UName FROM barang";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<b>Category - ".$row['UName'] . "</br>" ;

       $Uname = $row['UName'];
       
       $sqlDetails = "SELECT *  FROM barang WHERE Nama = '$Uname' ";
      
       $resultDetails = $con->query($sqlDetails);
       
       if ($resultDetails->num_rows > 0) {
        while($rowDtl = $resultDetails->fetch_assoc()) {

            echo "<b>".$rowDtl['NoBarang'] . "</b>" ;
            echo "<b>".$rowDtl['Nama'] . "</b>" ;
            echo "<b>".$rowDtl['Kuantiti'] . "</b>" ;
            echo "<b>".$rowDtl['HargaSeunit'] . "</b><br>" ;
       }
       echo "<br>";
    }
      
    }
} else {
    echo "0 results";
}
$con->close();



?>
