<!doctype html>
<?PHP INCLUDE("../../../../config/connection.php");?>
<html class="no-js" lang="en">
    
<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/shop-full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Dec 2018 06:07:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>The Prakrutik Way : Herbal Products</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- All css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ie7.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    </head>
    <body>
        
        <!-- Header Area Start -->
		<?php
		include("header1.php");
		?>
            <!-- Header Area End -->
        
		<!-- Header Area End -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-12 text-center">
            <div class="container">
                <h1>Shop Full Width</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Full Width</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Shop Area Start -->
        <div class="shop-area pt-110 pb-100 bg-gray mb-95 shop-full-width">
            <div class="container">
                <div class="ht-product-tab">
                    <div class="ht-tab-content">
                        <div class="nav" role="tablist">
                            <a class="active grid" href="#grid" data-toggle="tab" role="tab" aria-selected="true" aria-controls="grid"><i class="fa fa-th"></i></a>
                            <a class="list" href="#list" data-toggle="tab" role="tab" aria-selected="false" aria-controls="list"><i class="fa fa-list"></i></a>
                        </div>
                        <div class="shop-items">
                            <span>Showing 1 to 12 of 26 (2 Pages) </span>
                        </div>
                    </div>
                    <div class="shop-results-wrapper">
                        <div class="shop-results"><span>Show:</span>
                            <div class="shop-select">
                                <select name="number" id="number">
                                    <option value="9">12</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="shop-results"><span>Sort By:</span>
                            <div class="shop-select">
                                <select name="sort" id="sort">
                                    <option value="position">Default sorting</option>
                                    <option value="p-name">Sort By Popularity</option>
                                    <option value="p-price">Sort By Price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ht-product-shop tab-content text-center">
                    <div class="tab-pane active show fade" id="grid" role="tabpanel">
                        <div class="custom-row">
					<?php
						$sql="Select * From `product` p join `sub_category` s join `category` c join `gallery` g where p.sub_category_id=s.sub_category_id and s.c_id=c.c_id and p.p_id=g.p_id LIMIT 12";
						$results=mysqli_query($conn,$sql);
						
						while($row=mysqli_fetch_array($results))
						{
							$id=$row['p_id'];
					?>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="product-details.php">
                                            <img style="height:120px;width:110px;" src="assets/img/product/<?php echo $row['img_path']?>" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/<?php echo $row['img_path']?>" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
										
                                        <h5><a href="product-details.php?id=<?php echo $id;?>">
										<?php echo $row['p_name']?>
										</a></h5>
										
                                        <div class="pro-price">
                                            <span class="new-price"><?php echo $row['p_price']?></span>
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
                                    <img src="assets/img/product/<?php echo $row['img_path']?>" alt="">
                                </a>  
                                <div class="product-hover">
                                    <ul class="hover-icon-list">
                                        <li>
                                            <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-Restart"></i></a>
                                        </li>
                                        <li><a href="assets/img/product/<?php echo $row['img_path']?>" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-text">
                                <h5><a href="product-details.php?id=<?php echo $id;?>">
									<br><?php echo $row['p_name']?>
								</a></h5>
                                <div class="product-rating">
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o color"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price"><?php echo $row['p_price']?></span>
                                    
                                </div>
                                <p><?php echo $row['p_description']?></p>
                                <button type="button" class="p-cart-btn default-btn">Add to cart</button>
                            </div>
                        </div>
						<?php
							}
						?>
                    </div>
                </div>
                <div class="pagination-wrapper">
                    <p>Showing 1 to 9 of 11 (2 Pages)</p>
                    <nav aria-label="navigation">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">></a></li>
                            <li class="page-item"><a class="page-link" href="#">>|</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Shop Area End -->
        <!-- Footer Area Start -->
        <?php
			include("footer1.php");
		?>
        <!-- Footer Area End -->
        
       