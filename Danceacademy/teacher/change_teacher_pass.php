<?php
session_start();
if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];

	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CHANGE TEACHER PASSWORD</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/touchTouch.css">
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/style.css">

 
 
 
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Booking</title>

 <link href="../../css/bootstrap.min.css" rel="stylesheet">
 <link href="../../css/mdb.min.css" rel="stylesheet">
 
    
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script src="js/camera.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script>

 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#camera_wrap').camera({
    loader: false,
    pagination: false ,
    minHeight: '400',
    thumbnails: true,
    height: '46.32478632478632%',
    caption: false,
    navigation: false,
    fx: 'mosaic'
  });
  $('.gallery .gall_item').touchTouch();
 });
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<style>
   html,
  body,
  header,
  .view {
    height: 100%;
  }
  body
 {
   margin: 0;
   padding: 0;
   background: url("p998.jpg");
   background-repeat: no-repeat;
   background-size: cover;
   background-position: center;
   font-family: sans-serif;
   height: 100%;
 }
  .loginbox p
{
  margin:0;
  padding:0;
 font-size: 11px;
 height: 40px;
  font-weight: bold;
}
.loginbox input
{
width:100%;
margin-bottom: 55px;
}
.loginbox input[type="text"], input[type="password"]
{
border:none;
border-bottom:1px solid #fff;
background: transparent;
outline:none;
height: 40 px;
color:black;
padding: 8px 20px;
  border-radius: 20px;
font-size:16px;
}
.loginbox input[type="submit"]
{
width: 50%;
  align-items:center;
  background-color:#f2a530;
  color: white;
  padding: 8px 20px;
  margin: 1px 0;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
.loginbox input[type="submit"]:hover
{
cursor: pointer;
background:#706b64;
color:#000;

}
.loginbox a
{
  text-decoration: none
  font-size: 20px;
  line-height: 26px;
  color:#704642;
  text-align: center;

}
.loginbox a:hover
{
  color:#ffc107;
}
  .card {
    background-color:rgb(255, 255, 255,0.8);
	 
  }



.loginbox input[type="text"], input[type="password"], input[type="number"], input[type="email"],input[type="submit"],input[type="reset"],input[type="menu"]
{
border:none;
border-bottom:1px solid #fff;

outline:none;
height: 40 px;
color:black;
padding: 8px 20px;
  border-radius: 20px;
font-size:16px;
}

.panel-heading {
    color: #fff !important;
	text-transform: uppercase;
    background-color: #f4511e !important;
    padding: 10px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-head {
    color: #fff !important;
    background-color: #af9aae !important;
	text-transform: uppercase;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
 
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
 
  width: 100%
}

.dropdown-content a {
  color: black;
 font-size: 18px;
 line-height: 1.9;
  text-decoration: none;
  display: block;
}

.rd-navbar-sidebar .rd-navbar-nav > li > .rd-navbar-submenu-toggle {
    display: inline-block;
    font-size: 24px;
    line-height: 1;
    -webkit-transition: .3s transform;
    transition: .3s transform;
    cursor: pointer;
    margin-left: 2px;
    color: #3a3a3b;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

 i.custom {font-size: 1em; color: gray;}
 
 ul.a {
  list-style-image: url('Images/l1a.png');
   list-style-position: inside;

}

input[type=submit] {
  background-color:#e0a800 ;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}
input[type=reset] {
  background-color: #e0a800;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}



  .card {

	 
  }
  P{
	 
 font-size: 20px;
 text-align:center;
  }



  </style>

<body class="page1" id="top">
<!--==============================
              header
=================================-->

<div class="main">

 <div class="container_12">
 
<div class="container-fluid">

	<div class="container p-3 my-3 border">
	
        <div class="grid_12">
		
		<div class="navbar-header"> <img src="../images/p777c.jpg">
        
			<a class="navbar-brand" href="index.php"></a>
			
		</div>
		
			<ul class="nav navbar-right">
 <?php
													include("dbconnection.php");
													$sq="select * from tbl_login where username='$temp'";
													$res=mysqli_query($con,$sq);
													$a=mysqli_fetch_array($res);
													$b=$a['login_id'];
													$sql="select * from tbl_teacher where login_id='$b'";
													$c=mysqli_query($con,$sql);
													$result=mysqli_fetch_array($c);
													?>

           <li id="dropdown-user">

                        <a href="#" data-toggle="dropdown" class="-toggle text-center" aria-expanded="false">
                          
                             <br><img class="img-circle img-user media-object"  src="../teacher/upload/<?php echo $result['file']; ?>"height="60" width="60">
                                                         
                           <div class="navigation ">
						   		 <div style=' clear: both; font-size:18px;position: relative;  text-transform: uppercase;'>
                           <?php echo $result['teach_name']; ?>
							</div>
                        </a> 
						
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		  <p style="font-size:18px">
		   <a href="" class="dropdown-item" data-toggle="modal" data-target="#myModal" >&nbsp &nbsp;<i class="fas fa-user-circle"></i> <a href="teachviewprofile.php">Profile</a><br>
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myTodal">&nbsp &nbsp;<i class="fa fa-lock"></i> <a href="change_teacher_pass.php">Change Password</a><br>
              <a  href="logout.php" class="dropdown-item">&nbsp &nbsp<i class="fas fa-sign-out-alt"></i>Logout</a></p>
              
          </div> </div></div>
      </li></ul>
        </div></div></div></div></div>

	 <section id="stuck_container">
  <div class="container_12">
        <div class="grid_12">
  
  
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.php">Home</a></li>
               
             
			  	   <li ><a href="student.php">Students</a></li>
   <li class=" dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Leave
        </a>
        <div class="dropdown-content " aria-labelledby="navbarDropdown">
       <a href="apply_leave.php">Apply Leave</a>
    <a href="leave_status_teacher.php">Leave Status</a>
    <a href="approve_student_leave.php">Student Leave</a></li> 
       
     <li><a href="course_material_teacher.php">Course Material</a></li>
			 
               <li><a href="staff.php">Our Team</a></li>
			   
               
			      <li><a href="gallery.php">Gallery</a></li>
			   
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
    </div></div></div>
	</section>

  <section id="stuck_container">

   
  
  <!--==============================
              Stuck menu
  =================================-->
  
  

	 <form action="addchg_teacher_pass.php" method="POST" enctype="multipart/form-data">
	  <div class="container_12">
	   <div class="view" style="background-image: url('../images/p712.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	 
	   <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
	   <div class="container">
	    <div class="row mt-5">
	      <div class="col-md-6 col-xl-5 mb-4">
              <!--Form-->
              <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <div class="card-body">
					
			<h2><div class="panel-heading"> <div class="navigation ">
				<center>...CHANGE PASSWORD...</center></div></div></h2>
				  
					<?php
													include("dbconnection.php");
													$sq="select * from tbl_login where username='$temp'";
													$res=mysqli_query($con,$sq);
													$a=mysqli_fetch_array($res);
													$b=$a['login_id'];
													$sql="select * from tbl_teacher where login_id='$b'";
													$c=mysqli_query($con,$sql);
													$result=mysqli_fetch_array($c);
													?>
				<div class=" form-group">
									<div class="navigation ">	  	<p style="color:BLACK;">USER NAME </div>
			<input type="text"  class="form-control"  name="name"  autofocus="autofocus" required  placeholder="UserName"  value="<?php echo $a['username']; ?>">
  
	</div>
		
												
												
														
				<div class=" form-group">	<div class="navigation ">	  	<p style="color:BLACK;">OLD PASSWORD</div>							
    <input type="password"   required class="form-control"   autofocus="autofocus" required  placeholder="Old Password" name="old" id="old" value="<?php echo $a['password']; ?>"></div>
   <div class=" form-group">	<div class="navigation ">	  	<p style="color:BLACK;">NEW PASSWORD</div>		
    <input type="password" class="form-control" name="new" id="pawd" placeholder="New Password" onblur="validpaswd()" autofocus="autofocus" required></div>
   	<div class=" form-group">	<div class="navigation ">	  	<p style="color:BLACK;">CONFIRM PASSWORD</div>	
    	<input type="password" name="cnew" class="form-control" id="cpawd" placeholder="Confirm New Password" onblur="validcpass()" autofocus="autofocus" required>
</div></div>
	<br>	

<center>
  <input type='reset' value='cancel'  class="btn btn-success">

&nbsp;
<input type="submit" name="update" value="Update" class="btn btn-success"></center><br>	
</div>
</form>
</div>
</div>
</div>
</div>
 </div> </div> 
<div class="clear"></div>
         
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
		<br>	
			
		<script>

function validpaswd()
   {
    var pass=document.getElementById("pawd").value;
	var passexp =/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if(!pass.match(passexp))
	{
	 alert("Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
	 document.getElementById("pawd").value="";
	}
   }
   
   function validcpass()
   {
    var pass=document.getElementById("pawd").value;
	var cpass=document.getElementById("cpawd").value;
	if(!(pass==cpass))
	{
	 alert("Password not matching");
	 document.getElementById("cpawd").value="";
	}
   }
   </script>	
		
	
   </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>



   
		
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

   <div class="navigation ">		 
<div class="panel-head"><center><P style="font-size:25px;color:white;text-align:center">
"IF YOU HIT A WALL, CLIMB OVER IT, CRAWL UNDER IT, OR DANCE ON TOP OF IT"</p></center></div>
 </div> 
      <div class="clear"></div>
    <BR>




<!--==============================
              footer
=================================-->
</div>
<footer id="footer">
  <div class="container_12">
    <div class="grid_12">
      
    </div>
    <div class="clear"></div>
  </div>
</footer>
<a href="#" id="toTop" class="fa fa-angle-up"></a> 
	
	   
  
 </body>
</html>
<?php
}
else {
header("location:index.php");
}
 ?>

