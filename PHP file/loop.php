<?php

// for loop

for($i = 1; $i <= 10; $i++){
if($i== 6){
//echo $i."<br>";
continue;
 //break;
}
echo $i."<br>";
}


 //while loop

$i = 1;
while($i <= 30){
//echo $i."<br>";
$i++;
}

echo "<br>";
//do while loop
$a=1;
do{
 echo $a."<br>";
 $a++;
 }
 while($a <= 10);
 
 //foreach loop
 
 $arr = array(6, 76, 34, 98,67);
 echo "<br>";
 foreach($arr as $value){
 echo $value."<br>";
 }
 
?>

