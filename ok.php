<html>
<?php
session_start();
?>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle3.css">
</head>
<?php
// Date in the past
header( "Expires: Mon, 26 Jul 1997 05:00:00 GMT" );
header( "Cache-Control: no-cache" );
header( "Pragma: no-cache" );
?>

<body>

	<div class="container">
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Outzone</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Welcome to Outzone.You have successfully create your account</h3>
  <p></p>
</div>

		<!--<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>-->
		<article>
	<?php
//data insert
       $a= $_SESSION['firstname'];
        if(empty($a)){
            header("Location: success.php");
        } else {
            
	$pfull_name=$_SESSION["firstname"];
	$pNick_name=$_SESSION['lastname'];
	$pGender= $_SESSION["gender"] ;
	$pEmail=$_SESSION["email22"];
	$pPhone=$_SESSION["telphone"];
	$pBirthday= $_SESSION["Birth_day"];
	$ppassword=$_SESSION["pass2"];
        
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
//$ami="paru";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
	$sql ="INSERT INTO register (Full_name, Nick_name, Gender,Email,Phone,Birthday,Password) VALUES ('$pfull_name','$pNick_name', '$pGender','$pEmail','$pPhone','$pBirthday','$ppassword');";
	
	if (mysqli_query($conn, $sql)) {
    echo "You have successfully Create Your Account";
    session_destroy();
    exit();
} else {
    echo "You Have already acccount";
    session_destroy();
    exit();
}
	// Close connection
		
mysqli_close($conn);
}
	?> 
		</article>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>