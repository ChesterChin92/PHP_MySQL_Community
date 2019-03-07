 <?php

//Load DB related 
include_once("dbcon_std.php");

//To make sure every data is received from FORM
//var_dump($_GET);

//Set everything received from FORM to normal variable;
$name = $_GET['name']; $class = $_GET['class']; $number = $_GET['number'];

$sql = "INSERT INTO `kelas` (`id`, `name`, `class`, `number`) 
        VALUES (NULL, '$name', '$class', '$number');";

//If the SQL can be queried and valid
if($con->query($sql)==TRUE){
    echo "New record created successfully";
}
else{
    echo "Error".$sql."<br>".$con->error;
}

?>