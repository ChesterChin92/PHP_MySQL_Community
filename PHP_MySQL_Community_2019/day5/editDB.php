<?php

require_once("dbcon.php");

$id = $_GET['id']; //23
$name = $_GET['name'];
$class = $_GET['class'];
$number = $_GET['number'];

$sql = "UPDATE `kelas` SET `name` = '$name', 
                           `class` = '$class', 
                           `number` = '$number' WHERE `kelas`.`id` = $id;";


//echo $sql;
// $result = $con->query($sql); //This line is not complete 
//The rest is same as insert. Echo update successful;

//If query is executable then continue
if($con->query($sql) == TRUE) {
    echo "Data successfully updated <br>";
}
else{
    echo "Error: ". $sql . "<br>" . $con->error;
}
echo "<a href='index.php'>Click here to go back to index</a>"
?>