<?php
$dom=new DOMDocument();
$dom->load("Movie.xml");
echo"<h2>Name of Movie</h2>";
$mname=$dom->getElementsByTagName("MovieTitle");
$aname=$dom->getElementsByTagName("ActorName");
foreach($mname as $m)
{
echo"<b>$m->textContent </b><br><br>";
}
foreach($aname as $a)
{
echo"<b>$a->textContent </b><br><br>";
}
?>