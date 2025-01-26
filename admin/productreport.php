<?php require_once("../config/connection.php");?>
<?php include("header.php");
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
$sql="SELECT u.user_name , p.p_name , item.c_qty , item.amnt FROM order_item item join order_master o 
						join product p join user u where item.o_id = o.o_id and item.p_id = p.p_id and o.u_id = u.u_id";

$flag=0;						
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$pid = $_POST["c_id"];
	
	$sql = $sql . " and p.p_id=$pid";
	
	$flag=1;
}	
?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
     
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Tables</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Product Report</h5><h5 class="card-header">
					<form method="post">
					<select class="form-control" name="c_id">
						<?php
							$sql1="select * from product";
							$result1 = mysqli_query($conn,$sql1);
							while($row1=mysqli_fetch_array($result1))
							{
						?>
							<option value="<?php echo $row1['p_id'];?>">
							<?php echo $row1['p_name']; ?> </option>
							
						<?php	
							}
						?>
					</select>
					<br>
					<button class="btn btn-primary" type="submit">Filter</button></h5>
					</form>
					
					<?php
						if($flag==0)
						{
								$str = "Reports/index3.php";
						}
						else
						{
							$str = "Reports/index3.php?id=$pid";	
						}
					?>
							<h4 class="card-header" align="right"><a href=<?php echo $str;?>>Generate Report</a></h4>
                            <div class="card-body">
							
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                
												<th>User Name</th>
												<th>Product name</th>
												<th>Quantity</th>
												<th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
						
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row["user_name"]."</td>";
		echo "<td>".$row["p_name"]."</td>";
		echo "<td>".$row["c_qty"]."</td>";
		echo "<td>".$row["amnt"]."</td>";
		?>
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
                    <!-- end basic table  -->
                
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include("footer.php");?>