<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
	
	</style>
</head>
<body>

<div class="container">
  <?php 
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
$let=$_POST['suggest'];
$nam=$_POST['nam1'];
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT DISTINCT  ocomment.ID,ocomment.kfrom,ocomment.ToName,ocomment.FromName,ocomment.Date,oshout.email FROM ocomment INNER JOIN oshout WHERE ocomment.FromName='$let'  and oshout.ouniq ='$let'  ORDER BY id DESC ";
$result = mysqli_query($conn, $sql);

	
	?>
	
  <?php if (mysqli_num_rows($result) > 0) { ?>
	 <div style=" width: 48%" class="  panel panel-success">
	<?php while($row55 = mysqli_fetch_assoc($result)) {
	?>
  
      <div class="panel-heading"><?php  echo $row55['kfrom']; echo "<b> Time : </b>" ;echo $s=$row55['Date'];?></div>
      <div class="panel-body"><?php  echo $s=$row55['ToName'];?></div>
   
    <?php  } ?>

 </div>

<?php   
} else {
    echo "0 results";
}
mysqli_close($conn);


?>
 </div>
</body>
</html>

       
		
