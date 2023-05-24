<?php
class MyClass {
    private $name;
    private $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

$obj = new MyClass();

$obj->setName("smit");
$obj->setAge(17);

echo "Name: " . $obj->getName() . "<br>" ;
echo "Age: " . $obj->getAge() . "<br>";

?>