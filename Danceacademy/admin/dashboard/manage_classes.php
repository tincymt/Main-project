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

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <script>
        function getdistrict(val) {
        $.ajax({
        type: "POST",
        url: "get_district.php",
        data:'state_id='+val,
        success: function(data){
          $("#district-list").html(data);
        }
        });
        }

        </script>


  <title>Student - details</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
           

       </style>
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
									
											<a class="collapse-item" href="qualification.php">Add Qualification</a>
										
											
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
                                <a class="dropdown-item" href="#">
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
        <div class="container-fluid">

          <!-- Page Heading -->
         
         

           <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
							 <form action="#" method="POST">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"  border="1" style="font-family:Georgia, Garamond, Serif;color:navy;">


								
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Course Name</th>
											   <th>Fee</th>
                                              <th>date of creation</th>
											     <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
				$con=mysqli_connect("localhost","root","","dancedb") or die("COULDN'T CONNECT");
                   

                            echo "<h2><center>Update classes</center></h2>";
                           

$r="select * from tbl_course";
$result=mysqli_query($con,$r);
$n=mysqli_num_rows($result);

while($a=mysqli_fetch_array($result))
{

                                echo "<tr>";
                            echo "<td>".$a['course_id']."</td><td>"
									.$a['course_name']."</td><td>"
									.$a['fee']."</td><td>"
									.$a['date']."</td><td>";
									echo '<a href="#" class="btn btn-sm btn-primary" data-toggle="modal"
data-target="#UpdateLocation'.$a['course_id'].'">edit</a></td>';
                                   
								   
                              

                          echo "</tr>";
}
                             ?>
                  </tbody>
                </table>
                                    <tbody>
									

								

            </div>
           
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                   
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


        </div>
        <!-- /.container-fluid -->

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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

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
