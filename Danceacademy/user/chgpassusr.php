<?php
session_start();
if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>profile</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/touchTouch.css">
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/style.css">

 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Register</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
   background: url("p704.jpg");
   background-repeat: no-repeat;
   background-size: cover;
   background-position: center;
   font-family: sans-serif;
   height: 100%;
 }
  


  .card {
    background-color:rgb(255, 255, 255,0.4);
	 
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

.dropdown {
  position: relative;
  display: inline-block;
  border:none;
min-width: 160px;
border-bottom:1px solid #fff;
outline:none;
height: 40 px;
color:black;
 text-align: center;
  border-radius: 0px;
font-size:25px;

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










  </style>
<body class="page1" id="top">
<!--==============================
              header
=================================-->

<div class="main">
 <div class="container_12">
<div class="container-fluid">
<div class="grid_12">
		<div class="navbar-header"> <img src="images/p51.jpg">
        
			<a class="navbar-brand" href="index.php"></a>
		</div>
		
			<ul class="nav navbar-right">
 
           <li id="dropdown-user">

                        <a href="#" data-toggle="dropdown" class="-toggle text-center" aria-expanded="false">
                          
                             <br><img class="img-circle img-user media-object" src="images/i1.jpg" height="30" width="30">
                                                         
                           <div class="navigation ">
						   		 <div style=' clear: both; font-size:19px;position: relative;'>
                            <div class="username hidden-xs">HELLO 
							<?php
	                               echo strtoupper ($temp);
	                                ?></div>
                        </a> 
						
	
       
    
      
	  
        

		
		 
       
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
    <ul class="head-list" >
		  <p style="font-size:18px">
           <ul class="head-list" >
							
                                <li>
								<div class="pad-all text-left">
								<a href="Profile.php"><p style="font-size:16px">
                                  &nbsp;  <i class="fas fa-user-circle"></i>
                               profile</p>
                                    </a></div>
									</li>  <li>
								<div class="pad-all text-left">
                                    <a href="chgpassusr.php"><p style="font-size:14px"> &nbsp; <i class="fa fa-lock"></i>
                               Change Password</p>
                                    </a></div>
									</li>  <li>
								<div class="pad-all text-left">
                                    <a href="logout.php"><p style="font-size:18px"> &nbsp; <i class="fas fa-sign-out-alt"></i>
                               Logout</p>
                                    </a></div>
									</li>
									
									
                               
                            </ul>
                          </ul>
                          
		  <br>
		</p>
          </div> </div></div>
      </li></ul>
        </div></div>

  <section id="stuck_container">

   
  
  <!--==============================
              Stuck menu
  =================================-->
  
    <div class="container_12">
        <div class="grid_12">
		     <div class="navigation ">
            <nav>
              <ul class="sf-menu">
                <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
              <li ><a href="classes.php">Our Classes</a></li>
               <li><a href="staff.php">Instructors</a></li>
               <li><a href="contacts.php">Contacts</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
		   

	 <form action="addchgpassusr.php" method="POST" enctype="multipart/form-data">
	  <div class="view" style="background-image: url('images/p712.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	 
	   <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
	   <div class="container">
	    <div class="row mt-5">
	      <div class="col-md-6 col-xl-5 mb-4">
              <!--Form-->
              <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <div class="card-body">
                  <!--Header-->
                  <div class="text-center">
                    <h3 class="white-text">
					 <form action="#" method="POST">
                            <table class="table table-bordered" id="dataTable">
                      <i class="fas fa-user white-text"></i> change password:</h3>
                    <hr class="hr-light">
                  </div>
				   <div class="loginbox">
				    <form action="addchgpassusr.php" method="POST" enctype="multipart/form-data">
					<?php
													include("dbconnection.php");
													$sq="select * from tbl_login where username='$temp'";
													$res=mysqli_query($con,$sq);
													$a=mysqli_fetch_array($res);
													$b=$a['login_id'];
													$sql="select * from tbl_studreg where login_id='$b'";
													$c=mysqli_query($con,$sql);
													$result=mysqli_fetch_array($c);
													?>
			 <div class="navigation ">
			 <p style="color:black;font-size:20px">
			<input type="text"  class="form-control"  name="name"  autofocus="autofocus" required  placeholder="UserName"  value="<?php echo $a['username']; ?>">
    <br><label for="exampleInputEmail1">Old Password</label>
	
		
												
												
														
												
    <input type="password"   required class="form-control"   autofocus="autofocus" required  placeholder="Old Password" name="old" id="old" value="<?php echo $a['password']; ?>">
    <br><label for="exampleInputEmail1">New Password</label>
    <input type="password" class="form-control" name="new" id="pass" placeholder="New Password" onblur="validpaswd()" autofocus="autofocus" required>
    <br><label for="exampleInputEmail1">Confirm Password</label>
    	<input type="password" name="cnew" class="form-control" id="cpawd" placeholder="Confirm New Password" onblur="validcpass()" autofocus="autofocus" required>


<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
Close
<span class="glyphicon glyphicon-remove-sign"></span>
</button>
<input type="submit" name="update" value="Update" class="btn btn-success">
</div>
</form>
</div>
</div>
</div>
</div>


			
			
		<script>

function validpaswd()
   {
    var pass=document.getElementById("pass").value;
	var passexp =/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if(!pass.match(passexp))
	{
	 alert("Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
	 document.getElementById("pawd").value="";
	}
   }
   
   function validcpass()
   {
    var pass=document.getElementById("new").value;
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
</body>
</html>
<?php
}
else {
header("location:index.php");
}
 ?>
