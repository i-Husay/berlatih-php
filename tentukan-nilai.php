<?php
function tentukan_nilai($number)
{
$predikat = ["Kurang","Cukup","Baik","Sangat Baik"];
     if($number>=60 && $number <=70){
         return $predikat[1]."<br>";
     }
     elseif($number>= 70&&$number <=85){
         return $predikat[2]."<br>";
     }  
     elseif($number>=85&&$number <=100){
         return $predikat[3]."<br>";
     }
     else{
         return $predikat[0]."<br>";
     }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>