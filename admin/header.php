<!doctype html>
<html lang="en">
<?php
session_start();
?>

<!-- Mirrored from jituchauhan.com/influence/landingpage/influence/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 10:19:13 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>The Prakrutik Way : Herbal Products</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php"><img src="assets/images/logop.png" alt="" width=125 height=55></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/user1.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
								<?php
								
									$sql="Select * From user";
									$results=mysqli_query($conn,$sql);
									$row=mysqli_fetch_array($results)
								?>
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $row['user_name']?></h5>
                                </div>
					
								 
								<a class="dropdown-item" href="pages/profileadmin.php"><i class="fas fa-user mr-2"></i>Profile</a>
					
                                <a class="dropdown-item" href="pages/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
											
										
							</div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
					
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
					
                            <li class="nav-divider">
                                Menu
                            </li>
							<li class="nav-item ">
                                <a class="nav-link" href="index.php" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
								<i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="user.php" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
						
							<i class="fa fa-fw fa-user-circle"></i>User </a>
                                
                            </li>
							 <li class="nav-item ">
                                <a class="nav-link" href="area.php" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
						
							<i class="fa fa-fw fa-user-circle"></i>Area </a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.php"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>category</a>
                            </li>
							  <li class="nav-item">
                                <a class="nav-link" href="subcategory.php"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Sub category</a>
                                
                            </li>
                           
                            <li class="nav-item ">
                                <a class="nav-link" href="product.php" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Product</a>
                                
                            </li>
                            
                          
                            <li class="nav-item">
                                <a class="nav-link" href="order.php" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Order </a>
                                
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="gallery.php"  aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Gallery</a>
                               
                            </li>
                            
                             <li class="nav-item">
                                <a class="nav-link" href="contact.php"  aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Contact us</a>
                               
                            </li>
							 <li class="nav-item">
                                <a class="nav-link" href="orderreport.php"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Order Reports</a>
                               
                            </li>
							 <li class="nav-item">
                                <a class="nav-link" href="productreport.php"  aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Product Reports</a>
                               
                            </li>						
                        </ul>
                    </div>
					
                </nav>
            </div>
        </div>
											
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"></h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
					