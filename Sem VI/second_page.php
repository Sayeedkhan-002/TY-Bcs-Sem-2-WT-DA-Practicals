<?php
session_start();
$username=$_SESSION['username'];
$userid=$_SESSION['userid'];
?>
<html>
  <body>
    <?php
      echo"Username is ".$username;
      echo"<br> User ID is ".$userid;
    ?>
  </body>
</html>