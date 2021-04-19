<?php
session_start();
if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];

	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BOOKING</title>
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
<title>Booking</title>
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
  <div class="container_12">
        <div class="grid_12">
  
  
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
              <li><a href="classes.php">our classes</a></li>
               <li><a href="staff.php">Instructors</a></li>
               <li><a href="contacts.php">Contacts</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
    </div>
		

	 <form action="addbking.php" method="POST" enctype="multipart/form-data">
	  <div class="view" style="background-image: url('images/p763.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	 
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
                      <i class="fas fa-user white-text"></i> Booking</h3>
                    <hr class="hr-light">
                  </div>
				   <div class="loginbox">
				    <form action="addbking.php" method="POST" enctype="multipart/form-data">
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
													<i class="fa fa-birthday-cake"></i>
												</span>	
														</div>
														
										<input placeholder="Date of addmission" min="2010-01-01"  max="2080-01-01" required class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" value="" name="doa"/>	
										
											</div>
											
											
											
											
											
											

                                       <div class="input-group form-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
													<i class="fa fa-child"></i>
													</span>
												</div>
												
				   <select  id="ctrSubDropDownLong" name="course" value="" class="form-control" required>
														<option value="">Select course</option>
<?php $query =mysqli_query($con,"SELECT * FROM tbl_course");
                        while($row=mysqli_fetch_array($query))
                        { ?>
                        <option value="<?php echo $row['course_name'];?>"><?php echo $row['course_name'];?></option>
                        <?php
                        }
                        ?>
                        </select>
				   
					</div>  
				   
				   <div class="input-group form-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
													<i class="fa fa-calendar"></i>
													
													</span>
												</div>
				   
				   
				   <select  id="ctrSubDropDownLong" name="duration" value="" class="form-control" required>
														<option value="">Select duration</option>
<?php $query =mysqli_query($con,"SELECT * FROM tbl_duration");
                        while($row=mysqli_fetch_array($query))
                        { ?>
                        <option value="<?php echo $row['duration'];?>"><?php echo $row['duration'];?></option>
                        <?php
                        }
                        ?>
				   
				     </select>
				   	</div>  
					
					
					 <div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> 
										<i class="fa fa-clock-o"></i>
											</span>
										</div>
										
										<select  id="ctrSubDropDownLong" name="shift" value="" class="form-control" required>
														<option value="">Select time</option>
<?php $query =mysqli_query($con,"SELECT * FROM tbl_shift");
                        while($row=mysqli_fetch_array($query))
                        { ?>
                        <option value="<?php echo $row['shift_type'];?>"><?php echo $row['shift_type'];?></option>
                        <?php
                        }
                        ?>
                        </select>
					
						</div>  
					
				   
				   
				   <div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> 
											<i class="fa fa-phone"></i>
											</span>
										</div>
										
										
										
										
										 <input type='number' required class="form-control" placeholder="Enter guardian number" id="phno" value="" name="gudnum" onblur="validate2()"required> 
										
									</div> 
				   
				   
				     <div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> 
											
<i class="fa fa-calendar"></i>
											</span>
										</div>
										
										
										
										
										 <input type='number' required class="form-control" placeholder="Dance experience year" id="num" value="" name="expyr" onblur="validnumber()"required> 
										
									</div> 
									
									
									
									
									
									
									
				   <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-certificate"></i></span>
            </div>

            <input class="form-control" type="file" name="sfile" id="file1" placeholder="Upload your id Proof" onchange="valproof()" required/>

            </div>
				 
				   
				   
				   
				   
                 
									<div class="text-center mt-4"><center>
										<input type="submit" id="bt" value="save" name="Submit" class="btn btn-secondary">
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
   
   
  function validnumber()
   {
    var name=document.getElementById("num").value;
	var letters =/^[0-9 ]*$/;
	if(!name.match(letters))
	{
	 alert("Please enter your number correctly");
	 document.getElementById("num").value="";
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

function valproof()
      {
      var proof = document.getElementById("file1").value;
      var pat=/^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.pdf)$/;
      if(!proof.match(pat))
      {
      alert("Enter Valid File Type Eg: .jpg/.jpeg/.pdf");
      document.getElementById("file1").value="";
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
