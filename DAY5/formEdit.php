<?php
require_once('dbcon.php');
var_dump($_GET);

$NoBarang = $_GET['NoBarang'];
$Nama = $_GET['Nama'];
$Kuantiti = $_GET['Kuantiti'];
$HargaSeunit = $_GET['HargaSeunit'];      



// $sqlEdit =""; The paste it inside.

$sqlEdit = "UPDATE `barang` SET `Nama` = '$Nama', 
`Kuantiti` = '$Kuantiti', 
`HargaSeunit` = '$HargaSeunit' 
WHERE `barang`.`NoBarang` = '$NoBarang'";


if ($con->query($sqlEdit) === TRUE){

    echo "New record updated successfully";  

}else{
    echo "Record Update fail. ";
    echo "Error" . $sqlEdit . "Error Details : " . $con->error();
    
}
echo "<br><a href='index.php'>Click here to go back</a>";










// $sqlEdit = "UPDATE `barang` SET 
// `Nama` = '$Nama', 
// `Kuantiti` = '$Kuantiti', 
// `HargaSeunit` = '$HargaSeunit' 
// WHERE `barang`.`NoBarang` = '$NoBarang'";




?>



<!-- if ($con->query($sqlEdit) === TRUE) 
{
    echo "New record Updated successfully";    
} 
else 
{
    echo "Error: " . $sqlEdit . "<br>" . $con->error;
}
echo "<br><a href='index.php'>Click here to go back</a>"; -->

