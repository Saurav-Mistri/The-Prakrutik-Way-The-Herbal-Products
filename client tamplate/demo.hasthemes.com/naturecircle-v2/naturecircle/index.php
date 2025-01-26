<!doctype html>
	
<?php
			include("header1.php");
		?>
        <!-- Header Area End -->
        <!-- Hero Area Start -->
        <div class="ht-hero-section fix">
            <div class="ht-hero-slider">
                <!-- Single Slide Start -->
                <div class="ht-single-slide" style="background-image: url(assets/img/slider/1.jpg)">
                    <div class="ht-hero-content-one container">
                        <h3>Cold Process Organic</h3>
                        <h1 class="cssanimation leDoorCloseLeft sequence">Savon Stories</h1>
                        <p>We believe that healthy eating, clean air, and gentle character is the best start to genuine wellbeing.</p>
                    </div>
                </div>
                <!-- Single Slide End -->
                <!-- Single Slide Start -->
                <div class="ht-single-slide" style="background-image: url(assets/img/slider/2.jpg)">
                    <div class="ht-hero-content-one container">
                        <h3>Healthy life with</h3>
                        <h1 class="cssanimation leDoorCloseLeft sequence">Nature Organic</h1>
                        <p>Vegetables are the edible parts of a plant that is used in cooking or can be eaten raw.</p>
                    </div>
                </div>
                <!-- Single Slide End -->
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Food Categry Area Start -->
       <div class="food-category-area pt-105 pb-70">
            <div class="container text-center">
                <div class="section-title-img">
                    <img src="assets/img/banner/our-products.png" alt="">
                    
                </div>
            </div>
            <div class="container">
                <div class="ht-food-slider row">
				<?php
							$sql="Select * From category";
							$results=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($results))
							{
							$id=$row['c_id'];
						?>
                    <div class="col text-center">
                        <div class="single-food-category">
                            <a href="shop.php?id=<?php echo $id;?>" class="food-cat-img"><img src="assets/img/icon/tea.png" alt=""></a>
                            <img src="assets/img/icon/border.png" alt="">
                            <h4><a href="shop.php?id=<?php echo $id;?>" class="product-text">
							<?php echo $row['c_name']?></a></h4>
                            
                        </div>
                    </div>
							<?php
							}
							?>
                    
                </div>
            </div>
        </div>
        <!-- Food Categry Area End -->
        <!-- Protuct Area Start -->
         <div class="product-area bg-2 pt-110 pb-80">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-img d-flex justify-content-center">
                        <img src="assets/img/icon/title.png" alt="">
                    </div>
                    <h2><span>Health's </span>featured products</h2>
                </div>
            </div>
            <div class="container">
                <div class="product-tab-list nav" role="tablist">
                    <a class="active" href="#tab1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="tab1">Health</a>
                    <a href="#tab2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab2">Hair</a>
                    <a href="#tab3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab3">Skin</a>
                    <a href="#tab4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab4">Baby</a>
                </div>
                <div class="tab-content text-center">
                    <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                        <div class="product-carousel">
						<?php
							$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id and c_name='Health care'";
							$results=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($results))
							{
							$id=$row['p_id'];
											
						?>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="product-details.php?id=<?php echo $id;?>">
                                            <img style="height:250px;width:250px;" src="assets/img/product/<?php echo $row['img_path']?>" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <a href="product-details.php?id=<?php echo $id;?>">
												<button type="button" class="p-cart-btn">View Details</button>
											</a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        
                                        <h5><a href="product-details.php?id=<?php echo $id;?>">
										<?php echo $row['p_name']?></a></h5>
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
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="product-carousel">
						<?php
							$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id and c_name='Hair care'";
							$results=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($results))
							{
							$id=$row['p_id'];
											
						?>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="product-details.php?id=<?php echo $id;?>">
                                            <img style="height:250px;width:250px;" src="assets/img/product/<?php echo $row['img_path']?>" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <a href="product-details.php?id=<?php echo $id;?>">
												<button type="button" class="p-cart-btn">View Details</button>
											</a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        
                                        <h5><a href="product-details.php?id=<?php echo $id;?>">
										<?php echo $row['p_name']?></a></h5>
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
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="product-carousel">
						<?php
							$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id and c_name='Skin care'";
							$results=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($results))
							{
							$id=$row['p_id'];
											
						?>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="product-details.php?id=<?php echo $id;?>">
                                            <img style="height:250px;width:250px;" src="assets/img/product/<?php echo $row['img_path']?>" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <a href="product-details.php?id=<?php echo $id;?>">
												<button type="button" class="p-cart-btn">View Details</button>
											</a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        
                                        <h5><a href="product-details.php?id=<?php echo $id;?>"><?php echo $row['p_name']?></a></h5>
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
                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                        <div class="product-carousel">
                        <?php
							$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id and c_name='baby care'";
							$results=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($results))
							{
							$id=$row['p_id'];
											
						?>
							<div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="product-details.php?id=<?php echo $id;?>">
                                            <img style="height:250px;width:250px;" src="assets/img/product/<?php echo $row['img_path']?>" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <a href="product-details.php?id=<?php echo $id;?>">
												<button type="button" class="p-cart-btn">View Details</button>
											</a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        
                                        <h5><a href="product-details.php?id=<?php echo $id;?>">
										<?php echo $row['p_name']?></a></h5>
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
                </div>
            </div>
        </div>
        <!-- Protuct Area End -->
        <!-- Banner Area Start -->
        
        <!-- Banner Area End -->
        <!-- Featured Area Start -->
       <div class="featured-area bg-3 pt-105 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-carousel-wrapper">
                            <h3>Home <span>Care Products</span></h3>
                            <div class="feaured-carousel">
								
                                <div class="single-featured-carousel">
						<?php
							$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id and c_name='Health care' LIMIT 4";
							$results=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($results))
							{
							$id=$row['p_id'];
											
						?>
                                    <div class="single-featured-item">
                                        <div class="feature-image">
                                            <a href="product-details.php?id=<?php echo $id;?>">
											<img style="height:115px;width:130px;" src="assets/img/featured/<?php echo $row['img_path']?>" alt=""></a>
                                        </div>
                                        <div class="product-text">
                                            
                                            <h5><a href="product-details.php?id=<?php echo $id;?>">
											<?php echo $row['p_name']?></a></h5>
                                            <div class="pro-price">
                                                <span class="new-price">₹ <?php echo $row['p_price']?></span> 
                                            </div>
                                            
                                        </div>
                                    </div>
									<?php
									}?>
                                </div>
								
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-carousel-wrapper">
                            <h3>Hair <span>Care Products</span></h3>
                            <div class="feaured-carousel">
                                <div class="single-featured-carousel">
						<?php
							$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id and c_name='Hair care' LIMIT 4";
							$results=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($results))
							{
							$id=$row['p_id'];
											
						?>							
                                    <div class="single-featured-item">
                                        <div class="feature-image">
                                            <a href="product-details.php?id=<?php echo $id;?>">
											<img style="height:115px;width:130px;" src="assets/img/featured/<?php echo $row['img_path']?>" alt=""></a>
                                        </div>
                                        <div class="product-text">
                                            
                                            <h5><a href="product-details.php?id=<?php echo $id;?>">
											<?php echo $row['p_name']?></a></h5>
                                            <div class="pro-price">
                                                <span class="new-price">₹ <?php echo $row['p_price']?></span> 
                                            </div>
                                            
                                        </div>
                                    </div>
                                <?php
								}
								?>                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="featured-carousel-wrapper">
                            <h3>Skin <span>Care Products</span></h3>
                            <div class="feaured-carousel">
                                <div class="single-featured-carousel">
						<?php
							$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id and c_name='skin care' LIMIT 4";
							$results=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($results))
							{
							$id=$row['p_id'];
											
						?>
                                    <div class="single-featured-item">
                                        <div class="feature-image">
                                            <a href="shop.php">
											<img style="height:115px;width:130px;" src="assets/img/featured/<?php echo $row['img_path']?>" alt=""></a>
                                        </div>
                                        <div class="product-text">
                                            
                                            <h5><a href="product-details.php?id=<?php echo $id;?>">
											<?php echo $row['p_name']?></a></h5>
                                            <div class="pro-price">
                                                <span class="new-price">₹ <?php echo $row['p_price']?></span> 
                                            </div>
                                            
                                        </div>
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
        <!-- Featured Area End -->
        <!-- Testimonial Area Start -->
         <div class="testimonial-area pt-110 pb-95">
            <div class="container">
                <div class="testimonial-slider-wrapper">
					                    <div class="text-carousel text-center">
					<?php 
						$sql="select * from feedback f join user u where f.u_id=u.u_id";
						$results = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($results))
						{
					?>

						<div class="slider-text">
                            <span class="testi-quote">
                                
                            </span>
                            <p><?php echo $row['f_discription']?></p>
                        </div>
					<?php
						}
					?>
                    </div>
                    <div class="image-carousel">
                        <?php
							$sql="select * from feedback f join user u where f.u_id=u.u_id";
						$results = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($results))
						{

						?>
						
						<div class="testi-img">
							<h4><?php echo $row['user_name']?></h4>
                                         
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
        <!-- Testimonial Area End -->
        <!-- Blog Area Start -->
       
        <!-- Blog Area End -->
        <!-- Footer Area Start -->
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