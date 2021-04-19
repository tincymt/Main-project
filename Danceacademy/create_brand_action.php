<?php
session_start();
$mail=$_SESSION['alogin'];
$con=mysqli_connect("localhost","root","","db_RHYTHM_project")or die ("Couldn't connect");
$brand_name="hiiiii";


if(isset($_POST["create"]))
{	
$seller_type_id=$_POST["seller_type"];
$brand_name=$_POST["brand_name"];
$Profile_description=$_POST["about_brand"];

$achievements =$_POST["achievements"];
$status="VALID";
$rowcount=0;

$disp="SELECT * from tbl_seller_profile_brand WHERE brand_name='$brand_name'  ";

$result_disp=mysqli_query($con,$disp);
$rowcount = mysqli_num_rows($result_disp);
$disp_brnd="SELECT * from tbl_seller_profile_brand WHERE register_email='$mail' AND status='VALID'";

$brand_disp=mysqli_query($con,$disp_brnd);
$count_brand = mysqli_num_rows($brand_disp); 

if($count_brand >=2)

	{

	echo "<script>alert('maximum you can create two brands only');
	window.location='view_brands.php';
	</script>";

	}
Else{
if($rowcount==0)
			{
$allowedExtsp = array("jpg");
$profile_photo=$_FILES["brand_logo"]["name"];
$tempp = explode(".", $_FILES["brand_logo"]["name"]);
$extensionp = end($tempp);				move_uploaded_file($_FILES["brand_logo"]["tmp_name"],"uploads/logos/" . $_FILES["brand_logo"]["name"]);
echo "<script>
 alert($brand_name);
 </script>";
$sql=mysqli_query($con,"INSERT INTO `tbl_seller_profile_brand`(seller_type_id,register_email,brand_name,Profile_description,profile_photo,achievements,status) VALUES ($seller_type_id,'$mail','$brand_name','$Profile_description','$profile_photo','$achievements','$status')");
if($sql){
										header("Location:view_brands.php");
}
else{
echo "Data Submit Error!!";
}			}

			else
			{
			echo "<script> alert('This brand name already existing!please give a new name')
			window.location='create_brand.php';
			</script>";}	}} ?>
