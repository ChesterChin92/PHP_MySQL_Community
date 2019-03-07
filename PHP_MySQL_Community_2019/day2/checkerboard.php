
<html>
    <head>
        <style>
        .black{
            background-color : black;
            color : white;
        }
        .white{
            background-color : white;
            color : black;
        }
        
        </style>
    </head>
    <body>
    

<?php
//Use PHP echo the table.


echo "<table border='1'>";
for ($x=0; $x < 5; $x++) { 
  
    $answer = ($x%2);

    if($answer==0){
        $theCSSclass = "black";
        $theCSSclass2 = "white";
    }
    else{
        $theCSSclass = "white";
        $theCSSclass2 = "black";
    }


    echo "<tr>
    <td class='$theCSSclass'>1</td>
    <td class='$theCSSclass2'>2</td>
    <td class='$theCSSclass'>3</td>
    <td class='$theCSSclass2'>4</td>
    <td class='$theCSSclass'>5</td>
   </tr>";

   
}
echo "</table>";

?>

</body>
</html>