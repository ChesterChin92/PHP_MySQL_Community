<?php
require_once("dbcon.php");

$id = $_GET['id']; //Retrive ID from HTTP GET in URL

$sql    = "SELECT * FROM kelas WHERE id=$id"; //Add a logic here to look for 1 entry only
$result = $con->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){   
                  $id     =  $row[  'id'    ];

                  $name   =  $row[  'name'  ];
                  $class  =  $row[  'class' ];
                  $number =  $row[  'number'];
    }
} 
else{
    echo "No results";
}

//index.php -> editForm.php?id=20 -> editDB.php?id=20&?&?
?>

<form action="editDB.php" method="get">

    <label>id<label>
    <input type="text" name="id" <?php echo "value='$id'"; ?> >

    <input type="submit" value="Update">
</form>


