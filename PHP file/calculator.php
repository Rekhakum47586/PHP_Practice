<?php

$firstnumber = 53;
$secondnumber = 78;
$operator = '-';

$calculatedresult = "";

if(is_numeric($firstnumber) && is_numeric($secondnumber)){

Switch($operator){
case "+":
   $calculatedresult = $firstnumber + $secondnumber;
   break;
   
case "-":
    $calculatedresult = $firstnumber - $secondnumber;
    break;

case "*":
    $calculatedresult = $firstnumber * $secondnumber;
    break;

case "/":
    $calculatedresult = $firstnumber / $secondnumber;
    break;

}
echo $calculatedresult;
}
?>

