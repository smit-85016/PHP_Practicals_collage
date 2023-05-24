<?php

// Define the interface
interface dog {
    public function bark();
}

interface cat {
    public function meow();
}

class Animal implements dog,cat {
    public function bark() {
    echo "Dog is a barking!...<br>";
    }
    
    public function meow() {
    echo "Cat is a Meowing!...<br>";
    }
}


$Animal = new Animal();

$Animal->bark();
$Animal->meow();       

?>
