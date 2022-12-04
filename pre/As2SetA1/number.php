<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$ch=$_POST['op'];

function mod($n1,$n2)
{
$res=$n1%$n2;
echo "<h1> Mod is $res";
}
function power($n1,$n2)
{
$res=pow($n1,$n2);
echo "<h1>Power is $res";
}
function sum($n1,$n2)
{
$res=0;
for($i=1;$i<$n1;$i++)
{
$res=$res+$i;
}
echo"<h1>sum is $res";
}
function fact($n2)
{

$fact= 1;
for ($i = 1; $i <= $n2; $i++)
{
      $fact = $fact * $i;
}
    //return $fact;
echo "<h1>Factorial is $fact";
}

if($ch=='mod')
mod($n1,$n2);
else if($ch=='pow')
power($n1,$n2);
else if($ch=='sum')
sum($n1,$n2);
else if($ch=='fac')
fact($n2);
?>
