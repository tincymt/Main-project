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
<title>Home</title>
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
		<div class="navbar-header"> <img src="images/p51.jpg">
        
			<a class="navbar-brand" href="index.php"></a>
		</div>
		
			<ul class="nav navbar-right">
 
           <li id="dropdown-user">

                        <a href="#" data-toggle="dropdown" class="-toggle text-center" aria-expanded="false">
                          
                             <br><img class="img-circle img-user media-object" src="images/i1.jpg" height="30" width="30">
                                                         
                           <div class="navigation ">
						   		 <div style=' clear: both; font-size:18px;position: relative;'>
                            <div class="username hidden-xs">HELLO 
							<?php
	                               echo strtoupper ($temp);
	                                ?></div>
                        </a> 
						
	
       
    
      
	  
        

		
		 
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		  <p style="font-size:18px">
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myModal" >&nbsp &nbsp;<i class="fas fa-user-circle"></i> <a href="profile.php">Profile</a><br>
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myTodal">&nbsp &nbsp;<i class="fa fa-lock"></i> <a href="chgpassusr.php">Change Password</a><br>
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
               <li class="current"><a href="index.php">Home</a></li>
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
<section class="slider_wrapper">
  <div class="container_12">
    <div class="grid_12">
	<!--img src="images/p28.jpg" alt=""-->
	
	
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="Images/p28.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="Images/p10.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="Images/p11.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>


</div>
		 
		</div>
    <div class="clear"></div>
  </div>
</section>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - October 06, 2014!</div>
  <div class="container_12">
    <div class="grid_12">
      <img src="images/p100.jpg" alt="" class="fleft">
      <h2>Indian Dance </h2>
      <p style="text-align:justify">Find more about this Dance is a physical and visual art form, which has an immediate and massive impact on the spectator. The various Indian forms act like 
a window to India's rich cultural reservoir. Dance is the form of art, wherein the body is used as a medium of communication. Indian 
dances have played an influential role in many other realms of art including poetry, sculpture, architecture, literature, music and theatre. 
The earliest archaeological evidence of Indian dance, which dates back to 6000 BC, depicts a beautiful statuette of a dancing girl. 
Bharata's Natya Shastra (which was written between the 2nd century B.C. and 2nd century A.D) is the earliest available thesis on 
dramaturgy. All forms of Indian classical dances owe allegiance to Natya Shastra, which is believed to be the 'fifth Veda' of the Indian 
culture. According to a popular belief, Brahma, the Creator of the World, combined literature from the Rig Veda, songs from the Sama 
Veda, abhinaya (expression) from the Yajur Veda and rasa (aesthetic experience) from the Atharva Veda, to form natya (what we today 
call dance). It explains the nuances of dance, giving stress on mudras (hand formations) and their meanings, the kind of emotions and
 their categorization.</p>
     
    </div>
    <div class="grid_3">
      <div class="banner">
        <div class="maxheight">
       <h4>News &amp; <br> Events</h4>
          <a href="#" class="link-1">more</a>
        </div>
      </div>
    </div>
    <div class="grid_3">
      <div class="banner">
        <div class="maxheight">
		
		<div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="images/p41.jpg" alt="#"></a>
                                 </div>    
                       
       <h4>Master <br> Classes</h4>
          <a href="booking.php" class="link-1">more</a>
        </div>
      </div>
    </div>
    <div class="grid_3">
      <div class="banner">
        <div class="maxheight">
               <h4>Popular <br> Music</h4>
          <a href="#" class="link-1">more</a>
        </div>
      </div>
    </div>
    <div class="grid_3">
      <div class="banner">
        <div class="maxheight">
          <h4>Useful <br> Tips</h4>
          <a href="#" class="link-1">more</a>
        </div>
      </div>
    </div>
    <div class="grid_6">
      <h3>Recent Publications</h3>
      <div class="grid_3 alpha">
        <div class="block-1">
          <h4 class="color1"><a href="contacts.php">How to Join</a></h4>
        We would like to welcome everyone to enjoy what they love most about dancing.

          <br>
          <a href="contacts.php" class="link-1">more</a>
        </div>
      </div>
      <div class="grid_3 omega">
        <div class="block-1">
          <h4 class="color1"><a href="classes.html">Our Styles</a></h4>
         As one of the most popular dance centers in California, we are sure that taking part in our classes will allow you to explore the world of dancing and learn the moves and dances you have hardly heard before.
          <br>
          <a href="classes.html" class="link-1">more</a>
        </div>
      </div>
      <div class="grid_3 alpha">
        <div class="block-1">
          <h4 class="color1"><a href="schedule.php">Schedule</a></h4>
          Dance is a performing art form consisting of purposefully selected sequences of human movement.
          <br>
          <a href="schedule.php" class="link-1">more</a>
        </div>
      </div>
      <div class="grid_3 omega">
        <div class="block-1">
          <h4 class="color1"><a href="usage.php">Flexibility &amp; Strength</a></h4>
         What you’ll get with Rhythm Dance Academy.
          <br>
          <a href="usage.php" class="link-1">more</a>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="grid_5 prefix_1 gallery">
      <a href="images/big1.jpg" class="gall_item">
        <img src="images/p24.jpg" alt="">
        <div class="gall_bot">
          <div class="fa fa-camera"></div>
        </div>
      </a>
    </div>
    <div class="clear"></div>
  </div>
</section>
<div class="footer-top"> 
  <div class="container_12">
	  <div class="sep-1"></div>
	  <div class="grid_4">
	 <div style=' clear: both; font-family:georgian;font-size:17px;position: relative;'>
      <address class="address-1"> 
	  <div class="fa fa-home"></div>PO BOX Collins Street West <br> Palkulangara,<br> Thiruvananthapuram - 695 024 <br>Phone: +91 80781 59256<br>
	  Mobile: +91 93877 39013<br>rhythm@gmai.com</address>
    </div>
	</div>  
	
	<div class="footer-box span_1_of_4 col col-2">
	 <h6 style="font-family:georgian;font-size:17px;">  <address class="address-1"><b>open Hours</b><br>Saturday 10am-6pm<br>
Sunday 11am-6pm</address>
	 </h6>
	 </div>

 <div class="grid_4 fright">
      <div class="socials">
        <a href="#">facebook</a>
        <a href="#">twitter</a>
        <a href="#">google+</a>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
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