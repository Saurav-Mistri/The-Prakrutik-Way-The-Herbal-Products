<?php require_once("../config/connection.php");?>
<?php include("header.php");
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
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
                            <h5 class="card-header">Total Order</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
												<th>Order ID</th>											
                                                <th>User Name</th>
												<th>Order Date</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
										 $sql="select * from order_master o, user u where o.u_id=u.u_id";
										   $result=mysqli_query($conn,$sql);
										  while($row=mysqli_fetch_array($result))
	{
		$oid=$row['o_id'];
		echo "<tr>";
		echo "<td>".$row["o_id"]."</td>";
		echo "<td>".$row["user_name"]."</td>";
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
                    <!-- end basic table  -->
                
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include("footer.php");?>