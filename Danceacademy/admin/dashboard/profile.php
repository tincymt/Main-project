
<?php
session_start();
if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DANCE ACADEMY - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RHYTHM </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
		<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
						<i class="fas fa-fw fa-user"></i>
						<span>Classes</span>
					</a>
						<div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
							<div class="bg-white py-2 collapse-inner rounded">
								<h6 class="collapse-header">Class Details:</h6>
									<a class="collapse-item" href="course.php">Add Courses</a>
										<a class="collapse-item" href="manage_classes.php">Manage Course</a>
										<a class="collapse-item" href="shift.php">Add shift</a>
										<a class="collapse-item" href="duration.php">Add duration</a>
									
								
									
									
							</div>
						</div>
				</li>

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Utilities Collapse Menu -->
           
<li class="nav-item">
					<a class="nav-link collapsed"  data-toggle="collapse"   href="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1"> 
						<i class="fas fa-fw fa-book"></i>
							<span>Student</span>
					</a>
						<div class="row">
							<div class="col">
								<div class="collapse multi-collapse" id="multiCollapseExample1">
									<div class="card card-body">
										<div class="bg-white py-2 collapse-inner rounded">
											<h6 class="collapse-header">student Details:</h6>
												<a class="collapse-item" href="approvestu.php">Approve Student</a>
												
												
											
										</div>
									</div>
								</div>
							</div>
						</div>		
				</li>
				<li class="nav-item">
						<a class="nav-link collapsed"  data-toggle="collapse"   href="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
							<i class="fas fa-fw fa-user"></i>
							<span>Teachers</span>
						</a>
					<div class="row">
						<div class="col">
							<div class="collapse multi-collapse" id="multiCollapseExample2">
								<div class="card card-body">
									<div class="bg-white py-2 collapse-inner rounded">
										<h6 class="collapse-header">Teacher Details:</h6>
											<a class="collapse-item" href="teachersadm.php">Add Teachers</a>
											<a class="collapse-item" href="assign_teachers_adm.php">Assign Teachers</a>
											<a class="collapse-item" href="manage_teach.php">Manage Teachers</a>
											<a class="collapse-item" href="qualification.php">Add Qualification</a>
											<a class="collapse-item" href="manage_qual.php">Manage Qualification</a>
											
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-skating"></i>
						<span>Dance Booking</span>
					</a>
					<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<h6 class="collapse-header">Dancetypes::</h6>
								<a class="collapse-item" href="dancestyle.php">Add Course</a>
							
								<a class="collapse-item" href="batch.php">Add Batch</a>
								
								
								<a class="collapse-item" href="approvebook.php">approve booking</a>
						</div>
					</div>
				</li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>
<li class="nav-item">
					<a class="nav-link" href="payment.php">
						  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						  <span>Payement</span>
					</a>
				</li>
            <!-- Nav Item - Charts -->
          



            <!-- Nav Item - Tables -->
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

      
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         
            

        </ul>
        

      
        <div id="content-wrapper" class="d-flex flex-column">

           
            <div id="content">

           
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

               
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                  

                   

<ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                         
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><img class="img-profile rounded-circle" src="s3.png">
										<?php
											echo $temp;
										?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                  
									 <a  href="logout.php" class="dropdown-item">&nbsp &nbsp  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i></i>Logout</a>
                             
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="container">

        
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
					 <form action="add_profile_admin.php" method="POST">
                            <table class="table table-bordered" id="dataTable">
                      <i class="fas fa-user white-text"></i> change password:</h3>
                    <hr class="hr-light">
                  </div>
				   <div class="loginbox">
				    <form action="add_profile_admin.php" method="POST" enctype="multipart/form-data">
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
    <input type="password" class="form-control" name="new" id="pawd" placeholder="New Password" onchange="validpaswd()" autofocus="autofocus" required>
    <br><label for="exampleInputEmail1">Confirm Password</label>
    	<input type="password" name="cnew" class="form-control" id="cpawd" placeholder="Confirm New Password" onchange="validcpass()" autofocus="autofocus" required>


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
	
   </script>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
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
		
 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

  <script src="app.js"></script>
  <script>
     history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    </script>

</html>
<?php
}
else
{
header("location:../../login.php");
}
?>
