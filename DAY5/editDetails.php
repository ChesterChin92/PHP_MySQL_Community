<?php
require_once('dbcon.php');
var_dump($_GET);

$NoBarang = $_GET['id'];

$sql = "SELECT * FROM barang WHERE NoBarang = '$NoBarang'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {  
        $NoBarang = $row['NoBarang'];
        $Nama = $row['Nama'];
        $Kuantiti = $row['Kuantiti'];
        $HargaSeunit = $row['HargaSeunit'];         
    }
} else {
    echo "0 results";
}
$con->close();



?>

<form action="formEdit.php" method="get">
    <label>NoBarang</label>
    <input disabled name="NoBarang" type="text" <?php echo "value='$NoBarang'"; ?> ></input>
    <br>

    <label>Nama</label>
    <input name="Nama" type="text" <?php echo "value='$Nama'"; ?> ></input>
    <br>

    <label>Kuantiti</label>
    <input name="Kuantiti" type="number" <?php echo "value='$Kuantiti'"; ?>></input>
    <br>
    
    <label>HargaSeunit</label>
    <input name="HargaSeunit" type="number" <?php echo "value='$HargaSeunit'"; ?>></input>
    <br>

    <input type="submit" value="Update">
</form>
