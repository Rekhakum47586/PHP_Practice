 <html>

<body>
 
 <?php
 
abstract class Car {
  public $name;

  abstract public function intro($a, $b);
}

// Child classes
class Audi extends Car {
  public function intro($a, $b){
    return "Choose German quality! I'm an $this->name!";
    echo $a + $b;
  }
}
  $audi = new audi();
echo $audi->intro(10, 20);
echo "<br>";

?>



<body>
<html>
