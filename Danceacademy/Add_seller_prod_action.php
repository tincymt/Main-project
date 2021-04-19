<?php
session_start();
$mail=$_SESSION['alogin'];
$con=mysqli_connect("localhost","root","","db_RHYTHM_project")or die ("Couldn't connect");

if(isset($_POST["add_prod"]))
{
	
	$brand_id=$_POST["brand_id"];
	$category=$_POST["category"];
	$subcat=$_POST["subcat"];
	$prod_name=$_POST["prod_name"];
	$about_prod=$_POST["about_prod"];
	$price=$_POST["price"];
	$prod_qty=$_POST["prod_qty"];
	//$item_img1=$_POST["brand_id"];
	date_default_timezone_set('Asia/Kolkata');
	$currentTime = date("h:i:sa");	
	$status="VALID";
	$rowcount=0;

$disp="SELECT * from tbl_seller_stock WHERE product_name='$prod_name' AND status='VALID'";

$result_disp=mysqli_query($con,$disp);
$rowcount = mysqli_num_rows($result_disp); 
if($rowcount==0)
{
						$allowedExtsp = array("jpg");
						$item_img1=$_FILES["item_img1"]["name"];
						$tempp = explode(".", $_FILES["item_img1"]["name"]);
						$extensionp = end($tempp);
						move_uploaded_file($_FILES["item_img1"]["tmp_name"],"uploads/products/" . $_FILES["item_img1"]["name"]);
						
						$allowedExtsp2 = array("jpg");
						$item_img2=$_FILES["item_img2"]["name"];
						$tempp2 = explode(".", $_FILES["item_img2"]["name"]);
						$extensionp2 = end($tempp2);
						move_uploaded_file($_FILES["item_img2"]["tmp_name"],"uploads/products/" . $_FILES["item_img2"]["name"]);
						$allowedExtsp3 = array("jpg");
						$item_img3=$_FILES["item_img3"]["name"];
						$tempp3 = explode(".", $_FILES["item_img3"]["name"]);
						$extensionp3 = end($tempp2);
						move_uploaded_file($_FILES["item_img3"]["tmp_name"],"uploads/products/" . $_FILES["item_img3"]["name"]);
						
						
						$sql=mysqli_query($con,"  INSERT INTO `tbl_seller_stock` (`seller_profile_brand_id`, `prod_subcatg_id`, `product_name`, `product_description`, `item_price`, `stock_item_count`, `img1`, `img2`, `img3`, `added_date`, `updated date`, `status`) VALUES ('$brand_id','$subcat', '$prod_name', '$about_prod', '$price', '$prod_qty', '$item_img1', '$item_img2', '$item_img3', now(), now(), 'VALID') ");
						if($sql){


echo "<script> alert('Product added successfully')
window.location='add_seller_prod.php';
</script>";

							//header("Location:add_seller_prod.php");
						}
						else{
							echo "Data Submit Error!!";
						}}

else
{
echo "<script> alert('This Product name already existing!please give a new name')
window.location='add_seller_prod.php';
</script>";}}?>
