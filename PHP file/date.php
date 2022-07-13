<?php
$curDate = date("Y/m/d") ."<br>";

$changedDate = date("d/m/Y", strtotime($curDate));
echo $curDate;
echo $changedDate;
echo "<br> Today is : ".date("l");

?>
