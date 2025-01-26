<!doctype html>
<?PHP INCLUDE("../../../../config/connection.php");?>
        
        <!-- Header Area Start -->
		<?php
			include("header1.php");
		?>

<?php
$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id";

if(isset($_GET['sid']))
{
	$sid = $_GET['sid'];
	$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id
	and p.sub_category_id=$sid";
}

if(isset($_GET['id']))
{
	$cid = $_GET['id'];
	$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id
	and c.c_id=$cid";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$sql = $sql . " order by p.p_price";
}

$results=mysqli_query($conn,$sql);
?>
		<!-- Header Area End -->
            <!-- Mobile Menu Area Start -->

        <!-- Header Area End -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-12 text-center">
            <div class="container">
                <h1>Shop</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Shop Area Start -->
        <div class="shop-area pt-110 pb-100 bg-gray mb-95">
            <div class="container">
                <div class="row">
                    <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8">
                        <div class="ht-product-tab">
                            <div class="ht-tab-content">
                                <div class="nav" role="tablist">
                                    <a class="active grid" href="#grid" data-toggle="tab" role="tab" aria-selected="true" aria-controls="grid"><i class="fa fa-th"></i></a>
                                    <a class="list" href="#list" data-toggle="tab" role="tab" aria-selected="false" aria-controls="list"><i class="fa fa-list"></i></a>
                                </div>
                                
                            </div>
                            <div class="shop-results-wrapper">
                                
                                <div class="shop-results">
                                    <div class="shop-select">
										<form method="post">
										<input type="submit" value="SORT BY PRICE" class="p-cart-btn default-btn" />
										</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ht-product-shop tab-content text-center">
                            <div class="tab-pane active show fade" id="grid" role="tabpanel">
                                <div class="custom-row">
                                    <?php
						
										while($row=mysqli_fetch_array($results))
										{
											$id=$row['p_id'];
											
									?>
									<div class="custom-col">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="product-details.php?id=<?php echo $id;?>">
                                                    <img style="height:120px;width:110px;" src="assets/img/product/<?php echo $row['img_path']?>" alt="">
													<a href="assets/img/product/<?php echo $row['img_path']?>" data-toggle="modal" data-target="#productModal"></a>
                                                </a>  
                                                <div class="product-hover">
													<a href="product-details.php?id=<?php echo $id;?>">
														<button type="button" class="p-cart-btn">View Details</button>
													</a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <h5><a href="product-details.php?id=<?php echo $id;?>"><br>
												<br><br><br><?php echo $row['p_name']?>
												</a></h5>
                                                <div class="pro-price">
                                                    <span class="new-price">₹ <?php echo $row['p_price']?></span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
										}
									?>
                                </div>
                            </div>
                            <div class="tab-pane fade text-left" id="list" role="tabpanel">
							<?php
										$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id LIMIT 12";
										$results=mysqli_query($conn,$sql);
						
										while($row=mysqli_fetch_array($results))
										{
											$id=$row['p_id'];
									?>
                                <div class="single-product-item">
                                    <div class="product-image">
                                                <a href="product-details.php">
                                                    <img style="height:120px;width:110px;" src="assets/img/product/<?php echo $row['img_path']?>" alt="">
													<a href="assets/img/product/<?php echo $row['img_path']?>" data-toggle="modal" data-target="#productModal"></a>
                                                </a>  
                                            </div>
                                    <div class="product-text">
                                        <h5>
											<a href="product-details.php?id=<?php echo $id;?>">
												<?php echo $row['p_name']?></a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">₹ <?php echo $row['p_price']?></span>
                                            
                                        </div>
											<br><br>
                                        <a href="product-details.php?id=<?php echo $id;?>"><button type="button" class="p-cart-btn default-btn">View details</button></a>
                                    </div>
                                </div>
                                    <?php
										}
									?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="sidebar-wrapper">
                            <div class="sidebar-widget">
                                <h4>Categories</h4><br>
                                <div class="sidebar-widget-option-wrapper">
									<?php
											$sql="Select * From category";
											$results=mysqli_query($conn,$sql);
						
											while($row=mysqli_fetch_array($results))
										{
											$cid = $row['c_id'];
									?>
                                    <div class="sidebar-widget-option">
                                        <a href="shop.php?id=<?php echo $cid?>">
                                        <label for="cat1"><?php echo $row['c_name']?> </label>
										</a>
									</div>
									<?php
										}
									?>           
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Area End -->
        <!-- Footer Area Start -->
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