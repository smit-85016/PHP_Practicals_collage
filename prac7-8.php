<?php
        class Calculator {
            public function add($num1, $num2 = null) {
                if ($num2 === null) {
                    return "Sum = " . $num1;
                }
                return "Sum = " . $num1 + $num2;
            }
        }
        
        $calc = new Calculator();
        echo $calc->add(10) . "<br>"; // Outputs 2
        echo $calc->add(20, 30) . "<br>"; // Outputs 5

?>