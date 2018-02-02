<?php
// Start the session
session_start();

if(isset($_SESSION['email22'])){
//	$a=$_SESSION['email22'];
	$anow=$_SESSION['email22'];
   
}else{header("Location: Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		/* Set black background color, white text and some padding */
		
		footer {
			background-color: #000000;
			color: white;
			padding: 5px;
		}
		
		.row::after {
			content: "";
			clear: both;
			display: table;
		}
		
		[class*="col-"] {
			float: left;
			padding: 15px;
		}
		
		.col-1 {
			width: 8.33%;
		}
		
		.col-2 {
			width: 16.66%;
		}
		
		.col-3 {
			width: 25%;
		}
		
		.col-4 {
			width: 33.33%;
		}
		
		.col-5 {
			width: 41.66%;
		}
		
		.col-6 {
			width: 50%;
		}
		
		.col-7 {
			width: 58.33%;
		}
		
		.col-8 {
			width: 66.66%;
		}
		
		.col-9 {
			width: 75%;
		}
		
		.col-10 {
			width: 83.33%;
		}
		
		.col-11 {
			width: 91.66%;
		}
		
		.col-12 {
			width: 100%;
		}
		
		html {
			font-family: "Lucida Sans", sans-serif;
		}
		
		.header {
			background-color: #9933cc;
			color: #ffffff;
			padding: 15px;
		}
		
		.menu ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		
		.menu li {
			padding: 8px;
			margin-bottom: 7px;
			background-color: #33b5e5;
			color: #ffffff;
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
		}
		
		.menu li:hover {
			background-color: #0099cc;
		}
		
		.button1 {
			opacity: 0;
		}
		
		.button1:hover {
			opacity: 1;
		}
	</style>
</head>

<body>

	<?php 
       
	   
	   // if form is submitted
	   if (!empty($_POST['propicup']))
    {
       
        //start validation
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
$ephoto = $_POST["proimage"];
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$permited=array('jpg','jpeg','png','gif');
  $file_name=$_FILES['proimage']['name'];
  $file_size=$_FILES['proimage']['size'];
  $file_temp=$_FILES['proimage']['tmp_name'];
  $div= explode('.', $file_name);
  $file_exe= strtolower(end($div));
  $proUniqname= substr(md5(time()), 0,10).'.'.$file_exe;
  $s='abcd';
  
  
if (!is_dir($s)) {
    mkdir("$s");         
}
  
  $uploadimagefolder="$s/".$proUniqname;
  
  if(empty($file_name)){
     echo"<script>
    alert('empty file');
</script>";
  }
elseif($file_size>1099511627776){
		 echo"<script>
    alert('greater than 4mb');
</script>";
  }
  elseif (in_array($file_exe, $permited)==FALSE) {
	   echo"<script>
    alert('Only jpg,jpeg,png,gif allow');
</script>";
  
} else {
    
  
 $folder="img/";
move_uploaded_file($file_temp, $uploadimagefolder);
$sql = "UPDATE register SET mphoto='$uploadimagefolder' WHERE Email='$anow'";
$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
   
  echo"<script>
    alert('Record updated successfully');
</script>";
	header("Location: profile.php");
} else {
	echo"<script>
    alert('Record not updated successfully');
</script>";
    //echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
    }
	}

	if (!empty($_POST['multipic'])) {
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "outzone";
//$ephoto1 = $_POST["multipic"];
//$conn = mysqli_connect($servername, $username, $password, $dbname);
//// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
//$max_file_size = 1024*1024*1024*1024*1024*1024; //100 kb
//$path = "uploads/"; // Upload directory
//$count = 0;
//$div1=array();
// $file_exe1=array();
// $proUniqname1=array();
// $uploadimagefolder1=array();
//	// Loop $_FILES to exeicute all files
//	foreach ($_FILES['files']['name'] as $f => $name) {
//           
//           
//  $s1='abcdmul';
//  if (!is_dir($s1)) {
//    mkdir("$s1");         
//}
//            
//	    if ($_FILES['files']['error'][$f] == 4) {
//	        continue; // Skip file if any error found
//	    }	       
//	    if ($_FILES['files']['error'][$f] == 0) {	           
//	        if ($_FILES['files']['size'][$f] > $max_file_size) {
//	            $message[] = "$name is too large!.";
//	            continue; // Skip large files
//	        }
//			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
//				$message[] = "$name is not a valid format";
//				continue; // Skip invalid file formats
//			}
//	        else{ // No error found! Move uploaded files 
//                    
//          
//           $div1[$count]= explode('.', $_FILES['files']['name'][$f]);
//            $file_exe1[$count]= strtolower(end($div1[$count]));
//            $proUniqname1[$count]= substr(md5(time()), 0,10).'.'.$file_exe1[$count];
//                    
// $uploadimagefolder1[$count]="$s1/".$proUniqname1[$count];
//                    
//	            if(move_uploaded_file($_FILES['files']['tmp_name'][$f], $uploadimagefolder1[$count]))
//                    {
//                        $count++;
//                    }
//	             // Number of successfully uploaded file
//	        }
//	    }
//	
//} 
//            
//            
            $a=array(1000);
            $servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
            
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*1024*1024*1024; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name) {
            if (!is_dir($path)) {
    mkdir("$path");         
}
	    if (empty($_FILES['files']['name'][$f])) {
                
                echo"<script>
    alert('empty file');
</script>";
                continue;
	    }	       
	    if ($_FILES['files']['size'][$f] > $max_file_size){
				echo"<script>
    alert('greater than 4mb');
</script>";
                                continue;
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				
				echo"<script>
    alert('invalid file skiped');
</script>";
				
		continue; 
			}
	        else{move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path . substr(md5(time()), 0, 10) . $count . $name);
                    // $a= $path.substr(md5(time()), 0,10).$count.$name;
                    $a = $path . substr(md5(time()), 0, 10) . $count . $name;
                    $b = date("Y-m-d (h:i:sa)");
                    $sql = "INSERT INTO `ophoto` (`ID`, `email`, `photo`, `pdate`) VALUES (NULL, '$anow', '$a','$b')";
                    $result = mysqli_query($conn, $sql);
                    $count++; // Number of successfully uploaded file
	        }
	    }
	
}

