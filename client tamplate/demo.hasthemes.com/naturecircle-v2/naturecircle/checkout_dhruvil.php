<?php include('header.php');
require_once("config/connection.php");
//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'cdropzone@gmail.com'; //Business Email
?>
<?php 
$oid=$_GET['id'];

$sql = "select * from  order_item ot join `order` o 
where o.ORDER_ID=ot.ORDER_ID and O.ORDER_ID='".$oid."'";
$uid = $_SESSION["username"]; 
$result=mysqli_query($conn,$sql);
?>

<script>
	function show()
	{
		document.getElementById("first").style.display="block";
		document.getElementById("second").style.display="none";
	}
	
	function hide()
	{
		document.getElementById("first").style.display="none";
		document.getElementById("second").style.display="block";
	}
	
</script>

        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li class="current"><a>Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->


        <!-- Main content wrapper start -->
<form action="<?php echo $paypalURL; ?>" method="post">

        <div class="main-content-wrapper">
            <div class="checkout-area pt--40 pb--80 pt-sm--30 pb-sm--60">
                <div class="container">
                    <div class="row">
                        
                    </div> 
                    <div class="row">
                        <div class="col-12">
                            <!-- Checkout Area Start -->
                            <div class="checkout-wrapper bg--white">
                                <div class="row">
                                    
									
                                    <div class="col-lg-6 mt-md--30">
                                        <div class="order-details">
                                            <h3 class="heading-tertiary">Your Order</h3>
                                            <div class="order-table table-content table-responsive mb--30">
                                                <table class="table">
												
                                                    <thead>
													
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													<?php
													$flag=0;
													while($row=mysqli_fetch_array($result))
													{
														
														
														if($row['PRODUCT_ID']!=0)
														{
															
															$sql2 = "select * from product where PRODUCT_ID = '".$row['PRODUCT_ID']."'";
															$result2=mysqli_query($conn,$sql2);
															$row2 = mysqli_fetch_array($result2);
															$name = $row2["P_NAME"];
															$price = $row2["PRICE"];
														}
														
														
														if($row['PART_ID']!=0)
														{
															
															$sql2 = "select * from part where PART_ID = '".$row['PART_ID']."'";
															$result2=mysqli_query($conn,$sql2);
															$row2 = mysqli_fetch_array($result2);
															$name = $row2["PA_NAME"];
															$price = $row2["PRICE"];
														}
													?>
                                                        <tr>
                                                            <td><?php echo $name?> <strong>x<?php echo $row['Q']?></strong></td>
                                                            <td>₹<?php echo $price * $row['Q']?></td>
                                                        </tr>
                                                        
                                                    </tbody>
													<?php
													}
													?>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th>Cart Subtotal</th>
                                                            <td data-to=<?php echo $_GET['amt']?>>₹<?php echo $_GET['amt']?></td>
                                                        </tr>
                                                       
                                                        <tr class="order-total">
                                                            <th>Order Total</th>
                                                            <td><span class="order-total-ammount" data-to=<?php echo $_GET['amt']?>>₹<?php echo $_GET['amt']?></span></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
											<input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
		<?php 
			$sql = "select * from user where USER_ID = $uid;";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);
			$uname = $row['UFIRST_NAME'] . " " . $row['ULAST_NAME'];
		?>
		
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $uname; ?>">
		<input type="hidden" name="amount" value="<?php echo $_GET['amt']/70; ?>">
          <input type="hidden" name="currency_code" value="USD">
		  <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/dropzone/cancel.php'>
		
        <input type='hidden' name='return' value='http://localhost/dropzone/vieworder.php?oid=<?php echo $oid?>'>
        
        
                                            <div class="checkout-payment">
                                                
                                                    
                                                    <div class="payment-group">
                                                        <div class="payment-radio">
                                       <input type="radio" checked value="paypal" name="payment-method" id="paypal" onchange="show();"> Paypal
															
														<div id="first" style="display:none">
																<label class="payment-label" for="paypal">
                                                                Paypal 
                                                                <img src="assets/img/others/AM_mc_vs_ms_ae_UK.png" alt="payment">
                                                                
											<input type="image" name="submit" border="0"
											src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
											<img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

                                                            </label>
                                                        </div>
                                                    </div>    
                                                    </div>
                                                    <div class="payment-group">
													<div class="payment-radio">
                                                   <input type="radio" checked value="cash" name="payment-method" id="paypal" onchange="hide()"> Cash
															
													<div id="second" style="display:none">
													
														<a href="vieworder.php"> 
														<button type="button" class="sidebar-btn" name="search">
														Pay Later
														</button></a></button>

													</div>
														
													</div>
							</div>
                                                
							
	
																		
												
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Area End -->
                        </div>
                    </div>
                </div>     
            </div>
        </div>
		</form>

        <!-- Main content wrapper end -->

<?php include('footer.php'); ?>