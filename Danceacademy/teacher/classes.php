
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
<title>classes</title>
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
<style>
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
 

  h7 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
 
 
  </style>

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
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myModal" >&nbsp &nbsp<i class="fas fa-user-circle"></i> <a href="profile.php">Profile</a><br>
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myTodal">&nbsp &nbsp<i class="fa fa-lock"></i> <a href="chgpassusr.php">Change Password</a><br>
              <a  href="logout.php" class="dropdown-item">&nbsp &nbsp<i class="fas fa-sign-out-alt"></i>Logout</a></p>
          </div> </div></div>
      </li></ul>
        </div></div></div></div></div>
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
              <li class="current"><a href="classes.php">Our Classes</a></li>
               <li ><a href="staff.php">Instructors</a></li>
               <li><a href="contacts.php">Contacts</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
          </div>
         <div class="clear"></div>
     </div>
     <div class="clear"></div>
    </div>
  </section>
<!--=====================
          Content
======================-->



<section id="iq-classes" class="iq-blog overview-block-pb">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <div class="heading-title text-center">
                        <h2 class="title iq-tw-6">Our Classes</h2>
                      <!--  <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p> -->
                     </div>
                  </div>
               </div>
               <div class="row">
			    <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="Images/p28.jpg" alt="Bharathanatyam.php"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center><div class="panel-heading">BHARATHANATYAM </div></center></h5>
                         </a>
							
                           </div>
                           <div class="iq-entry-content">  <center>
							   <h6 style="color:black;font-size:40px;">$19</h6>
								<a href="booking.php"><input type="submit" id="bt" value="Apply Now" class="btn btn-success"></a></center><br><br>
							  
							  
                           </div>
                         
                        </div>
                     </div> </div>  </div>
                   
			    <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="Images/p13.jpg" alt="#"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center><div class="panel-heading">MOHINIYAATTAM  </div></center></h5>
                              </a>
                           </div>
                           <div class="iq-entry-content"><center>
                              <h6 style="color:black;font-size:40px;">$15</h6></center>
							  <center>	<a href="booking.php"><input type="submit" id="bt" value="Apply Now" class="btn btn-success"></a></center><br><br>
							  
							  
                           </div>
                         
                        </div>
                     </div> </div>  </div> 
					 
					  
			    <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="Images/p14.jpg" alt="#"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center><div class="panel-heading">KUCHUPUDI  </div></center></h5>
                              </a>
                           </div><center>
                          <h6 style="color:black;font-size:40px;">$10</h6></center>
							  <center>	<a href="booking.php"><input type="submit" id="bt" value="Apply Now" class="btn btn-success"></a></center><br><br>
							  
							  
                           </div>
                         
                        </div>
                     </div> </div>  </div> 
				
					   <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="Images/p39.jpg" alt="#"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center><div class="panel-heading">KATHAK</div></center></h5>
                              </a>
                           </div><center>
                          <h6 style="color:black;font-size:40px;">$20</h6></center>
							  <center>	<a href="booking.php"><input type="submit" id="bt" value="Apply Now" class="btn btn-success"></a></center><br><br>
							  
							  
                           </div>
                         
                        </div>
                     </div> </div> 
					 <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="Images/p37.jpg" alt="#"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php" >
                                 <h5 class="iq-tw-6"><center> <div class="panel-heading">HIP HOP</div></center></h5>
                              </a>
                           </div><center>
                          <h6 style="color:black;font-size:40px;">$11</h6><center>
							  <center>	<a href="booking.php"><input type="submit" id="bt" value="Apply Now" class="btn btn-success"></a></center><br><br>
							  <BR>
							  
                           </div>
                         
                        </div>
                     </div> </div>
					 
					  <div class="col-md-4">
			    <div class="thumbnail">
       
                     <div class="iq-blog-entry white-bg">
                        <div class="iq-entry-image clearfix">
                           <a href="booking.php">   <img class="img-fluid" src="Images/p40.jpg" alt="Bharathanatyam.php"></a>
                           
                        </div>
                        <div class="iq-blog-detail">
                           <div class="iq-entry-title iq-mb-10">
                              <a href="booking.php">
                                 <h5 class="iq-tw-6"><center>
								 <div class="panel-heading">WESTERN DANCE  </div></h5>
                              </a>
                           </div>
                           <div class="iq-entry-content"><center>
							   <h6 style="color:black;font-size:40px;">$5</h6></center>
							  <center>	<a href="booking.php"><input type="submit" id="bt" value="Apply Now" class="btn btn-success"></a></center><br><br>
							  
							  
                           </div>
                         
                        </div>
                     </div> </div>  </div> 
					
					 
				  </div>  </div> 
		




















 
        
      </table>
    </div>
   
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