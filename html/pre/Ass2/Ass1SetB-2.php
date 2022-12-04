



<?php
        $str1= $_POST['str1'];
        $str2=$_POST['str2'];
        $str3=$_POST['str3'];
        
function display($str1,$str2,$str3="Good Day")      // function with default parameter 

{
      echo "  Hello,   $str1... from   $str2 .....  $str3<br>";

}

  display($str1,$str2,$str3);
    display($str1,$str2);        // missing parameter
	

?>