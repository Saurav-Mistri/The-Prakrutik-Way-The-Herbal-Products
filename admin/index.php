<?php
require_once("../config/connection.php");
include('header.php');

if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
								<?php
									$sql3="select count(u_id) as user from user";
									$result3 = mysqli_query($conn,$sql3);
									$row3 = mysqli_fetch_array($result3);
								?>
                                    <div class="card-body">
                                        <h5 class="text-muted">Members Online</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $row3['user']?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                <?php
									$sql31="select count(c_id) as category from category";
									$result31 = mysqli_query($conn,$sql31);
									$row31 = mysqli_fetch_array($result31);
								?>
									<div class="card-body">
                                        <h5 class="text-muted">Categories</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $row31['category']?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                <?php
									$sql32="select count(p_id) as product from product";
									$result32 = mysqli_query($conn,$sql32);
									$row32 = mysqli_fetch_array($result32);
								?>
									<div class="card-body">
                                        <h5 class="text-muted">Products</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $row32['product']?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
								<?php
									$sql33="select count(o_id) as order_master from order_master";
									$result33 = mysqli_query($conn,$sql33);
									$row33 = mysqli_fetch_array($result33);
								?>
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Orders</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $row33['order_master']?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- product sales  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end product sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- product category  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end product category  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Today Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">User Name</th>
                                                        <th class="border-0">Order Status</th>
                                                        <th class="border-0">Order Date</th>
                                                        <th class="border-0">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                       <?php
													   $d = date("Y-m-d");
										 $sql="select * from order_master o JOIN user u where o.u_id=u.u_id and o.order_date = '".$d."'";
										 
										   $result=mysqli_query($conn,$sql);
										  while($row=mysqli_fetch_array($result))
	{
		$oid=$row['o_id'];
		echo "<tr>";
		echo "<td>".$row["user_name"]."</td>";
		echo "<td>".$row["o_id"]."</td>";
		echo "<td>".$row["order_date"]."</td>";
?>
	<td class="table-p-price"><p><a href="myorder1.php?oid=<?php echo $oid?>">View</a></p></td>
<?php
		echo "</tr>";
	}
										   ?>
                                             
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                            <!-- ============================================================== -->
                            
                                <!-- ============================================================== -->
                                <!-- top perfomimg  -->
                                <!-- ============================================================== -->
                                
                                
                                <!-- ============================================================== -->
                                <!-- end top perfomimg  -->
                                <!-- ============================================================== -->
                            
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
			include('footer.php');
			?>
       