?>
	<?php 
	
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT mphoto FROM register WHERE Email='$anow'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $s=$row['mphoto'];
		
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
	
	
	
	
	
	?>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
			
				<!--<a class="navbar-brand" href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-share"></span> Shout</a>-->
			</div>
			<div class="collapse navbar-collapse " id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="main.php"><span class="glyphicon glyphicon-home"></span> Home</a>
					</li>
					<li><a href="message.php"> <span class="glyphicon glyphicon-envelope"></span> Messages <span class="badge"></span></a>
					</li>
					<li><a href="Notification.php"><span class="glyphicon glyphicon-time"></span> OpenChat <span class="badge"></span></a>
					</li>
				</ul>
				<form class="navbar-form navbar-right" role="search" style="margin-right: 2px">
					<div class="form-group input-group">
						<input type="text" class="form-control" placeholder="Search..">
						<span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
					
						</button>
						</span>
					</div>
				</form>

				<div class="btn-group" style="margin-top: 10px">
					<button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-wrench"></span> Setting</button>
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
				
					<ul class="dropdown-menu" role="menu">
					<li><a href="Group.php"><span class="glyphicon glyphicon-education"></span> Group</a></li>
						<li><a href="GroupCreate.php"><span class="glyphicon glyphicon-education"></span> Create Group</a>
						</li>
						<li class="divider"></li>

						<li><a href="#"><span class="glyphicon glyphicon-trash"></span>  Deactive Account</a>
						</li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a>
						</li>
					</ul>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span><?php echo $anow?></a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="row" style="margin-top: 5%">

			<div class="col-3 menu" style="  ;left: 0;background:  #FCF8E3;height: 100%">
				<div class="well" style="text-align: center">

					<img src="<?php echo $s; ?>" height="300" width="250" alt="Avatar">
					<button type="button" class="btn btn-default btn-md btn-block button1" href="javascript:void(0)" onclick="document.getElementById('id02').style.display='block'">Update </button>

					<!--        class="navbar-brand" href="javascript:void(0)"  onclick="document.getElementById('id01').style.display='block'"
