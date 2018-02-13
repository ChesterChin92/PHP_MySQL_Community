<form method="get">
    <label>Search</label>
    <input type="text" name="search"></input>
    <input type="submit" value="Search">
</form>


<?php

require_once('dbcon.php');

//If user submit a value 
if (isset($_GET)){
    $whatYouWantToSearch = $_GET['search'];

    echo "<p>You are searching for <b>". $_GET['search'] . "</b></p>";

    $sql = "SELECT * FROM barang WHERE Nama LIKE '%$whatYouWantToSearch%'";
    
    $result = $con->query($sql);
    echo "<table>";
    if ($result->num_rows > 0) {
   
        // output data of each row
        while($row = $result->fetch_assoc()) {
        
            echo "<tr>";
                echo "<td>".$row['NoBarang'] . "</td>" ;
                echo "<td>".$row['Nama'] . "</td>" ;
                echo "<td>".$row['Kuantiti'] . "</td>" ;
                echo "<td>".$row['HargaSeunit'] . "</td>" ;
                echo "<td><a href='editDetails.php?id=".$row['NoBarang']."'>Edit Details</a></td>";
             echo "</tr>";
        }
        echo "</table>";
  
    } else {
        echo "No match found.";
    }
    $con->close();


}




?>