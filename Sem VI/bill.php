<?php
session_start();
$pname=$_POST['pname'];
$q=$_POST['qty'];
$r=$_POST['rate'];
echo"Customer Name: ".$_SESSION['name']."<br>";
echo"Address: ".$_SESSION['add']."<br>";
echo"MobNo.: ".$_SESSION['mob']."<br>";

echo"Product Name: ".$pname."<br>";
echo"Qty: ".$q."<br>";
echo"Rate: ".$r."<br>";

?>