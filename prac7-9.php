<?php

interface Animal {
    public function speak();
}

class Dog implements Animal {
    public function speak() {
        echo "Dog is a barking!...<br>";
    }
}

$dog = new Dog();
$dog->speak(); 

?>