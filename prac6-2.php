<h1>216090307039</h1> 
<hr>
<?php
$str=" smit shah ";

function isLowercase($str) {
    return $str === strtolower($str);
}

if (isLowercase($str)) {
    echo "The string is lowercase.";
} else {
    echo "The string is not lowercase.";
}
echo "<br>";

echo"Reverse of the entered string:"." ".strrev($str)."<br>";

echo "Whitespaces removed string:"." ".trim($str)."<br>";

echo"Replacing the string:"." ".str_replace("world","SMIT","hello world");
?>