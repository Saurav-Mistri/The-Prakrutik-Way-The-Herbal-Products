<!doctype html>
<?PHP
//session_start();
require_once("../../../../config/connection.php");
include("header1.php");


?>

<?php
if(isset($_GET['id']))
{
		$oid = $_GET['id'];
		
		$u = "update order_master set payment_status = 1 where o_id = $oid";
	
		$r = mysqli_query($conn , $u);
		
		if($r)
		{
			echo "<meta http-equiv='refresh' content='0;url=vieworder.php'>";	
		}
}

?>

<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:07:52 GMT -->

        <!-- Header Area Start -->
		
            <!-- Header Area End -->
            <!-- Mobile Menu Area Start -->

        <!-- Header Area End -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-12 text-center">
            <div class="container">
                <h1>Order Details</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="vieworder.php">Order Details</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Cart Area Start -->
        <div class="cart-area table-area pt-110 pb-95">
            <div class="container">
                <div class="table-responsive">
                    <table class="table product-table text-center">
                        <thead>
                            <tr>
                                <th class="table-remove">Order ID</th>
                                <th class="table-p-name">Product Name</th>
                                <th class="table-p-qty">Payment Status</th>
								<th class="table-p-price">View Order</th>
                                
                            </tr>
                        </thead>
                        <tbody>
							<?php
								$uid=$_SESSION['u_id'];
								
								$sql="Select * From order_master where u_id = $uid";
								$results=mysqli_query($conn,$sql);

								while($row=mysqli_fetch_array($results))
								{
									$oid=$row['o_id'];
							?>
                            <tr>
                                <td class="table-p-name"><?php echo $row['o_id']?></a></td>
                                <td class="table-p-name"><?php echo $row['order_date']?></a></td>
								<td class="table-p-qty">
								<?php
									if($row['payment_status']==0)
									{
										echo "Incomplete";	
									}
									else{
										echo "Complete";
									}
									?>
								</td>
                                <td class="table-p-price"><p><a href="myorder.php?oid=<?php echo $oid?>">View</a></p></td>
                            </tr>	
                            <?php
								}
							?>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="container">
                
            </div>
        </div>
        <!-- Cart Area End -->
 <!-- Footer Area Start -->
        <?php
			include("footer1.php");
		?>
        <!-- Footer Area End -->
<?php
include("footer1.php");
?>
        <!-- Footer Area End -->
        
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