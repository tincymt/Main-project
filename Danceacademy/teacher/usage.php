<?php
session_start();
include("dbconnection.php");
if(!empty($_SESSION['username']))
{
$temp=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Usage</title>
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
    <style>
	 h4 {
    font-size: 24px;
    text-transform: uppercase;
    color:purple;
   font-color: purple;
    text-decoration: underline overline;
	font-weight: 900;
    margin-bottom: 30px;
  }
  
   h7 {
    font-size: 30px;
    text-transform: uppercase;
    color:purple;
    font-color: purple;
    background: url("Images/p44.jpg");
	font-weight: 900;
    margin-bottom: 30px;
  }

   P {
    font-size: 18px;
  
    color:black;
    font-weight: 300;
    margin-bottom: 30px;
  }
  
	  .container {
			margin-top: 40px;
		}
		.btn-primary {
			width: 100%;
		}
		
	.panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-head {
    color: #fff !important;
    background-color: #af9aae !important;
    padding: 20px;
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
   
</style>
  
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
               <li ><a href="index.php">Home</a></li>
               
             
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
    </div>
	</section>

	
	<section id="content">
<div style=' clear: both; font-family:georgian;font-size:17px;position: relative;'>

  <div class="container_12">
    <h2 style=" text-align: right"><div class="panel-heading">BENEFITS OF BEING A DANCER</div></h2>  
      <img src="../images/p16.jpg" alt="" class="fleft"><div class="navigation ">
            <nav>
              <ul class="sf-menu">
     <p class="color1"><a href="#"> </a></p></ul></div>
      <div class="cmsmasters_column one_half">


</div> 

 <div class="navigation ">
 <ul style="font-size:20px;color:black;text-align:justify;" class="a">
 <li><b>BOOST MEMORY</b>
 <p>Dance not only instills grace, but it also helps you age gracefully. According to a study in The New England Journal of Medicine, dancing may boost your memory and prevent you from developing dementia as you get older. </p>
 </li>
 <li><b>IMPROVE FLEXIBILITY</b>
 <p>Those plies and arabesques that ballet dancers practice aren???t just for aesthetics ??? they also increase flexibility and reduce stiffness. You can skip the ballet slippers and still 
 reap the benefits of ballet by practicing some simple stretches at home. </p>
 </li>
 <li><b>REDUCE STRESS</b>
 <p>If you???re feeling tense or stressed out, you might want to grab a partner, turn up the music, and tango! In a controlled study in the Journal of Applied Gerontology, researchers found that partner dance and musical accompaniment can help bring about stress relief. </p>
 </li>
  <li><b>DIMINISH DEPRESSION</b>
 <p>Dancing really does lift your spirits, according to a study in that tested the effects of dancing on people with depression. Patients who participated in an upbeat group dance showed the fewest depression symptoms and the most vitality.</p>
 </li>
  <li><b>HELP YOUR HEART</b>
 <p>Dance is a great activity for those at risk for cardiovascular disease. People with heart failure who took up waltzing improved their heart health, breathing, and quality of life significantly compared to those who biked or walked on a treadmill for exercise, noted an Italian study.</p>
 </li>
  <li><b>LOSE WEIGHT</b>
 <p>Bored with your bicycle? A study in the Journal of Physiological Anthropology found that an exercise program of aerobic dance training is just as helpful for losing weight and increasing aerobic power as cycling and jogging.</p>
 </li>
  <li><b>BALANCE BETTER</b>
 <p>If you are nervous about falling as you get older, some dance lessons might help ease your worries, according to a study in the Journal of Aging and Physical Activity that showed tango dancing can improve balance in aging adults.</p>
 </li>
</div>



</div>

</div>
</div>
</li></ul>
</div>

      <div class="clear"></div>
    </div>
   
   
    <div class="clear"></div>
  </div>
</section>
<div class="navigation ">		 
<div class="panel-head"><center><P style="font-size:25px;color:white;text-align:center">
"DANCING FACES YOU TOWARDS HEAVEN, WHICHEVER DIRECTION YOU TURN"</p></center></div>
 </div> 
      <div class="clear"></div>
	<br><br>

<div class="footer-top"> 
  <div class="container_12">
	  <div class="sep-1"></div>
	  <div class="grid_4">
	 <div style=' clear: both; font-family:georgian;font-size:17px;position: relative;'>
      <address class="address-1"> 
	  
	  <div class="fa fa-home"></div> <div class="navigation ">
	  <p >PO BOX Collins Street West <br> Palkulangara,<br> kochi- 695 024 <br>Phone: +91 80781 59256<br>
	  Mobile: +91 93877 39013<br>rhythm@gmai.com</address>
    </div>
	</div>  
		  <div class="nav navbar-right">
	<div class="footer-box span_1_of_4 col col-2">
	
	  <div style=' clear: both; font-family:georgian;font-size:17px;position: relative;'>

	  <div class="navigation ">
	 <address class="address-1"><b>Open Hours</b><br>Monday-friday 7am-6pm</address>
	
	 </div>
</div></div>

 
    <div class="clear"></div>
  </div>
</div></div></div>
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
else
{
header("location:login.php");
}
?>