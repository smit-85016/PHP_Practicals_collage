<?php

class Animal {

  public function eat() {
    echo "Animal is a eating!...<br>";
  }

}

class Dog extends Animal {

  public function bark() {
    echo "Dog is a barking!...<br>";
  }

}

class Cat extends Dog {

  public function Meow() {
    echo "Cat is a Meowing!...<br>";
  }
  
}

$cat = new cat();

$cat->eat(); 

$cat->bark(); 

$cat->meow(); 

?>
