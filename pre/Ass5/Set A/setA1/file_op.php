<?php
$myfile = fopen("s.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
echo "File size : ".filesize("s.txt")."<br>";
fclose($myfile);
?>

