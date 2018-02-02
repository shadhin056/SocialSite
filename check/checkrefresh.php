<?php
// Start the session
session_start();
?><?php 
		

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$body1=$_POST['content1'];
		$body=$_POST['ami2'];
		$bodyk=$_POST['amik1'];
		//$body1=$_POST['ok1'];
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
$bb = date("Y-m-d (h:i:sa)");
$bd = $_SESSION["cid"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


/*$sql = "INSERT INTO `justtry` (`id`, `body`, `Time`) VALUES (NULL, '$body','$bb')";
*/$sql = "INSERT INTO `ocomment` (`ID`,`kfrom`, `ToName`, `FromName`, `Date`) VALUES (NULL,'$bodyk','$body1', '$body', '$bb')";

if (mysqli_query($conn, $sql)) {
    
} else {
   
}

mysqli_close($conn);
	}




?>