-->
				</div>
			<!--	<div class="well">
					<p><a href="#">Interests</a>
					</p>
					<p>
						<span class="label label-default">News</span>
						<span class="label label-primary">W3Schools</span>
						<span class="label label-success">Labels</span>
						<span class="label label-info">Football</span>
						<span class="label label-warning">Gaming</span>
						<span class="label label-danger">Friends</span>
					</p>
				</div>-->
			<!--	<div class="alert alert-success fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					<p><strong>Ey!</strong>
					</p>
					People are looking at your profile. Find out who.
				</div>
				<p><a href="#">Link</a>
				</p>
				<p><a href="#">Link</a>
				</p>
				<p><a href="#">Link</a>
				</p>-->
			</div>

			<div class="col-6" style=";margin-bottom: 5%">

				<div>
					<h2>Dynamic Tabs</h2>


					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#home">Post</a>
						</li>
						<li><a data-toggle="tab" href="#menu1">About</a>
						</li>
						<li><a data-toggle="tab" href="#menu2">Photo</a>
						</li>

						<li><a data-toggle="tab" href="#menu6">Friend</a>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Archive
        <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Page 1-1</a>
								</li>
								<li><a href="#">Page 1-2</a>
								</li>
								<li><a href="#">Page 1-3</a>
								</li>
							</ul>
						</li>
					</ul>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">

