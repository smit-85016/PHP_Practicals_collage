<?php

class Person {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
}

// Create an object
$person1 = new Person("smit");

// Clone object
$person2 = clone $person1;

$person2->name = "shah";

echo "Surname: " . $person2->name . "<br>"; 
echo "Name: " . $person1->name . "<br>"; 


?>
