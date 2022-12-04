<?php
session_start();
$_SESSION['username']="I am Abhishek";
$_SESSION['userid']="1";
?>
<html>
  <body>
    <?php
      echo"Session variable is set";
    ?>
    <a href="second_page.php">Go to Second Page</a>
  </body>
</html>