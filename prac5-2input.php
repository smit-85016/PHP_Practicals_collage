<?php
echo "<h1>216090307039</h1>";
//arr = 1 to 15 digits in random order
$arr = array(10,34,34,28,110,46,45,10,1,2,10);
$len = count($arr);
echo "Unsorted array: ";
for($i=0;$i<$len;$i++)
{
    echo $arr[$i]." ";
}
echo "<br />";
sort($arr);
echo "Sorted array: ";
for($i=0;$i<$len;$i++)
{
	echo $arr[$i]." ";
}
