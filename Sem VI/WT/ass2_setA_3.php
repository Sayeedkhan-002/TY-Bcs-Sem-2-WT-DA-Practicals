<?php
$str=<<<xml
xml;
$file=".xml";
$fptr=fopen($file."w");
fwrite($fptr,$str);
fclose($str);
echo "Created Filename is".$file;
?>