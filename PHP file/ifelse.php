 <?php
$time = date("H");

if ($time < "10") {
 echo "good morning!";
} elseif ($time < "20") {
  echo "good day!";
} else {
  echo "good night!";
}
?> 
