<?php
include('chk.php');
$s1=$_POST['str'];
$ch=$_POST['op'];
if($ch=='len')
strln($s1);
else if($ch=='vowel')
vowel($s1);
else if($ch=='title')
titlecase($s1);
else if($ch=='spad')
s_pad($s1);
else if($ch=='trim')
s_trim($s1);
else if($ch=='rev')
s_rev($s1);
?>

