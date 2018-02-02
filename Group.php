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
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: #9933cc;
    color: #ffffff;
    padding: 15px;
}
/*<!--.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 8px;
    margin-bottom: 7px;
    background-color: #33b5e5;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #0099cc;
}-->*/
  </style>
</head>
<body>
<?php 
	
	   
	   // if form is submitted
	   if (!empty($_POST['osubmit']))
    {
       
        //start validation
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
		
$ot=$_POST["otext"];
$os=$_POST["oshout"];
		$d= date("Y-m-d (h:i:sa)");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
$sql = "INSERT INTO `oshoutbox` (`Id`, `name`, `Time`, `post`) VALUES (NULL, '$ot', '$d', '$os')";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
    }

	?>
<div class="container-fluid">
 <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="javascript:void(0)"  onclick="document.getElementById('id01').style.display='block'" ><span class="glyphicon glyphicon-share"></span> Shout</a>
    </div>
    <div class="collapse navbar-collapse " id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="main.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#"> <span class="glyphicon glyphicon-envelope"></span> Messages <span class="badge">10</span></a></li>
         <li><a href="#"><span class="glyphicon glyphicon-time"></span> Notification <span class="badge">10</span></a></li>
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
    <li><a href="#"><span class="glyphicon glyphicon-education"></span> Create Group</a></li>
    <li class="divider"></li>
    
    <li><a href="#"><span class="glyphicon glyphicon-trash"></span>  Deactive Account</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
  </ul>
</div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
</nav>
<div class="row" style="margin-top: 5%">

<div class="col-3 menu" style="background:  #FCF8E3;height: 100%">
  <div class="well" style="text-align: center">
        <p><a href="#">My Profile</a></p>
        <img src="a.png" class="img-circle" height="75px" width="75px" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">W3Schools</span>
          <span class="label label-success">Labels</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
       <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
</div>

<div class="col-6" style=";margin-bottom: 5%">
 
     <div >
  <h2>Dynamic Tabs</h2>
  

 

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade" >
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
      
      <div class="panel-body">Panel Content</div>
     <!-- <div class="panel-heading"><span class="glyphicon glyphicon-cog"></span> Update Info</div>-->
      <!--<button type="button" style="text-align: left" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-cog"></span>  Update Info</button>-->
      <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button>
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
      <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button> </div></div>
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
      <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button></div></div>
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
      <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button></div></div>
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
      <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button> </div></div>
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
      <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span>  Update Info</button></div></div>
    </div>
    
  </div> 
</div>
    </div>
    <div id="menu2" class="tab-pane fade">
       
          <div class="">
           <div class="row">
  <div class="col-md-4">
     <a href="a.png" target="_blank">
      <div class="panel panel-warning">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="a.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
		</a>
    </div>
   <div class="col-md-4">
     <a href="a.png" target="_blank">
      <div class="panel panel-danger">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="a.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
		</a>
    </div>
    <div class="col-md-4">
     <a href="a.png" target="_blank">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="a.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
		</a>
    </div>
			  </div></div>
         
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
     <div id="menu4" class="tab-pane fade">
     <h3>Open shoutbox for all</h3>
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

$sql = "SELECT * FROM `oshoutbox` ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

		 ?>
           <div class="list-group" style="overflow: scroll;height: 350px">
            <?php while($roww = mysqli_fetch_array($result)){ ?>
           
    <a href="#" class="list-group-item list-group-item-success"> <br><?php echo $roww['Time']; ?> <br>  <b>  <?php echo $roww['name']; ?></b> <br>   <b style="color: #10096B"> <?php echo $roww['post']; ?></b></a>
     <?php }?>		
  </div>
       <form class="form-inline" method="post" action="">
    <div class="form-group">
     
      <input type="text" class="form-control" name="otext" placeholder="Name">
    </div>
    <div class="form-group">
      
      <input type="text" class="form-control" name="oshout" id="pwd" placeholder="write somthing">
    </div>
    <input type="submit" name="osubmit" value="submit">
<!--     <button type="submit" name="osubmit" class="btn btn-default">Submit</button>
-->  </form>
    </div>
  </div>
</div> 
      
      
      
      
</div>
<div class="col-3 menu" style="margin-bottom: 5%; height: 100% ; background:#E5F9EE;">
 <form class="navbar-form">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
      <ul class="nav nav-tabs nav-stacked">
    <li class="active"><a data-toggle="tab" href="#home"><span class="glyphicon glyphicon-home"></span>  Class Room</a></li>
    <li><a data-toggle="tab" href="#menu1"><span class="glyphicon glyphicon-bell"></span>  Announcements</a></li>
    <li><a data-toggle="tab" href="#menu2"><span class="glyphicon glyphicon-king"></span>  Instructor</a></li>
    <li><a data-toggle="tab" href="#menu3"><span class="glyphicon glyphicon-user"></span>  Instructor assistance</a></li>
    <li><a data-toggle="tab" href="#menu4"><span class="glyphicon glyphicon-map-marker"></span>  About course</a></li>
    <li><a data-toggle="tab" href="#menu4"><span class="glyphicon glyphicon-comment"></span>  Discuse</a></li>
    <li><a data-toggle="tab" href="#menu5"><span class="glyphicon glyphicon-user"></span>  Member</a></li>
    <li><a data-toggle="tab" href="#menu6"><span class="glyphicon glyphicon-tree-deciduous"></span>  Marks</a></li>
    <li><a data-toggle="tab" href="#menu7"><span class="glyphicon glyphicon-education"></span>  Grade</a></li>
    <li><a data-toggle="tab" href="#menu8"><span class="glyphicon glyphicon-ok"></span>  Attendance</a></li>
    <li><a data-toggle="tab" href="#menu9"><span class="glyphicon glyphicon-user"></span>  Submission</a></li>
    <li><a data-toggle="tab" href="#menu10"><span class="glyphicon glyphicon-hourglass"></span>  Exam</a></li>
    <li><a data-toggle="tab" href="#menu11"><span class="glyphicon glyphicon-file"></span>  File</a></li>
    <li><a data-toggle="tab" href="#menu12"><span class="glyphicon glyphicon-picture"></span>  Photo</a></li>
    <li><a data-toggle="tab" href="#menu13"><span class="glyphicon glyphicon-trash"></span>  Unenrol me</a></li>
     
  </ul>
</div>
</div>
<footer class="container-fluid text-center navbar-fixed-bottom">
  <p>Copyright 2017 © ShadhiN</p>
</footer>

<div id="id01" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-red">
       <span onclick="document.getElementById('id01').style.display='none'"
       class="w3-button w3-red w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
      <h2>Send Mail</h2>
    </div>
    <div class="w3-panel">
      <label>To</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text">
      
      
      <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?">
      <div class="w3-section">
        <a class="w3-button w3-red" onclick="document.getElementById('id01').style.display='none'">Cancel  <i class="fa fa-remove"></i></a>
        <a class="w3-button w3-light-grey w3-right" onclick="document.getElementById('id01').style.display='none'">Send  <i class="fa fa-paper-plane"></i></a> 
      </div>    
    </div>
  </div>
</div>
	</div>
</body>
</html>
