<?php
setcookie("username","I am sanjog",time()+(60*60*24*7));
?>
<html>
  <body>
    <?php
      if(isset($_COOKIE['username']))
      {
	echo "Cookie set with value  ".$_COOKIE['username'];
      }
      else
	{
	echo "Cookie not set";
	}
    ?>
  </body>
</html>
