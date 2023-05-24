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

$dog = new Dog();

$dog->eat();

$dog->bark();

?>
