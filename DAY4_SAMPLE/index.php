<html>
<head>
    <title>Table</title>
</head>
<body>

<style>
table {
    display: table;
    border-collapse: separate;
    border-spacing: 0px;
    border-color: black;
}
</style>


    <p>A sample table</p>

<!-- table -->
    <table border="1">

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
       
           echo "<tr>";
               echo "<td>".$row['NoBarang'] . "</td>" ;
               echo "<td>".$row['Nama'] . "</td>" ;
               echo "<td>".$row['Kuantiti'] . "</td>" ;
               echo "<td>".$row['HargaSeunit'] . "</td>" ;
               echo "<td><a href='details.php?id=A01'>More Details</a></td>";
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