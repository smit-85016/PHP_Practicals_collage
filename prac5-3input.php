<?php
echo "<h1>216090307039</h1>";
$matrix_1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
$matrix_2 = array(
    array(2, 4, 6),
    array(8, 10, 12),
    array(14, 16, 18)
);
$matrix_3 = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0)
);
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        for ($k = 0; $k < 3; $k++) {
            $matrix_3[$i][$j] += $matrix_1[$i][$k] * $matrix_2[$k][$j];
        }
    }
}
echo "Matrix 1: <br />";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix_1[$i][$j] . " ";
    }
    echo "<br />";
}
echo "Matrix 2: <br />";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix_2[$i][$j] . " ";
    }
    echo "<br />";
}
echo "Matrix Multiplication: <br />";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix_3[$i][$j] . " ";
    }
    echo "<br />";
}
?>