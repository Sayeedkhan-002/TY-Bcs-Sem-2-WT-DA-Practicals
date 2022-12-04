<?php
session_start();
$b=$_POST['basic'];
$d=$_POST['da'];
$hra=$_POST['hra'];
echo"Employee No: ".$_SESSION['eno']."<br>";
echo"Employee Name: ".$_SESSION['ename']."<br>";
echo"Address: ".$_SESSION['add']."<br>";

echo"Basic: ".$b."<br>";
echo"DA: ".$d."<br>";
echo"HRA: ".$hra."<br>";

$total=$b+$d+$hra;
echo"Total:".$total."<br>";
?>