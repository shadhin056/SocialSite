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
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #0099cc;
}
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }

  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: #dddddd;
  }
  </style>
</head>
<body>
<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "outzone");
if(!empty($_POST))
{
 $output = '';
   // $email = mysqli_real_escape_string($connect, $_POST["email"]);
   $email=$anow;
    $mobile= mysqli_real_escape_string($connect, $_POST["mobile"]);
    $address = mysqli_real_escape_string($connect, $_POST["address"]);
    $query = "
    INSERT INTO ogroup(email, mobile, address)
     VALUES('$email', '$mobile', '$address')
    ";
    if(mysqli_query($connect, $query))
    {

   }
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
     <!-- <a class="navbar-brand" href="javascript:void(0)"  onclick="document.getElementById('id01').style.display='block'" ><span class="glyphicon glyphicon-share"></span> Shout</a>-->
    </div>
    <div class="collapse navbar-collapse " id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="main.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="message.php"> <span class="glyphicon glyphicon-envelope"></span> Messages <span class="badge"></span></a></li>
         <li><a href="Notification.php"><span class="glyphicon glyphicon-time"></span> Open Chat <span class="badge"></span></a></li>
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
    <li><a href="#"><span class="glyphicon glyphicon-education"></span> Create Group</a></li>
    <li class="divider"></li>
    
    <li><a href="#"><span class="glyphicon glyphicon-trash"></span>  Deactive Account</a></li>
    <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
  </ul>
</div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> <?php echo $anow ?></a></li>
      </ul>
    </div>
</nav>
<div class="row" style="margin-top: 5%">

<div class="col-3 menu" style=" position: fixed ;left: 0;background:  #DFF0D8;height: 100%">
  <!--<div class="thumbnail" style="text-align: center">
        <p>MD.Moniruzzaman Shadhin</p>
        <img src="a.png" alt="Paris" width="80" height="80">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        
<button type="button" class="btn btn-info">Post <span class="badge">10</span></button>
               <button type="button" class="btn btn-info">Friend <span class="badge">10</span></button>
        <button type="button" class="btn btn-info">Group <span class="badge">10</span></button>
      </div> -->
     
     <!--  <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <div class="w3-card-2 w3-round w3-white w3-center">
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
      </div>
      </div>-->
      
</div>

<div class="col-6" style="margin-left: 25%;margin-bottom: 5%">
<!-- <h2>Create Group</h2>-->
 <!-- Trigger the modal with a button -->
 <?php
      //include('db.php');
      $select = mysqli_query($connect, "SELECT * FROM ogroup");
      $num_row = mysqli_num_rows($select);

      if( $num_row ) {
  ?>
        <table>
            <tr>
                <th>Admin</th>
                <th>Group Name</th>
                <th>Type</th>
            </tr>
            <?php while( $userrow = mysqli_fetch_array($select) ) { ?>
            <tr>
                <td><?php echo $userrow['email']; ?></td>
                <td><?php echo $userrow['mobile']; ?></td>
                <td><?php echo $userrow['address']; ?></td>

            </tr>
            <?php } ?>
        </table>
  <?php } ?>
 
 
 <div style="width: 250px"><button  type="button" class="btn btn-default btn-lg" id="myBtn">Update</button></div>
  

  <!-- Modal -->
  <div style="" class="modal fade" id="myModal" role="dialog">
    <div style="" class="modal-dialog">

      <!-- Modal content-->
      <div style="" class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-wrench"></span> Group Information</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post">
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
              <input type="email" disabled class="form-control" id="email" name="email" value='<?php echo $anow ?>' placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="mobile"><span class="glyphicon glyphicon-phone"></span> Group name</label>
              <input type="text" required class="form-control" id="mobile" name="mobile" placeholder="Enter Group name.">
            </div>
            <div class="form-group">
              <label for="address"><span class="glyphicon glyphicon-home"></span> Type</label>
              <input type="text" required class="form-control" id="address" name="address" placeholder="Enter Type">
            </div>
              <button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

        </div>
      </div>

    
  </div>
</div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
 
 
</div>
<div class="col-3 menu" style="position: fixed;right: 0;background: #DFF0D8;height: 100%">
  <div class="well well-sm">
	
  <button type="button" style="text-align: left" class="btn btn-default btn-block">Group Create</button>
  <button type="button" style="text-align: left" class="btn btn-default btn-block">My Group <span class="badge"></span></button>
  <button type="button" style="text-align: left" class="btn btn-default btn-block">Friend Request <span class="badge"></span></button>
  <button type="button" style="text-align: left" class="btn btn-default btn-block">Default</button>
  <button type="button" style="text-align: left" class="btn btn-default btn-block">Default</button>
  <button type="button" style="text-align: left" class="btn btn-default btn-block">Default</button>
  
  
  
  </div>  
   
      
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
</body>
</html>
