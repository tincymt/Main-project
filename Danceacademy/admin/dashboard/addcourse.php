<?php
include("dbconnection.php");

$course_name=$_POST["dname"];
$fee=$_POST["fees"];
$date=$_POST["doc"];

$status=1;

$r="select * from tbl_course where course_name='$course_name'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("course already exists");
location.href="course.php";
 exit;
</script>
<?php
}
else
{
$sql="insert into tbl_course(course_name,fee,date,status) values ('$course_name','$fee','$date','$status')";

if(mysqli_query($con,$sql))
{
  ?>
   <script>alert("Successfully inserted");
   location.href="viewdancestyle.php";
   </script>
   <?php
}
}
mysqli_close($con);
?>