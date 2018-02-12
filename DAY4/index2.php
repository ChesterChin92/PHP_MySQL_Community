<html>
<head>
    <title>Table</title>
</head>
<body>

<style>
table {
    display: table;
    border-collapse: separate;
    border-spacing: 20px;
    border-color: black;
}
</style>


    <p>A sample table</p>

<!-- table -->
    <table border="1">

   <?php
   
   require_once('dbcon.php');
   
   $sql = "SELECT * FROM barang";
   
   $result = $con->query($sql);
   
   if ($result->num_rows > 0) {
  
       // output data of each row
       while($row = $result->fetch_assoc()) {
       
           echo "<tr>";
               echo "<td>".$row['NoBarang'] . "</td>" ;
               echo "<td>".$row['Nama'] . "</td>" ;
               echo "<td>".$row['Kuantiti'] . "</td>" ;
               echo "<td>".$row['HargaSeunit'] . "</td>" ;
               echo "<td><a href='details.php?id=".$row['NoBarang']."'>More Details</a></td>";
            echo "</tr>";
       }
 
   
   } else {
       echo "0 results";
   }
   $con->close();
   ?>
    

    </table>


</body>
</html>