<?php 
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";	
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT mphoto FROM register WHERE Email='$anow'";
$sql3 = "SELECT DISTINCT ouniq FROM `oshout` WHERE email='$anow' ORDER BY id DESC";

	$result1 = mysqli_query($conn, $sql1);
	
	$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
       $s1=$row1['mphoto'];
		
    }
}
?>
	
      <?php while($row3 = mysqli_fetch_array($result3)){  $ok=$row3['ouniq']; $ok1=$row3['ouniq'];static $only1=400;$only1++;static $only2=600;$only2++;static $only3=800;$only3++;static $only4=1000;$only4++;static $only5=1200;$only5++;static $only=200;$only++; static $auto=0 ;$auto++;?>
      	 
      <?php 
   $sql2 = "SELECT * FROM `oshout` WHERE ouniq='$ok' ;";
   $sql4 = "SELECT image FROM `oshout`  WHERE ouniq='$ok'";
	$result2 = mysqli_query($conn, $sql2);
	$result4 = mysqli_query($conn, $sql4);
														
	?>
      <?php $row2 = mysqli_fetch_array($result2); ?>
      
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
       <!-- <img src="<?php echo $s1; ?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">-->
        <span class="w3-right w3-opacity"><?php echo $row2['date']; ?></span>
        <h4><?php echo $row2['email']; ?></h4><br>
        <hr class="w3-clear">
        <p><?php echo $row2['shout']; ?></p>
         
         <?php if(mysqli_num_rows($result4)>0){ ?>
    	 <div class="w3-row-padding" style="margin:0 -16px">
       	
        	<?php while($row4 = mysqli_fetch_array($result4)){
			 if($row4['image']!=''){
				 
			 ?>
     				
            <div class="w3-half">
              <img src="<?php echo $row4['image']?>"; style="width:100%;height: 300px" alt="" class="w3-margin-bottom">
            </div>
        
        <?php } else?>
        
<?php
			 continue;
			 ?>
        <?php } ?>
        <?php } ?>
    </div>
        
        <button id="<?php echo $only3 ;?>" onClick="onClick()"  type="button"  class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-up"></span> <span class="badge"><div id="<?php echo $only2 ;?>"></div> </span>
        </button>
		 
        <button id="<?php echo $only5 ;?>" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-down"></span> <span class="badge"><div id="<?php echo $only4 ;?>"></div></span>
        </button>
        
        <button type="button" class="btn btn-default btn-sm" data-toggle="collapse" data-target="#<?php echo $row3['ouniq'] ?>"> <span class="glyphicon glyphicon-comment"></span>  <span class="badge"><div id="<?php echo  $only1?>"></div></span></button> 
        <div id="<?php echo $row3['ouniq'] ?>" class="collapse">
        <p></p>
        <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
             
                          <form action="" method="post">
    
     				<?php $b="abc";$c1= $row3['ouniq'];$c=$auto; $ok5="32083720582" ?>
      <textarea name="<?php echo $c ?>" id="<?php echo $c ?>" placeholder="First name" class="form-control"  rows="1" style="max-width: 90% ;margin-left:2% ;margin-right: 2%;margin-bottom: 2%;margin-top: 2%"></textarea>
      
     <button style="margin-left: 2%;margin-bottom: 2%" type="submit" name="<?php echo $row3['ouniq'] ?>" id="<?php echo $row3['ouniq'] ?>"  class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-ok"></span>  <?php echo 'Done'; /*$auto*/ ; ?></button>
      
     <!-- <input  type="submit"  name="autosubmit" id="autosubmit" value="<?php /*echo $ok1 */?> ">-->  
     <script>
	
	
$(document).ready(function(){
  
	//auto refresh content
	var ami1 =<?php echo json_encode($row3['ouniq']); ?>;
	var amik =<?php echo json_encode($anow); ?>;
	
	$("#<?php echo $row3['ouniq']; ?>").click(function(){
	//document.getElementById('autosubmit').click(function(){
	var content =$("#<?php echo $auto; ?>").val();
	//var content =78;
		
	
	if($.trim(content)!=''){
            $.ajax({
               url:"check/checkrefresh.php",
               method:"POST",
               data:{content1:content, ami2:ami1,amik1:amik },
                dataType: 'text',
                success:function(data){
                    $("#<?php echo $auto; ?>").val("");
                }
            });
            return false;
            
        }
	});
	
	$("#<?php echo $only3; ?>").click(function(){
	//document.getElementById('autosubmit').click(function(){
		
	var content=5;
		var shadhin='<?php echo $anow?>';
	if($.trim(content)!=''){
            $.ajax({
               url:"check/checkrefresh1.php",
               method:"POST",
               data:{ami2:ami1,mynam:shadhin },
                dataType: 'text',
                success:function(data){
                    
                }
            });
            return false;
            
        }
	});
	$("#<?php echo $only5; ?>").click(function(){
	//document.getElementById('autosubmit').click(function(){
		
	var content=5;
		var shadhin='<?php echo $anow?>';
	if($.trim(content)!=''){
            $.ajax({
               url:"check/checkrefresh2.php",
               method:"POST",
               data:{ami3:ami1,mynam:shadhin },
                dataType: 'text',
                success:function(data){
                    
                }
            });
            return false;
            
        }
	});
	
	setInterval(function(){
		var nam ='<?php echo $anow?>';
		$("#<?php echo $only ?>").load("check/getrefresh.php",{suggest:ami1,nam1:nam}).fadeIn("slow");
		
	},1000);
	
	
			setInterval(function(){
		
		$("#<?php echo $only2 ?>").load("check/getrefresh2.php",{suggest99:ami1}).fadeIn("slow");
		
	},1000);
			
setInterval(function(){
		
		$("#<?php echo $only4 ?>").load("check/getrefresh4.php",{suggest999:ami1}).fadeIn("slow");
		
	},1000);
	
	setInterval(function(){
		
		$("#<?php echo $only1 ?>").load("check/getrefresh1.php",{suggest9:ami1}).fadeIn("slow");
		
	},1000);
	
	
 });  
	
	</script>
	
  </form> 
            </div>
          </div>
        </div>
      </div>
        
        
        
        <p></p>
        
     
    <div id="<?php echo $only ?>" class="panel panel-success">
      
    </div>
    
  </div>
     <p></p>
      </div>
     
	
      <?php ?>		
      <?php }?>		
    <!-- without pic-->

     


						</div>
						<div id="menu1" class="tab-pane fade">
							<div class="">

								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Basic Information</a>
        </h4>
										
										</div>
										<div id="collapse1" class="panel-collapse collapse in">
											<div class="panel panel-danger">
