<?php
session_start();

$mail=$_SESSION['alogin'];
$user_type_id=$_SESSION['user_type'];


$delvr_address_id=$_SESSION['delv_address_id'];
$cart_tl=$_SESSION['cart_total'];
$con=mysqli_connect("localhost","root","","db_RHYTHM_project")or die ("Couldn't connect");

if(isset($_POST["payment"]))
{
$cnumber=0;
$security_code=0;

$security_code=$_POST["security_code"];

$balance_amount=50000;
$status='VALID';
$new_balance=0;

$d_cutomer_cart=mysqli_query($con,"SELECT * FROM `tbl_customer_cart` WHERE register_email='$mail' and status='VALID'");

$d_bank_info=mysqli_query($con,"SELECT * FROM `tbl_bank_info` WHERE   CVV='$security_code' and status='VALID' and user_type_id='$user_type_id'");

//$row=mysqli_fetch_array($d_del_adrs);

$rowcount = mysqli_num_rows($d_bank_info); 


	if($rowcount==0)
	{				

	echo "<script>
												alert('Wrong CVV !Enter correct CVV');
												window.location='payment.php';
	</script>";

	}
			else if ($rowcount==1)
			{		

$customer_bank_info=mysqli_query($con,"SELECT * FROM `tbl_bank_info` WHERE  status='VALID' and user_type_id=3");

$row_customer=mysqli_fetch_array($customer_bank_info);

$old_balance=$row_customer['balance_amount'];

if($old_balance<$cart_tl)
{
echo "<script>
alert('Insufficient Balance in your card');
window.location='payment.php';
</script>";
}
else{
$new_balance=$old_balance-$cart_tl;

$sql2=mysqli_query($con,"  UPDATE `tbl_bank_info` SET `balance_amount`=$new_balance WHERE  CVV='$security_code' and user_type_id=3 ");			

if($sql2)
{													
$seller_bank_info=mysqli_query($con,"SELECT * FROM `tbl_bank_info` WHERE status='VALID' and user_type_id=2 ");
$row_seller=mysqli_fetch_array($seller_bank_info);
$seller_old_bal=$row_seller['balance_amount'];
$seller_new_bal=$seller_old_bal+$cart_tl;

$sql3=mysqli_query($con,"  UPDATE `tbl_bank_info` SET `balance_amount`=$seller_new_bal WHERE   user_type_id=2 ");
if($sql3)
	{
									while($rowcart=mysqli_fetch_array($d_cutomer_cart)){				$stock_product_id=$rowcart['stock_product_id'];		$purchase_qty=$rowcart['quantity'];					$purchase_price=$rowcart['total_price'];					$sql_order_prod=mysqli_query($con,"  INSERT INTO `tbl_customer_order` ( `register_email`, `stock_product_id`, `delv_adres_id`, `purchase_qty`, `purchase_price`, `order_date`, `delivery_date`, `customize_comments`, `status`) VALUES ('$mail', $stock_product_id, $delvr_address_id, $purchase_qty, $purchase_price, now(), '0000-00-00', 'Nil', 'NEW') ");
													if($sql_order_prod)
	{
											$sql_del_cart=mysqli_query($con," DELETE FROM `tbl_customer_cart` WHERE register_email='$mail' and stock_product_id=$stock_product_id");
																				if($sql_del_cart)
															{
										$seller_stock_view=mysqli_query($con,"SELECT * FROM `tbl_seller_stock` WHERE  status='VALID' and stock_product_id=$stock_product_id ");
															$rowstock_count=mysqli_fetch_array($seller_stock_view);
															$old_stock_count=$rowstock_count['stock_item_count'];
															$new_stock_count=$old_stock_count-$purchase_qty;
																$seller_stock_update=mysqli_query($con,"UPDATE `tbl_seller_stock` SET `stock_item_count` = $new_stock_count WHERE `tbl_seller_stock`.`stock_product_id` = $stock_product_id ");
//UPDATE `tbl_seller_stock` SET `stock_item_count` = '2' WHERE `tbl_seller_stock`.`stock_product_id` = 20;
															if($seller_stock_update)
																{
																echo "<script>													alert('Order placed successfully');
																	window.location='customer_view_orders.php';
																</script>";
			}
														}
	}
													else
	{echo "<script>alert('failed');										</script>";													
	}}													}else
									
{
echo "<script> alert('Transaction failed');								window.location='cart_view.php';
	</script>";
										
	}}}

	}
	Else { echo "Card verification failed";
			}} ?>
