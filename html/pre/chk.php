<?php
function strln($s1)
{
      $i=0;
    while ($s1[$i] != '')
    {


          $i++;
    }
echo "String length is".$i;
}
function vowel($s1)
{
        $s=strtolower($s1);
        $count=0;
        $count=substr_count($s,'a')+substr_count($s,'e')+substr_count($s,'i')+substr_count($s,'o')+substr_count($s,'u');
        echo "Total no of vowels are:$count";
}
function titlecase($s1)
{
    echo("ucwords(strtolower($s1))");
}
function s_pad($s1)
{
    echo str_pad($s1,20,"*",STR_PAD_BOTH);
}
function s_trim($s1)
{
    echo trim($s1);
}
function s_rev($s1)
{
    echo"Original String".$s1;
    echo strrev($s1);
    echo"Reverse String".$s1;
}
?>