<?php 
	//echo $_SESSION['email22'];
	$getIDlogin=$_SESSION['email22'];
	    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";	
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register where email = '$getIDlogin'";
$result = mysqli_query($conn, $sql);
//
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
        ?>        
               <div class="panel-body"><b> FULL Name : </b><?php  echo  $row['Full_name']; ?></div>
               <div class="panel-body"><b> Nick Name : </b><?php  echo  $row['Nick_name']; ?></div>
               <div class="panel-body"><b> Gender : </b><?php  echo  $row['Gender']; ?> </div>
               <div class="panel-body"><b> Email : </b><?php  echo   $row['Email']; ?></div>
               <div class="panel-body"><b> Phone : </b><?php  echo $row['Phone']; ?></div>
               <div class="panel-body"><b> Birthday : </b><?php  echo $row['Birthday']; ?></div>
               <div class="panel-body"><b> Password : </b><?php  echo $row['Password']; ?></div>
                     
                
<?php			
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        mysqli_free_result($result);
	mysqli_close($conn);
	?>
												
												
												<!-- <div class="panel-heading"><span class="glyphicon glyphicon-cog"></span> Update Info</div>-->
												<!--<button type="button" style="text-align: left" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-cog"></span>  Update Info</button>-->
												
												<a href="basicup2.php"><button  type="button" class="btn btn-danger "><span class="glyphicon glyphicon-cog"></span>  Update Info</button></a>
											</div>
										</div>
									</div>



									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Contact information</a>
        </h4>
										
										</div>
										<div id="collapse2" class="panel-collapse collapse">
											<div class="panel panel-danger">

												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>

												<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button> </div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Activities and interest</a>
        </h4>
										
										</div>
										<div id="collapse3" class="panel-collapse collapse">
											<div class="panel panel-danger">

												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Education and Qualification</a>
        </h4>
										
										</div>
										<div id="collapse4" class="panel-collapse collapse">
											<div class="panel panel-danger">

												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Skills</a>
        </h4>
										
										</div>
										<div id="collapse5" class="panel-collapse collapse">
											<div class="panel panel-danger">

												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button> </div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Work experience</a>
        </h4>
										
										</div>
										<div id="collapse6" class="panel-collapse collapse">
											<div class="panel panel-danger">

												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<div class="panel-body">Panel Content</div>
												<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						
						<div  id="menu2" class="tab-pane fade">
						
							<button id="ami" style=" opacity: 1;" type="button" class="  btn btn-default btn-md btn-block button1" href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'">Upload photo </button>
							<div class="">
								<div class="row">
