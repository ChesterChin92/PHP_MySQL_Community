<?php
$subject_array = ["English","Bahasa Malaysia","Mathematics",
                    "Geography","Sejarah","Moral","Sains"];



$assoc_stud_array = array(
                        "Ali"     => [20,21,22,60,80,80,90],
                        "Abu"     => [22,21,21,73,89,88,54],
                        "MeiLi"   => [43,55,23,65,82,21,92],
                        "Kayshav" => [77,22,12,43,92,92,10],
                        "Raju"    => [32,21,43,25,32,24,21]
                            );
   
                           
foreach ($assoc_stud_array as $student_name => $results_array) {
    $sum =0; //Reset everytime i change student.
    
    for ($i=0; $i < sizeof($assoc_stud_array[$student_name]); $i++) { 
        $currentSubject = $assoc_stud_array[$student_name][$i];
       echo $student_name . " scored " . $currentSubject . " for " . $subject_array[$i] . checkFailOrPass($currentSubject) . "<br>";
        
       //Keep adding all the scores.
       $sum = $sum +  $currentSubject;

    }
    echo $student_name . " scored total of :" . $sum ."<br>";
    //echo "Average score is :" . number_format($sum/sizeof($subject_array),2) . "<br>";
    echo checkAverage(($sum/7));
}


function checkFailOrPass($score){
    if ($score >= 60) {
        return " in which he passed.";
    }else{
        return " in which he failed.";
    }
}

function checkAverage($average){
    if($average >= 60) {
        return "His avarage score is $average, he lacks ".(60-$average)." to pass";
    }
    else {
        return "His avarage score is $average, he has ".(60-$average)." more than the average";
    }
}


//Expected answer //rm20 sbux
//Ali scored 20 for English
//Ali scored 21 for Bahasa Malaysia
//Ali scored 22 for Mathematics
//Ali scored 60 for Geography
//Ali scored 80 for Sejarah  
//...
//The average score is 53.28


//Senior+ //Rm50 sbux
//Ali scored 20 for English in which he failed.
//Ali scored 21 for Bahasa Malaysia ni which he failed.
//Ali scored 22 for Mathematics in which he failed.
//Ali scored 60 for Geography in which he passed.
//His avarage score is 53.28, he lacks 6.72 to pass. 
//Who is the best student.

?>