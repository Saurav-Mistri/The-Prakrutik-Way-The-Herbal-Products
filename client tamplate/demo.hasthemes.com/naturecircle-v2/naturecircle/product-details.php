<!doctype html>
<?php include("../../../../config/connection.php");

?>

<?php
	if(isset($_GET['id']))
	{
		$pid=$_GET['id'];
		$sql="Select * from product where p_id='".$pid."'";
	}
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$p_qty=$_POST['quantity'];
		echo "<meta http-equiv='refresh' content='0;url=Cart-Insert.php?p_id=$pid&qty=$p_qty'>";
	}
?>
<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:07:54 GMT -->
  
        <!-- Header Area Start -->
  		<?php
			include("header1.php");
		?>
            <!-- Header Area End -->
            <!-- Mobile Menu Area Start -->

        <!-- Header Area End -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-12 text-center">
            <div class="container">
                <h1>Single Shop</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Single Shop</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Product DEtails Area Start -->
        <div class="product-detials-area bg-gray pt-110">
            <?php 
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id and p.p_id='".$_GET['id']."'";
			$result=mysqli_query($conn,$sql);
			
			$row=mysqli_fetch_array($result);
		}
		?>
			<div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="product-image-slider d-flex flex-column">
                            <!--Product Tab Content Start-->
                            <div class="tab-content product-large-image-list">
                                <div class="tab-pane fade show active" id="product-slide1" role="tabpanel" aria-labelledby="product-slide-tab-1">
                                    <div class="single-product-img easyzoom img-full">
                                        <a href="assets/img/product/<?php echo $row['img_path']?>"><img src="assets/img/product/<?php echo $row['img_path']?>" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-slide2" role="tabpanel" aria-labelledby="product-slide-tab-2">
                                    <div class="single-product-img easyzoom img-full">
                                        <a href="assets/img/product/<?php echo $row['img_path']?>"><img src="assets/img/product/<?php echo $row['img_path']?>" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-slide3" role="tabpanel" aria-labelledby="product-slide-tab-3">
                                    <div class="single-product-img easyzoom img-full">
                                        <a href="assets/img/product/<?php echo $row['img_path']?>"><img src="assets/img/product/<?php echo $row['img_path']?>" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-slide4" role="tabpanel" aria-labelledby="product-slide-tab-4">
                                    <div class="single-product-img easyzoom img-full">
                                        <a href="assets/img/product/<?php echo $row['img_path']?>"><img src="assets/img/product/<?php echo $row['img_path']?>" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-slide5" role="tabpanel" aria-labelledby="product-slide-tab-5">
                                    <div class="single-product-img easyzoom img-full">
                                        <a href="assets/img/product/<?php echo $row['img_path']?>"><img src="assets/img/product/<?php echo $row['img_path']?>" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-slide6" role="tabpanel" aria-labelledby="product-slide-tab-6">
                                    <div class="single-product-img easyzoom img-full">
                                        <a href="assets/img/product/<?php echo $row['img_path']?>"><img src="assets/img/product/<?php echo $row['img_path']?>" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!--Product Content End-->
                            <!--Product Tab Menu Start-->
                            <div class="product-small-image-list"> 
								<div class="nav small-image-slider-single-product-tabstyle-3" role="tablist">
                                    
                                    
                                </div>
                            </div>
                            <!--Product Tab Menu End-->
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
					
                        <div class="product-details-text">
                            <h3><?php echo $row['p_name']?></h3>
                            
                            <h4>₹ <?php echo $row['p_price']?></h4>
                            <p><?php echo $row['p_description']?></p>
							
                            <h5><i class="fa fa-check" name="quantity"></i><?php echo $row['p_qty'];?> in stock</h5>
							<div class="product-tag-cat">
                                    <div class="single-tag-cat">
                                        <span class="p-d-title">Categories:</span>  
                                        <a href="#"><?php echo $row['c_name']?></a>
                                    </div>
								</div>
								<div class="product-tag-cat"> 
									<div class="single-tag-cat">
                                        <span class="p-d-title">Sub Categories:</span>  
                                        <a href="#"><?php echo $row['sub_category_name']?></a>
                                    </div>
                                </div>
								<br>
                            <form  method="post">
                                <div class="add-cart-product">
                                    <input type="number" placeholder="1" name="quantity" value="1" min="1">
                                    <button class="default-btn" type="submit">Add to cart</button>
                                </div>
                            </form>	
                        </div>
						<?php
		
							echo "</tr>";
								
						   ?>
                    </div>
					
                </div>
            </div>
        </div>
        <!-- Product DEtails Area End -->
        <!-- Product Review Tab Area Start -->
        
        <!-- Product Review Tab Area End -->
        <!-- Protuct Area Start -->
       
        <!-- Protuct Area End -->
        <!-- Footer Area Start -->
        <footer class="footer-area">
            <!-- Footer Top Area Start -->
        <?php
			include("footer1.php");
		?>
        <!-- Footer Area End -->
        
        <!-- QUICKVIEW PRODUCT -->
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