<?php 
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";	
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `ophoto` WHERE email='$anow'";
$result = mysqli_query($conn, $sql);
?>
								
					 <?php while($row = mysqli_fetch_array($result)){ ?>			
									<div class="col-md-4">
										<a href="<?php echo $row['photo']; ?>" target="_blank">
											<div class="panel panel-warning">
												<div class="panel-heading"> Up Time :  <?php echo $row['pdate']; ?></div>
												</a>
												<div class="panel-body"><img src="<?php echo $row['photo']; ?>" class="img-responsive" style="width:100%; height: 180px" alt="Image">
												</div>
												
												
												<a href="userphotodelete.php?email=<?php echo $row['photo']; ?>" onclick="return confirm('Are you sure you wish to delete this Record?');">
												  <button type="button" class="btn btn-danger btn-block">Delete</button>
 </a>
											</div>
										
									</div>
									
									
							 <?php }?>		
									
									
									
									
								</div>
							</div>

						</div>
						<div id="menu6" class="tab-pane fade">

							<div class="">
								<div class="row">
									<div class="col-md-4">
										<a href="a.png" target="_blank">
											<div class="panel panel-warning">
												<div class="panel-heading">BLACK FRIDAY DEAL</div>
												<div class="panel-body"><img src="a.png" class="img-responsive" style="width:100%" alt="Image">
												</div>
												<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="a.png" target="_blank">
											<div class="panel panel-danger">
												<div class="panel-heading">BLACK FRIDAY DEAL</div>
												<div class="panel-body"><img src="a.png" class="img-responsive" style="width:100%" alt="Image">
												</div>
												<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="a.png" target="_blank">
											<div class="panel panel-primary">
												<div class="panel-heading">BLACK FRIDAY DEAL</div>
												<div class="panel-body"><img src="a.png" class="img-responsive" style="width:100%" alt="Image">
												</div>
												<div class="panel-footer">Buy 50 mobiles and get a gift card</div>
											</div>
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>




			</div>
			<div class="col-3 menu" style="background: #FCF8E3;height: 100%">
				<!--<div class="thumbnail" style="text-align: center">
					<p>Upcoming Events:</p>
					<img src="a.png" alt="Paris" width="80" height="80">
					<p><strong>Paris</strong>
					</p>
					<p>Fri. 27 November 2015</p>
					<button class="btn btn-primary">Info</button>
				</div>-->
				<!--<div class="w3-card-2 w3-round w3-white w3-center">
					<div class="w3-container">
						<p>Friend Request</p>
						<img src="a.png" alt="Avatar" style="width:50%"><br>
						<span>Jane Doe</span>
						<div class="w3-row w3-opacity">
							<div class="w3-half">
								<button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
							</div>
							<div class="w3-half">
								<button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
		<footer class="container-fluid text-center navbar-fixed-bottom">
			<p>Copyright 2017 © ShadhiN</p>
		</footer>

		<div id="id01" class="w3-modal" style="z-index:4">
			<div class="w3-modal-content w3-animate-zoom">
				<div class="w3-container w3-padding w3-red">
					<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-red w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
					<h2>Multi</h2>
				</div>
				<div class="w3-panel">
					<!-- <label>To</label>-->
					<!-- <input class="w3-input w3-border w3-margin-bottom" type="text">-->

					<form method="post" enctype="multipart/form-data">

						<input type="file" name="files[]" multiple style="height:50px">
						<div class="w3-section">
							<a class="w3-button w3-red" onclick="document.getElementById('id01').style.display='none'">Cancel now <i class="fa fa-remove"></i></a>
							<!--<a class="w3-button w3-light-grey w3-right" onclick="document.getElementById('id01').style.display='none'">Send  <i class="fa fa-paper-plane"></i></a> -->
							<input class="w3-button w3-light-grey w3-right" onclick="document.getElementById('id01').style.display='none'" type="submit" name="multipic" value="Submit ok">
							</i>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="id02" class="w3-modal" style="z-index:4">
			<div class="w3-modal-content w3-animate-zoom">
				<div class="w3-container w3-padding w3-red">
					<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-red w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
					<h2>Upload multiple group photo</h2>
				</div>
				<div class="w3-panel">
					<!-- <label>To</label>-->
					<!-- <input class="w3-input w3-border w3-margin-bottom" type="text">-->

					<form method="post" enctype="multipart/form-data">
						<input type="file" name="proimage" style="height:50px">
						<div class="w3-section">
							<a class="w3-button w3-red" onclick="document.getElementById('id02').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
							<!--<a class="w3-button w3-light-grey w3-right" onclick="document.getElementById('id01').style.display='none'">Send  <i class="fa fa-paper-plane"></i></a> -->
							<input class="w3-button w3-light-grey w3-right" onclick="document.getElementById('id02').style.display='none'" type="submit" name="propicup" value="upload">
							</i>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--<div id="id03" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-red">
       <span onclick="document.getElementById('id03').style.display='none'"
       class="w3-button w3-red w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
      <h2>Say Somthing</h2>
    </div>
    <div class="w3-panel">
     <!-- <label>To</label>-->
		<!-- <input class="w3-input w3-border w3-margin-bottom" type="text">-->

		<!--<form enctype="multipart/form-data">
      <input type="file" multiple  style="height:150px" placeholder="What's on your mind?">
      <div class="w3-section">
        <a class="w3-button w3-red" onclick="document.getElementById('id03').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
        <!--<a class="w3-button w3-light-grey w3-right" onclick="document.getElementById('id01').style.display='none'">Send  <i class="fa fa-paper-plane"></i></a> -->
		<!--<input class="w3-button w3-light-grey w3-right" onclick="document.getElementById('id02').style.display='none'" type="submit" name="propicup" value="Submit"></i>
      </div>  
      </form> -->
		<!-- </div>
  </div>
</div>-->

		


	</div>
</body>

</html>