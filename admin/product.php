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
                            <h5 class="card-header">Basic Table</h5>
							
                            <div class="card-body">
							<a href="productinsert.php">Add Record</a>&nbsp;&nbsp;&nbsp;
							
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th width=160>Sub_Category Name</th>
                                                <th>Product name</th>
												<th width=400>Product Description</th>
												
												<th width=110>Product Price</th>
												<th width=135>Product Quantity</th>
												<th width=80>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
						$sql="select p.p_id,p.p_name,p.p_description,p.p_price,p.p_qty,s.sub_category_name from 
						product p,sub_category s where p.sub_category_id=s.sub_category_id";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($result))
	{
		$id = $row['p_id'];
		echo "<tr>";
		echo "<td>".$row["sub_category_name"]."</td>";
		echo "<td>".$row["p_name"]."</td>";
		echo "<td>".$row["p_description"]."</td>";
		echo "<td>".$row["p_price"]."</td>";
		echo "<td>".$row["p_qty"]."</td>";
		?>
		
			<td>
			<a href="productdelete.php?id=<?php echo $id?>"> <img src="delete.png" height="20"> </a>
			<a href="productupdate.php?id=<?php echo $id?>"> <img src="update.png" height="20"> </a>
		</td>
		
		
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