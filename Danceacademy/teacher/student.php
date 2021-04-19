<?php
session_start();
if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Staff</title>
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

 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css1/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor1/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
<!--==============================
              header
=================================-->
 <div class="container_12">
  <div class="container p-3 my-3 border">
    <div class="grid_12">
       <a href="index.php"><img src="images/r2.png">
    
      
		<ul class="nav navbar-right">
 
           <li id="dropdown-user" class="dropdown">

                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right" aria-expanded="false">
                          
                             <img class="img-circle img-user media-object" src="images/i1.jpg" height="30" width="30">
                                                         
                           
                            <div class="username hidden-xs"><p style="color:purple;">HELLO 
							<?php
	                               echo strtoupper ($temp);
	                                ?></p></div>
                        </a> 
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default" style="">
                               
								
                            <ul class="head-list" >
							
                                <li>
								<div class="pad-all text-center">
                                    <a href="Profile.php">
                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>PROFILE
                                    </a></div>
									</li> 
									
                               
                            </ul>
                          
                           <div class="pad-all text-center">
                           <a href="logout.php" class="btn btn-purple">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> LOGOUT
                                </a>
                            </div>
                        </div>
                    </li>
					
					
					
				</ul>
    </div>
    <div class="clear"></div>
  </div>
  <div class="navbar-header"><img src="images/l1.png">
			<a class="navbar-brand" href="home.html"></a>
		</div>
	</li>
	<form class="navbar-form navbar-center" action="/action_page.php">
		<span>LET'S DANCE</span>
 
  </form>
  
   
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
               <li class="current"><a href="about.php">About</a></li>
              <li><a href="classes.php">Classes</a></li>
               <li><a href="staff.php">Staff</a></li>
			   <li><a href="student.php">Student</a></li>
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

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  border="1" style="font-family:Georgia, Garamond, Serif;color:navy;">


								
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>address</th>
											   <th>contactno</th>
                                              
                                        </tr>
                                    </thead>
                                    <?php
				$con=mysqli_connect("localhost","root","","dancedb") or die("COULDN'T CONNECT");
                   

                            echo "<h2><center>Student List</center></h2>";
                           
$n="select course from tbl_booking
$r="select * from tbl_studreg where ";
$result=mysqli_query($con,$r);
$n=mysqli_num_rows($result);

while($a=mysqli_fetch_array($result))
{

                                echo "<tr>";
                            echo "<td>".$a['name']."</td><td>"
									.$a['address']."</td><td>"
									.$a['contactno']."</td>";
									echo '';
                                   
								   
                              

                          echo "</tr>";
}
                             ?>
                  </tbody>
                </table>

<!--==============================
              footer_top
=================================-->
<div class="footer-top">
  <div class="container_12">
    <div class="grid_12">
      <div class="sep-1"></div>
    </div>
    <div class="grid_4">
      <address class="address-1"> 
        <div class="fa fa-home"></div>'Midhila', Samadhi Lane,, <br>
     Palkulangara, Thiruvananthapuram - 695 024 <br>
	  </address>
    </div>
    <div class="grid_3">
      <a href="#" class="mail-1"><span class="fa fa-envelope"></span>rhythm@gmai.com</a>
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
      <div class="sub-copy">MOVE &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow"></a></div>
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