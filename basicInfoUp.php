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
  </style>
</head>
<body>
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

<div class="col-3 menu" style="  ;left: 0;background:  #FCF8E3;height: 100%">
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
  

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Post</a></li>
    <li><a data-toggle="tab" href="#menu1">About</a></li>
    <li><a data-toggle="tab" href="#menu2">Photo</a></li>
    
    <li><a data-toggle="tab" href="#menu3">Friend</a></li>
     <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Archive
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
            
      
       <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="a.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>John Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          
        
        
        
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-up"></span> <span class="badge">10</span>
        </button>
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-down"></span> <span class="badge">10</span>
        </button>
        
        <button type="button" class="btn btn-default btn-sm" data-toggle="collapse" data-target="#demo1"> <span class="glyphicon glyphicon-comment"></span>  <span class="badge">10</span></button> 
        <div id="demo1" class="collapse">
        <p></p>
        <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
             
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <button type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-ok"></span>  Done</button>  
            </div>
          </div>
        </div>
      </div>
        
        
        
        <p></p>
    <div class="panel panel-success">
      <div class="panel-heading">Panel with panel-success class</div>
      <div class="panel-body">Panel Content</div>
      
         
         
         
         
         
         
         
         <div class="panel-body"> <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-up"></span> <span class="badge">10</span>
        </button>
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-down"></span> <span class="badge">10</span>
        </button>
        
        <button type="button" class="btn btn-default btn-sm" data-toggle="collapse" data-target="#demo5"> <span class="glyphicon glyphicon-comment"></span>  <span class="badge">10</span></button>
        
              <div id="demo5" class="collapse">
        <p></p>
        <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
             
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <button type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-ok"></span>  Done</button>  
            </div>
          </div>
        </div>
      </div>
        
        
        
        <p></p>
    <div class="panel panel-danger">
      <div class="panel-heading">Panel with panel-success class</div>
      <div class="panel-body">Panel Content</div>
    </div>
  </div>
        
        
        
        
        </div>
    </div>
  </div>
     <p></p>
      </div>
     
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="a.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>John Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="a.png" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="a.png" style="width:100%" alt="Nature" class="w3-margin-bottom">
          </div>
        </div>
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-up"></span> <span class="badge">10</span>
        </button>
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-down"></span> <span class="badge">10</span>
        </button>
        
        <button type="button" class="btn btn-default btn-sm" data-toggle="collapse" data-target="#demo"> <span class="glyphicon glyphicon-comment"></span>  <span class="badge">10</span></button> 
        <div id="demo" class="collapse">
        <p></p>
        <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
             
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <button type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-ok"></span>  Done</button>  
            </div>
          </div>
        </div>
      </div>
        
        
        
        <p></p>
    <div class="panel panel-success">
      <div class="panel-heading">Panel with panel-success class</div>
      <div class="panel-body">Panel Content</div>
      
               
         <div class="panel-body"> <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-up"></span> <span class="badge">10</span>
        </button>
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-thumbs-down"></span> <span class="badge">10</span>
        </button>
        
        <button type="button" class="btn btn-default btn-sm" data-toggle="collapse" data-target="#demo6"> <span class="glyphicon glyphicon-comment"></span>  <span class="badge">10</span></button>
        
              <div id="demo6" class="collapse">
        <p></p>
        <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
             
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <button type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-ok"></span>  Done</button>  
            </div>
          </div>
        </div>
      </div>
        
        
        
        <p></p>
    <div class="panel panel-danger">
      <div class="panel-heading">Panel with panel-success class</div>
      <div class="panel-body">Panel Content</div>
    </div>
  </div>
        
        
        
        
        </div>
    </div>
    
  </div>
     <p></p>
      </div>
     
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
      <p></p>
       <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
             <p></p>
              Name: <p contenteditable="true" class="w3-border w3-padding"></p>
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <p contenteditable="true" class="w3-border w3-padding"></p>
              <button type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-ok"></span>  Done</button>  
            </div>
          </div>
        </div>
      </div><p></p>
     <!-- <div class="panel-heading"><span class="glyphicon glyphicon-cog"></span> Update Info</div>-->
      <!--<button type="button" style="text-align: left" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-cog"></span>  Update Info</button>-->
      
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
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
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
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
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
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
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
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
      <div class="panel-body">Panel Content</div>
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
  </div>
</div> 
      
      
      
      
</div>
<div class="col-3 menu" style="background: #FCF8E3;height: 100%">
  <div class="thumbnail" style="text-align: center">
        <p>Upcoming Events:</p>
        <img src="a.png" alt="Paris" width="80" height="80">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn btn-primary">Info</button>
      </div>   
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
