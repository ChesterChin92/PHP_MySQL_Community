<html>
    <head>Student List</head>
<body>
<style> 
    table{
        display : table;
        border-collapse : collapse;
        border-spacing : 1px;
        border-color : black;
    }
</style>
<!-- Start of Table -->
<table border=1> 
<?php
    //Inside table
    require_once('dbcon.php'); //Load and prepare the $con

    $sql    = "SELECT * FROM kelas";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "
                    <tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['class']."</td>
                        <td>".$row['number']."</td>
                        <td><a href='editForm.php?id=".$row['id']."'>Edit</a></td>
                    </tr>
                  ";
        }//End of while loop
    }//End of if 
    else{
        echo "No results";
    }
?>
<!-- End of table -->
</table>
</body>
</html>