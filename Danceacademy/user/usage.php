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
<title>contacts</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
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
<body class="" id="top">
<div class="main">
 <div class="container_12">
<div class="container-fluid">
	<div class="container p-3 my-3 border">
	
        <div class="grid_12">
		<div class="navbar-header"> <img src="images/p51.jpg">
        
			<a class="navbar-brand" href="index.php"></a>
		</div>
		
			<ul class="nav navbar-right">
 
           <li id="dropdown-user" class="dropdown">

                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right" aria-expanded="false">
                          
                             <br><img class="img-circle img-user media-object" src="images/i1.jpg" height="30" width="30">
                                                         
                           <div class="navigation ">
                            <div class="username hidden-xs">HELLO 
							<?php
	                               echo strtoupper ($temp);
	                                ?></div>
                        </a> 
					
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default" style="">
                               
							
                            <ul class="head-list" >
							
                                <li>
								<div class="pad-all text-center">
                                    <a href="Profile.php"><p style="font-size:18px">
                               PROFILE</p>
                                    </a></div>
									</li> 
									
                               
                            </ul>
                          
                           <div class="pad-all text-center">
                           <a href="logout.php" class="btn btn-purple">
                           <p style="font-size:18px"> LOGOUT</p>
                                </a></p>
                            </div>   
                        </div>
                    </li>
					
					
					
				</ul>
    </div>
    <div class="clear"></div>
  </div>
		
		
  

   
		
		    </div>
    <div class="clear"></div>
  </div>
		
   </div>
   </div>
<div class="main">

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
               <li ><a href="staff.php">Instructors</a></li>
               <li class="current"><a href="contacts.php">Contacts</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
    </div>
  </section>
</header>

<!--=====================
          Content
======================-->
<section id="content">
<div style=' clear: both; font-family:georgian;font-size:17px;position: relative;'>
<div class="ic">More Website Templates @ TemplateMonster.com - October 06, 2014!</div>
  <div class="container_12">
   
      <img src="images/p21.jpg" alt="" class="fleft"><div class="navigation ">
            <nav>
              <ul class="sf-menu">
      <h2 class="inset__1"><p style="color:purple;">BENEFITS OF BEING A DANCER</h2>
      <p class="color1"><a href="#"> </a></p></ul></div>
      <div class="cmsmasters_column one_half">


</div> 

 <div>
   <a href="#" class="mail-1"><span class="fa fa-heart"></span>  Healthy Body &amp; Mind</a><div><p>Cum sociis natoque penatibus et magnis dis parturient ntesmus. Proin vel nibh et elit mollis commodo parturient montesmus.</p>
   
 <a href="#" class="mail-1"><span class="fa fa-music"></span>Great Music & Costumes</a><div><p>Cum sociis natoque penatibus et magnis dis parturient ntesmus. Proin vel nibh et elit mollis commodo parturient montesmus.</p>
 
  <a href="#" class="mail-1"><span class="fa fa-user"></span>Creative &amp; Fun People</a><div><p>Cum sociis natoque penatibus et magnis dis parturient ntesmus. Proin vel nibh et elit mollis commodo parturient montesmus.</p>
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
<!--==============================
              footer_top
=================================-->
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
<!--====
<!--==============================
              footer
=================================-->
</div>

</body>
</html>
<?php
}
else
{
header("location:login.php");
}
?>