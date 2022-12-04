<?php
session_start();
$name=$_POST['name'];
$mob=$_POST['mob'];
$add=$_POST['add'];
$_SESSION['name']=$name;
$_SESSION['mob']=$mob;
$_SESSION['add']=$add;

echo"<form method=post action='bill.php'>";
echo"<b>ProdName: </b><input type=text name=pname><br><br>";
echo"<b>Qty:</b><input type=text name=qty><br><br>";
echo"<b>Rate:</b><input type=text name=rate><br><br>";
echo"<input type=submit value='SUBMIT'></form>";
?>
