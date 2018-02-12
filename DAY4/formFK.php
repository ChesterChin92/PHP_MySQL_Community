

<form action="formInsertFK.php" method="get">
    <label>MuridID</label>
    <input name="MuridID" type="text"></input>
    <br>

    <label>BarangID</label>
    <select name="BarangID">

        <?php   
        require_once('dbcon.php');
        $sqlSelectBarang = "SELECT NoBarang FROM barang;"; 
        $result = $con->query($sqlSelectBarang);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) 
            {
                echo "<option value='".$row['NoBarang']."'>".$row['NoBarang']."</option>";
            }
        } 
        else 
        {
            echo "<option value=''>No Results</option>";
        }
        $con->close();
        ?>
    </select>
    <br>
   

    <input type="submit" value="insert">
</form>
