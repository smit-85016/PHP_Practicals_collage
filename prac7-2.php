<?php

class Person {
  public $eno = 216090307039;
  public $name = "smit";
  public $age = 17;

  public function sayHello() {
  	echo "Enrollment Number $this->eno . <br>";
    echo "Hello, my name is $this->name . <br>";
  }

}

$person = new Person();

$person->sayHello() . "<br>"; 
echo $person->name . "<br>"; 
echo $person->age . "<br>"; 

?>
