<html>

<head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
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


<nav class="navbar navbar-inverse navbar-fixed-top">
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
  
  <p></p>
</div>

		<!--<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>-->
		<article>
	<?php
//data insert
       $a= $_SESSION['firstname'];
       //$a= 5;
        if(empty($a)){
            header("Location: register.php");
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
    echo "<h3>Welcome to Outzone.You have successfully created your account</h3>";
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