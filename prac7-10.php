<?php

abstract class Animal {
    abstract public function speak();
}

class Dog extends Animal {
    public function speak() {
        echo "Dog is a barking!...<br>";

    }
}

class Cat extends Animal {
    public function speak() {
        echo "Cat is a Meowing!...<br>";

    }
}

$dog = new Dog("Dog");
$dog->speak(); 

$cat = new Cat("Cat");
$cat->speak(); 

?>
    