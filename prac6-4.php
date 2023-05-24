<h1>216090307039</h1> 
<hr>

<?php

$min = 1;
$max = 100;
$randomNumber = mt_rand($min, $max);
echo "Random number between $min and $max: $randomNumber"."<br>";

$decimalNumber = 128;
$binaryNumber = decbin($decimalNumber);
$octalNumber = decoct($decimalNumber);
$hexadecimalNumber = dechex($decimalNumber);
echo "Decimal: $decimalNumber"."<br>";
echo "Binary: $binaryNumber"."<br>";
echo "Octal: $octalNumber"."<br>";
echo "Hexadecimal: $hexadecimalNumber"."<br>";

$angle = 45;
$sinValue = sin(deg2rad($angle));
$cosValue = cos(deg2rad($angle));
$tanValue = tan(deg2rad($angle));
echo "Angle: $angle"."<br>";
echo "Sin: $sinValue"."<br>";
echo "Cos: $cosValue"."<br>";
echo "Tan: $tanValue"."<br>";

?>