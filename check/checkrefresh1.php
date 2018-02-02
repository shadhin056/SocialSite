<?php
// Start the session
session_start();
?><?php 
		

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$body=$_POST['ami2'];
		$name=$_POST['mynam'];
		//$body1=$_POST['ok1'];
		$servername = "localhost";
$username = "root";
$password = "";
		$a=1;
		$b=0;
$dbname = "outzone";
$bb = date("Y-m-d (h:i:sa)");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


/*$sql = "INSERT INTO `justtry` (`id`, `body`, `Time`) VALUES (NULL, '$body','$bb')";
*/$sql = "INSERT INTO `likedislike` (`ID`, `Email`, `ofrom`,`olike`, `odislike`) VALUES (NULL,'$name','$body', '$a', '$b')";

if (mysqli_query($conn, $sql)) {
    
} else {
   
}

mysqli_close($conn);
	}




?>