<?php 
session_start();
if (isset($_SESSION['email22'])) {
   session_destroy();
   echo "<br> you are logged out successufuly!";
} 
   echo "<br/><a href='login.php'>login</a>";
 ?>