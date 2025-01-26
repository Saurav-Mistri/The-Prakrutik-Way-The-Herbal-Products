<!doctype html>
<?PHP
//session_start();
include("../../../../config/connection.php");
//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'prakrutikwayherbalproducts2019@gmail.com'; //Business Email
?>
<?php
include("header1.php");


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

        <!-- Header Area End -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-12 text-center">
            <div class="container">
                <h1>Checkout</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- coupon-area start -->

        <!-- coupon-area end -->
        <!-- checkout-area start -->
        <div class="checkout-area pb-90">
            <div class="container">
                
                    <div class="row">
                   
    <form action="<?php echo $paypalURL; ?>" method="post">
	
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                					<th class="table-p-name">product</th>
                                					<th class="table-p-price">Total</th>
                                					
                            				</tr>
                                        </thead>
										<?php
										$uid=$_SESSION['u_id'];
										$oid=$_GET['id'];
										
										$sql="Select * From order_item o join order_master om join product p where o.p_id=p.p_id and o.o_id=om.o_id and om.o_id=$oid";
	//									echo $sql;
		//								die;
										$results=mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($results))
										{
											
										?>
                                        <tbody>
										<tr class="cart_item">
                                <td class="product-name">
								<?php echo $row['p_name']?> × 
								<?php echo $row['c_qty']?>
								</td>
                                <td class="product-total"><span class="amount">₹ <?php echo $row['amnt']?></td>
                                            </tr>
                                        </tbody>
 
										<?php
										}
										?>
										
										<tfoot>
                                          

                                            <?php 
//												$oid = $_GET['id'];
												$sql4 = "SELECT sum(amnt) as total from order_item WHERE o_id = $oid";
												$r = mysqli_query($conn,$sql4);
												$data = mysqli_fetch_array($r);
												$total = $data['total'];
											?>
                                           
										  
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td>
                                                    <strong><span class="amount"><b>₹ <?php echo $total;?></b></span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel" >
											<input type="radio" name="opt" value="cash" onchange="show();"> Cash
                                            <div class="panel-heading" id="first" style="display:none">							
													<div class="order-button-payment">
													<a href="vieworder.php">
													<input class="default-btn" type="button" value="Cash Payment" />
													</a>
											</div>												
											</div>
                                           
                                        </div>
										
										
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
		<?php
			$uname = $_SESSION["user_name"];
		?>
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $uname; ?>">
		<input type="hidden" name="amount" value="<?php echo $total/70; ?>">
          <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/herbalproduct/client tamplate/demo.hasthemes.com/naturecircle-v2/naturecircle/cancel.php'>
		
        <input type='hidden' name='return' value='http://localhost/herbalproduct/client tamplate/demo.hasthemes.com/naturecircle-v2/naturecircle/vieworder.php?id=<?php echo $oid?>'>
		
                                        <div class="panel">
                                            <div class="panel-heading" id="headingTwo">
                                                <input type="radio" name="opt" value="paypal" checked onchange="hide();">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#billing">
                                                    PayPal Payment
                                                    <img src="assets/img/payment-paypa.png" alt="">
                                                </a>
                                            </div>
    

		<div id="second">	
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
		</div>
    

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- checkout-area end -->	
        <!-- Footer Area Start -->
        <?php
			include("footer1.php");
		?>
		 <!-- QUICKVIEW PRODUCT -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                    <div class="quick-view-container">
                        <div class="column-left">
                            <div class="tab-content product-details-large" id="myTabContent">
                                <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-5">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/5.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide6" role="tabpanel" aria-labelledby="single-slide-tab-6">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-menu">
                                <div class="nav single-slide-menu" role="tablist">
                                    <div class="single-tab-menu">
                                        <a class="active" data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="assets/img/product/1.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="assets/img/product/2.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="assets/img/product/3.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="assets/img/product/4.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img src="assets/img/product/5.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-6" href="#single-slide6"><img src="assets/img/product/6.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="column-right">
                            <div class="quick-view-text">
                                <h2>Curabitur a purus</h2>
                                <h3 class="q-product-price">$34.00<span class="old-price">$37.00</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                <div class="input-cart">
                                    <input value="1" type="number">
                                    <button class="default-btn">Add to cart</button>
                                </div>
                                <div class="share-product">
                                    <h4>Share this product</h4>
                                    <div class="social-link">
                                        <a href="#" target="_blank" class="facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" target="_blank" class="twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" target="_blank" class="pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#" target="_blank" class="google">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#" target="_blank" class="linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICKVIEW PRODUCT -->
        
        <!-- All js here -->
        <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:05:54 GMT -->
</html>