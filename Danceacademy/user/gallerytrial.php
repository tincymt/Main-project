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
<title>Gallery</title>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
 h4 {
    font-size: 24px;
    text-transform: uppercase;
    color:black;
 
    
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
    font-size: 22px;
   text-align:justify;
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
		<div class="navbar-header"> <img src="images/p777.jpg">
        
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
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#myModal" >&nbsp &nbsp<i class="fas fa-user-circle"></i> <a href="viewprofile.php">Profile</a><br>
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
 </div></div>
  </section>
</header>
<!--=====================
          Content
======================-->
 <div class="container">
<section id="iq-classes" class="iq-blog overview-block-pb">

 <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <div class="heading-title text-center">
                        <h2><div class="panel-heading"><center>Gallery</center></div></h2>
                      <!--  <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p> -->
                     </div>
                  </div>
               </div>   </div>
			  
<?php
$con=mysqli_connect("localhost","root","","dancedb") or die("COULDN'T CONNECT");
$sql="select file from tbl_gallery";
$res=mysqli_query($con,$sql);  
	while($y=mysqli_fetch_array($res))                      
{
?>
<div class="container">
  <div class="row">
      <div class="col-md-4">
	    <div class="thumbnail">
		
      <img
         src="../admin/dashboard/upload/<?php echo $y['file'] ?>"
        
       
        
      />
     
    </div>
  </div>

  <?php
}
?>
	 
              
              </div>  </div>  </div>



								
			  </div>  			</section>			
								
                         
 
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

 

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
    function validate2()
{
var phone = document.getElementById("phno").value;
var phn=/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
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
</html>
<?php
}
else {
header("location:index.php");
}
 ?>
