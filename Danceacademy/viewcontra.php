<?php
session_start();
include("DbConne.php");
if(!empty($_SESSION['uname']))
{
	$temp=$_SESSION['uname'];
	if(isset($_REQUEST['x']))
	{
		$a=intval($_GET['x']);
		$sql="update tbl_contractor_reg set status='1' where login_id='$a'";
		$sqli="update tbl_login set status='1' where login_id='$a'";
		mysqli_query($con,$sql);
		mysqli_query($con,$sqli);
	}
	if(isset($_REQUEST['y']))
	{
		$a=intval($_GET['y']);
		$sql="update tbl_contractor_reg set status='0' where login_id='$a'";
		$sqli="update tbl_login set status='0' where login_id='$a'";
		mysqli_query($con,$sql);
		mysqli_query($con,$sqli);
	}
	?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
				<style>
				            table, th, td {

				                text-align:center;
                        background-color: lightgreen;
min-width: 150px;
				            }


				        </style>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">BuildTech Construction</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">

                    <div class="input-group-append">

                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
							<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
									 echo $temp;
									 ?></a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
											<a class="dropdown-item" href="custmreg.php">Edit Profile</a>
											<a class="dropdown-item" href="logout.php">Logout</a>
									</div>
							</li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Activities</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                User Details
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="viewcust.php">Customer</a>
                                     <a class="nav-link" href="viewcontra.php">Contractor</a>
																		 <a class="nav-link" href="viewlab.php">Labour</a>
                                </nav>
                            </div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addcat.php">Add Category</a>
                                      <a class="nav-link" href="viewcat.php">View Category</a>


                                </nav>
                            </div>
														<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
																<div class="sb-nav-link-icon"><i class=" fa fa-map-marker"></i></div>
																State/District/Post Office
															<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
															<div class="collapse" id="collapsePages" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
																	<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
																			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
																		State
																					<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
																			</a>
																			<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
																					<nav class="sb-sidenav-menu-nested nav">
																							<a class="nav-link" href="addstate.php">Add State</a>
																							<a class="nav-link" href="viewstate.php">View State</a>

																					</nav>
																			</div>
																			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
																					District
																					<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
																			</a>
																			<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
																					<nav class="sb-sidenav-menu-nested nav">
																							<a class="nav-link" href="adddist.php">Add District</a>
																							<a class="nav-link" href="viewdist.php">View District</a>

																					</nav>
																			</div>
																			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
																				Post Office
																					<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
																			</a>
																			<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
																					<nav class="sb-sidenav-menu-nested nav">
																							<a class="nav-link" href="addpost.php">Add Post Office</a>
																							<a class="nav-link" href="viewpost.php">View Post Office</a>

																					</nav>
																			</div>
																			</nav>
																			</div>


																			<div class="sb-sidenav-menu-heading">Main</div>
					                            <a class="nav-link" href="#charts.html">
					                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
					                                Projects
					                            </a>
					                            <a class="nav-link" href="#tables.html">
					                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
					                              Payments
					                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        BuildTech Construction
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Contractor Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contractor</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
															<div class="table-responsive">

                              <form action="Addreg2.php" method="POST">
                            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php
                               $query = "select * from tbl_contractor_reg";
                               $results = mysqli_query($con,$query);
                             	echo "<h2><center>Contractor Details</center></h2>";
                               echo "<tr><th>Sl No</th><th>Contractor Name</th><th>Email Id</th><th>Phone No</th><th>License No</th><th>License Proof</th><th>Company Name</th><th>District Name</th><th>State Name</th><th>Status</th></tr>";
                               while($fin=mysqli_fetch_array($results))
                               {
                               echo "<tr>";
                               echo "<td>".$fin['contractor_id']."</td><td>"
															         .$fin['contractor_name']."</td><td>"
                               		   .$fin['email_id']."</td><td>"
                                      .$fin['phone_no']."</td><td>"
                                    .$fin['licenseNo']."</td><td>";

																		echo "<a href='viewproof.php?x=" .$fin['login_id']." ' target='_blank'>proof details</a></td><td>"
                                 .$fin['companyName']."</td><td>"
																    .$fin['dist_name']."</td><td>"
                                .$fin['state_name']."</td><td>";
                             	 if($fin['status'] == 0 || $fin['status'] =='')
                             	 {

                             		 echo "<a href='viewcontra.php?x=" .$fin['login_id']." '>deactivated</a>";
                             		 }
                             		 else
                             		 	{
                             				echo "<a href='viewcontra.php?y=" .$fin['login_id']." '>activated</a>
                             				</td>";
                             			}
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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"></div>
                            <div>
                                <a href="#"></a>
                                &middot;
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
}
else
{
	header("location: ../../login.php");
}
?>
