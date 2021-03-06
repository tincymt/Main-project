<?php
session_start();
include("DbConne.php");
if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];

?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       <meta name="description" content="" />
       <meta name="author" content="" />
       <title>Customer</title>
       <link href="css/styles.css" rel="stylesheet" />
       <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
<style>
table, th, td {

text-align:center;

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
                           <div class="sb-sidenav-menu-heading">Core</div>
                           <a class="nav-link" href="index.php">
                               <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Dashboard
                           </a>
<div class="sb-sidenav-menu-heading">Activities</div>
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                               <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Project
                               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                           </a>
                           <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                               <nav class="sb-sidenav-menu-nested nav">
                                   <a class="nav-link" href="viewproj.php">View Project</a>

                               </nav>
                           </div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                               <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                               Daily Progress Report
                               <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                           </a>
                           <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                               <nav class="sb-sidenav-menu-nested nav">
                                   <a class="nav-link" href="viewreport.php">View Report</a>

                               </nav>
                           </div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
<div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
Complaints
<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
<nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="viewcomp.php">View Complaints</a>

</nav>
</div>



               </nav>
           </div>
           <div id="layoutSidenav_content">
               <main>
                   <div class="container-fluid">
                       <h1 class="mt-4">Daily Progress Report</h1>
                       <ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item"><a href="btwrep.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Daily Report</li>
                       </ol>
              <div class="graph-visual tables-main" id="exampl">
<div class="card mb-4">
<div class="card-body">
<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php
include("DbConne.php");
$query = "select l.login_id,h.cust_id from tbl_login l,tbl_customer_reg h  where l.username='$temp' and l.login_id=h.login_id";
$results = mysqli_query($con,$query);
$x=mysqli_fetch_array($results);
$d=$x['cust_id'];

$sql="select * from tbl_project where cust_id='$d'";
$res1 = mysqli_query($con,$sql);
if(mysqli_num_rows($res1)>0)
{
$row=mysqli_fetch_array($res1);
echo "<h5><center>Contractor Details</center></h5>";
echo "<tr><th>Contractor Name</th><th>Phone No</th><th>Email Address</th><th>Company Name</th></tr>";
$contractor_id=$row['contractor_id'];
$sql="select * from tbl_contractor_reg where contractor_id='$contractor_id'";
$res1 = mysqli_query($con,$sql);
$v=mysqli_fetch_array($res1);
echo "<tr>";
echo "<td>".$v['contractor_name']."</td><td>"
.$v['phone_no']."</td><td>"
.$v['email_id']."</td><td>"
.$v['companyName']."</td>";
echo "</tr>";
?>
</table>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php
include("DbConne.php");
if(isset($_REQUEST['x']))
{
$u=intval($_GET['x']);

$sql="select a.login_id,b.login_id from tbl_login a,tbl_daily_progress_report b where
a.login_id=b.login_id and a.username='$temp'";
$query1=mysqli_query($con,$sql);
if(mysqli_num_rows($query1)>0)
{
$result=mysqli_fetch_array($query1);
$h=$result['login_id'];

$query = "select h.login_id,l.report_id,l.title,l.description from tbl_daily_progress_report l,tbl_customer_reg h
where  l.login_id=h.login_id and l.login_id='$h' and l.report_id='$u'";
$results = mysqli_query($con,$query);
echo "<h5><center>Report Details</h5>";
echo "<tr><th>Title</th><th>Work Details</th></tr>";
while($v=mysqli_fetch_array($results))
              {
echo "<tr>";
echo "<td>".$v['title']."</td><td>"
.$v['description']."</td>";
echo "</tr>";
}}}}
?>
</table>
<p style="margin-top:1%"  align="center">
 <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>

</div></div>
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
<script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php
}
else
{
header("location: ../login.php");
}
?>