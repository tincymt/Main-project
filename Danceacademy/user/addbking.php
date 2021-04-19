<?php
 session_start();
include("dbconnection.php");






$date_of_adm=$_POST['doa'];
$course_name=$_POST['course'];
$duration=$_POST['duration'];
$shift_type=$_POST['shift'];
$gurad_num=$_POST['gudnum'];
$dance_exp=$_POST['expyr'];
$dance_exp=$_POST['expyr'];

$status=0;
$file=$_FILES['sfile']['name']; 
$fileloc = "upload/".$file;

move_uploaded_file($_FILES["sfile"]["tmp_name"],$fileloc);
if($file=='jpg' || $file=='jpeg' || $file=='pdf')
{
echo "File is image <br/>";
echo "File type = " . $file;

}
$v=$_SESSION['username'];
$r="select login_id from tbl_login where username='$v'";
$result=mysqli_query($con,$r);
while($results=mysqli_fetch_array($result))
{
	$c=$results['login_id'];
}

$sq="insert into tbl_studentbooking(login_id,date_of_adm,course_name,duration,shift_type,gurad_num,dance_exp,file,status) 
values ('$c','$date_of_adm','$course_name','$duration','$shift_type','$gurad_num','$dance_exp','$file','$status')";

if(mysqli_query($con,$sq))
{
	?>
	<script>alert("you have successfully saved your details");
     location.href="booking.php";
	 exit;
  </script>
  <?php
}

mysqli_close($con);
?>