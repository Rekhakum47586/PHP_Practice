<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// apple is inherited from Fruit
class Apple extends Fruit {
  public function message() {
     echo "The fruit name is {$this->name}.<br>";
     echo $this->intro();
  }
}

$apple = new Apple("Apple", "red");

$apple->message();    
echo "<br>";
$apple->intro();     //error
?>
