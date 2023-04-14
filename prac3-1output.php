<?php 
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$operator = $_POST['operator'];
if($operator == "add"){ 
    $result = $v1 + $v2;
    echo "The Answer is $v1 and $v2 is $result"; 
} 
else if($operator == "sub"){
    $result = $v1 - $v2;
    echo "The Answer is $v1 and $v2 is $result"; 
}
else if($operator == "mul"){
    $result = $v1 * $v2;
    echo "The Answer is $v1 and $v2 is $result"; 
}
else if($operator == "div"){  
    $result = $v1 / $v2;
    echo "The Answer is $v1 and $v2 is $result"; 
}
else if($operator == "mod"){ 
    $result = $v1 % $v2;
    echo "The Answer is $v1 and $v2 is $result"; 
}
else{ 
    echo "Invalid operator"; 
}
?>