<?php
$targetAmount = 100;
for ($a = 0 ; $a <= 10 ; $a++)
{
   //Another for loop
   for ($b = 0 ; $b <= 10 ; $b++)
   {
        for ($c = 0 ; $c <= 10 ; $c++)
        {
            for ($d = 0 ; $d <= 10 ; $d++)
            {
                $answer  = $a*1+$b*5+$c*10+$d*20;
                if ($answer == $targetAmount){
                    echo "<b>FOUND ONE MATCH!!<b>";
                }

                echo ($a*1) ." + ". ($b*5) . " + ". ($c*10) ." + ". ($d*20) . " = " . ($a*1+$b*5+$c*10+$d*20) . "<br>";
                
            
            }
            
        }//End of $c
   }//End of $b
}//End of $a



?>