<?php

class Animal {
    public function speak() {
        echo "Animal can speak!...<br>";
    }
}

class Dog extends Animal {
    public function speak() {
        echo "Dog is a barking!...<br>";
    }
}

$animal = new Animal();
$animal->speak(); 

$dog = new Dog();
$dog->speak();

?>
