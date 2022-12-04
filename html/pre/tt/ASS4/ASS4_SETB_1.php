<?php

$original_array=array('1','2','3','4','5');

echo "Original array:";
foreach($original_array as $x)
{
	echo "$x";
}

$insert_value="11";

$position=2;

array_splice($original_array,$position,0,$insert_value);

echo "After inserting element in array";

foreach($original_array as $x)
{
	echo "$x";
}
?>
