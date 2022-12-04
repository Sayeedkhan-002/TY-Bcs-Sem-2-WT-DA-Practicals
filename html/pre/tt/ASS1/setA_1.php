<?php
$num1=$_GET[txt1];
$num2=$_GET[txt2];
$fact=1;
for($x=$num1;$x>=1;$x--)
{
	fact=fact*$x;
}
echo"Factorial of First Number is $fact";
?>
 

