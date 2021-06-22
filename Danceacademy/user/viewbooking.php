<?php
include("dbconnection.php");

session_start();
if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];
	?>
	<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
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
<section id="content">
<div class="container-fluid">
						<div class="d-sm-flex align-items-center justify-content-between mb-4">
							
						</div>
                        <div class="card mb-4">
                            <div class="card-body">
															<div class="table-responsive">

                              <form action="addadmstu.php" method="POST">
                            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php
                               $query = "select * from tbl_studentbooking";
                               $results = mysqli_query($con,$query);
                             	echo "<h2><center>Student Details</center></h2>";
                               echo "<tr><th>Sl No</th><th>date of Admission</th><th>Phone Numer</th><th>Dance Type </th><th>Experience</th><th></th></tr>";
                               while($fin=mysqli_fetch_array($results))
                               {
                               echo "<tr>";
                               echo "<td>".$fin['studbk_id']."</td><td>"
															         
                               		   .$fin['date_of_adm']."</td><td>"
                                      .$fin['emer_num']."</td><td>"
                                   .$fin['dname']."</td><td>"
									.$fin['year_of_exp']."</td><td>";

																		
                             	
                             echo "</tr>";
                               }
                                ?>

                          </table>
                          </form>
                            </div>
                        </div>
                        <div style="height: 100vh;"></div>
                        <div class="card mb-4"><div class="card-body"></div></div>
                    </div>
                </main>
</section>
<!--==============================
              footer_top
=================================-->
<div class="footer-top">
  <div class="container_12">
    <div class="grid_12">
      <div class="sep-1"></div>
    </div>
    <div class="grid_4">
      <address class="address-1"> <div class="fa fa-home"></div>'Midhila', Samadhi Lane,, <br>
     Palkulangara, Thiruvananthapuram - 695 024 <br></address>
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
      <div class="sub-copy">MOVE &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
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