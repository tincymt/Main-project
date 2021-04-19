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
   background: url("p998.jpg");
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

	
		<div class="container_12"><div class="container-fluid">
			<div class="grid_12">
				<div class="navbar-header"> <img src="images/p51.jpg">
           <a class="navbar-brand" href="profile.php"></a>
		</div>
		
		   
		    </div>
    <div class="clear"></div>
  </div>
		
		
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
		   

	 <form action="addreg.php" method="POST" enctype="multipart/form-data">
	  <div class="view" style="background-image: url('images/p11.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	 
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
                      <i class="fas fa-user white-text"></i> profile:</h3>
                    <hr class="hr-light">
                  </div>
				   <div class="loginbox">
				    <form action="addreg.php" method="POST">
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

				   
                  <div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-user prefix white-text active"></i>
											</span>
										</div>
										<input type="text" required class="form-control" id="nam" name="name" value="<?php echo $result['name']; ?>" placeholder="Your name" onblur="validname()">
									</div>
				 
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-home"></i>
											</span>
										</div>
										<textarea cols='25' rows='4' required class="form-control" name="address"id="comment"value="<?php echo $result['address']; ?>" placeholder="Your Address"></textarea>
									</div>
				
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="input-group form-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fa fa-user"></i>
													</span>
												</div>
												<div class="dropdown">
												<select id="ctrSubDropDownLong" required class="form-control" type="menu" title="Select Subject" name="gender"required=""onblur="validate()" >
												<option value="value="<?php echo $result['gender']; ?>"">Select Gender</option>
											
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											<option value="OTHER">Other</option>
										</select>	
											
											</div>
										</div>  	</div>
										<div class="col-xs-6 col-sm-6 col-md-6">	
											<div class="input-group form-group">
												<div class="input-group-prepend">
												<span class="input-group-text">
													<i class="fa fa-birthday-cake"></i>
												</span>	
														</div>
														
										<input placeholder="DOB" min="2000-01-01"  max="2050-01-01" required class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" value="<?php echo $result['DOB']; ?>"name="dob"/>	
										
											</div>
										</div>
									</div>		
									
									  
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> 
											<i class="fa fa-phone"></i>
											</span>
										</div>
										
										
										
										
										 <input type='number' required class="form-control" placeholder="number" id="phno" value="<?php echo $result['contactno']; ?>"name="contactno" onblur="validate2()"required> 
										
									</div> 
									
				  
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-envelope-square" aria-hidden="true"></i>
											</span>
										</div>
										<input type='email' required class="form-control" placeholder="name@example.com" id="mail" name="email" value="<?php echo $result['email']; ?>"onblur="validmail()"required> 
										
									</div>
				  
				  
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-user"></i>
											</span>
										</div>
										<input type='text' required class="form-control" id="usr" name="username" placeholder="username">
										
									</div>
									
									
									
									
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="input-group form-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="fa fa-lock"></i>
													</span>
												</div>
												<input type='password' required class="form-control" id="pawd" name="password" placeholder="Password" onchange="validpaswd()">
											
											</div>
										</div>  
										<div class="col-xs-6 col-sm-6 col-md-6">	
											<div class="input-group form-group">
												<div class="input-group-prepend">
												
										<input type='password' required class="form-control" id="cpawd" name="confirm" placeholder="confirm password" onchange="validcpass()">
											</div>
										</div>
									</div>			</div>	
									
									
									
											<div class="input-group form-group">
									
									<div class="input-group-prepend">
									<span class="input-group-text">
									<i class="fa fa-image"></i>	</span>				
									<button type="button" class="btn btn-secondary">
									<input type='file' id="img" name="sfile" accept="image/*"></button>
									</div>
									</div>			
									
									
									
						  
									

                  
									<div class="text-center mt-4"><center>
										<input type="submit" id="bt" value="update" name="Submit" class="btn btn-secondary">
	                                 <input type='reset' value='RESET' onclick='location.reload()' class="btn btn-secondary"></center>
										<hr class="hr-light mb-3 mt-4">
					
									</div>
								</div>
							</div>
						</div>
					</div></div></div></div>
				</div>
		
			</form>
			
		<script>
function validname()
   {
    var name=document.getElementById("nam").value;
	var letters =/^[a-zA-Z ]*$/;
	if(!name.match(letters))
	{
	 alert("Please enter your name correctly");
	 document.getElementById("nam").value="";
	}
   }
   
   
   function validmail()
   {
    var email=document.getElementById("mail").value;
	var mailexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(!email.match(mailexp))
	{
	 alert("Please enter your email address correctly");
	 document.getElementById("mail").value="";
	 document.getElementById("bt").focus();
	}
   }
   
   
   
   
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
   
   
   
   function validate2()
{
var phone = document.getElementById("phno").value;
var phn=/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
if (phone == "")
    {
      alert("Phone number can't be blank ");
      count++;
      return false;
    }
else if(phone.length!=10)
{
alert("Enter your phone number correctly!");
count++;
return false;
}
else if(!phone.match(phn))
{
alert("Please enter valid number");
count++;
return false;
}
else
{
count=0;
}
}


function validate() 
{
if( document.form1.quali.value == "-1" )
   {
     alert( "Please select qualification!" );
     return false;
   }
}

   </script>	
		
	
   </div>

</div>
</body>
</html>
<?php
}
else {
header("location:index.php");
}
 ?>
