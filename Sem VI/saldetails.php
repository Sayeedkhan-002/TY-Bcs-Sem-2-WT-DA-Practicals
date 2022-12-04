<?php
session_start();
$eno=$_POST['eno'];
$ename=$_POST['ename'];
$add=$_POST['add'];
$_SESSION['eno']=$eno;
$_SESSION['ename']=$ename;
$_SESSION['add']=$add;

echo"<form method=post action='display.php'>";
echo"<b>Basic : </b><input type=text name=basic><br><br>";
echo"<b>DA:</b><input type=text name=da><br><br>";
echo"<b>HRA:</b><input type=text name=hra><br><br>";
echo"<input type=submit value='DISPLAY'></form>";
?>

