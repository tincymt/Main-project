<?php
session_start();
$user_type_id=$_SESSION['user_type'];
if(isset($_POST['select_adrs'])){
	
$_SESSION['delv_address_id']=$_POST["select_del_adrs"];
$x=$_SESSION['cart_total'];
$select_del_adrs=$_POST["select_del_adrs"];

}
if(isset($_SESSION['alogin'])){
$mail=$_SESSION['alogin'];

$con=mysqli_connect("localhost","root","","db_RHYTHM_project")or die ("Couldn't connect");	
		
$viewprod="SELECT * FROM((tbl_seller_stock INNER JOIN tbl_seller_profile_brand ON tbl_seller_stock.seller_profile_brand_id = tbl_seller_profile_brand.seller_profile_brand_id) INNER JOIN tbl_prod_subcatg ON tbl_seller_stock.prod_subcatg_id =tbl_prod_subcatg.prod_subcatg_id) INNER JOIN tbl_product_category ON tbl_prod_subcatg.prod_category_id = tbl_product_category.product_category_id WHERE tbl_seller_stock.status='VALID' AND tbl_seller_profile_brand.status='VALID' and  ";


$d_seller_prod=mysqli_query($con,$viewprod);

if($user_type_id==3)
{
$customer_bank_info=mysqli_query($con,"SELECT * FROM `tbl_bank_info` WHERE  status='VALID' and user_type_id=3");

$row_customer=mysqli_fetch_array($customer_bank_info);

}

else if($user_type_id==2)
{
$seller_bank_info=mysqli_query($con,"SELECT * FROM `tbl_bank_info` WHERE status='VALID' and user_type_id=2 ");

$row_seller=mysqli_fetch_array($seller_bank_info);


}
else
{
$admin_bank_info=mysqli_query($con,"SELECT * FROM `tbl_bank_info` WHERE status='VALID' and user_type_id=1");

$row_admin=mysqli_fetch_array($admin_bank_info);

}

?>

<!DOCTYPE html>
<html>
<head>
<title>RHYTHM|Customer Payment</title>

</head>
	
<body>

<center><label class="control-label" style="color:green">Verify your card by entering the valid CVV</label></center></br>
<form action="payment_action.php" method="POST" class="creditly-card-form agileinfo_form">
<section class="creditly-wrapper wthree, w3_agileits_wrapper">
<div class="credit-card-wrapper">
<div class="first-row form-group">
<div class="controls">
													<label class="control-label">Name on Card</label>
<input class="billing-address-name form-control" type="text" name="name" id="name" style="color:grey" value="<?php echo $row_customer['name_on_card'] ?>" disabled>
</div>
<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Card Number</label>
<input class="number credit-card-number form-control" type="text" name="cnumber" id="cnumber" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"  style="color:grey" value="<?php echo $row_customer['card_number'] ?>" disabled>
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">CVV</label>
															<input 
class="number credit-card-number form-control" maxlength="3" min="3" pattern="^[0-9]{3}$" title="Enter Valid CVV" type="password" name="security_code" id="security_code" placeholder="Enter CVV" required>
														</div>
													</div>
													<div class="clear"> </div>
	</div>
	<div class="controls">
													<label class="control-label">Expiration Date</label>
													<input class="expiration-month-and-year form-control" type="text" name="expiration" id="expiration" style="color:grey" value="<?php echo $row_customer['expiration_date'] ?>" disabled> </div></div><button class="submit" name="payment" id="payment"><span>Pay and confirm Order </span></button></div></section></form>
</div>

</body>
</html>
