<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="mystyle2.css">
</head>

<body>
    		
	<?php 
    if($_POST)                         // if form is submitted
    {
        
$firstNameErr = $lastNmeErr = $email1Err = $email2Err = $genderErr = $telErr = $passErr2= $passErr1="";
$firstName = $lastName = $email1 = $email2 =$gender = $comment = $tel = $pass01 = $pass02 = "";
        $errors = array();

        //start validation
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
$eemail = $_POST[ "email222"];
$pname = $_POST[ "pass2"];	
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register WHERE Password = '$pname' and Email ='$eemail'";
$sql1= "SELECT * FROM admin WHERE Password = '$pname' and aEmail ='$eemail'";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) && mysqli_num_rows($result1)> 0) {
     $_SESSION['email22'] = $eemail;
   header("Location: main.php");
	exit();
	mysqli_close($conn);
    }
    elseif (mysqli_num_rows($result) || mysqli_num_rows($result1)> 0) {
        $_SESSION['email22'] = $eemail;
   header("Location: main.php");
	exit();
	mysqli_close($conn);
}
 else {
	  $errors['Loginerror'] = "please Create A new Account";
}

	}
?>




	<div class="container">

		<header>
			<h4>Welcome To Sign In Outzone</h4>
		</header>

		<nav>
			<img src="a.png" style="max-height: 100% ; max-width: 100%">
		</nav>
		<article>

			<h1 style="text-align: center">Sign In to Your Account</h1>
			<div style="margin-right:50px;margin-left:50px">
				<form method="post" target="_self" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<!--<label for="fname">First Name </label>-->
					<span><b>Email Address</b></span>
					<input type="email" id="fname" name="email222" value="<?php if(isset($_POST['email222'])) echo $_POST['email222']; ?>" placeholder="shadhin@gmail.com" required>
					
					<span><b>Password</b></span>
					<input type="password" id="fname" name="pass2" placeholder="12345678" required>

					<span class="error">
						<font size="2">
							<?php if(isset($errors['Loginerror']))  echo " ".$errors['Loginerror'];?>
						</font>
					</span>
					<div style=" width: 100%">
						<div class="shadhin" style="float:left ; width: 50%"><input type="reset" value="Reset all">
						</div>
						<div class="shadhin" style="float:right; width: 50%"><input type="submit" value="Login">
						</div>
					</div>
					<div style="; margin-bottom:5px; margin-top:5px;border: 2px solid black; width: 100% ; clear:both"></div>

				</form>
				<a href="register.php" target="_self"><button class="button"><span>Don't have account ?</span></button>
						</a>
			</div>

		</article>
		<?php

		?>
		<footer style="clear: both;">Copyright 2017 &copy; ShadhiN</footer>
	</div>
</body>

</html>