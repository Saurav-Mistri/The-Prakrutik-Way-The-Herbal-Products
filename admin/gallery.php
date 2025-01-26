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
                            <h5 class="card-header">Poduct Gallery
							&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="gallaryinsert.php">
								<button class="btn btn-primary" type="submit">Insert Image</button></a>
							</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Image path</th>
												<th>Product Name</th>
												<th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
										   $sql="select g.img_id,g.img_path,p.p_name 
										   from gallery g,product p where g.p_id=p.p_id";
										   $result=mysqli_query($conn,$sql);
										  while($row=mysqli_fetch_array($result))
	{
		$id = $row['img_id'];
		echo "<tr>";
		echo "<td>";?>
		
		<img src="../client tamplate/demo.hasthemes.com/naturecircle-v2/naturecircle/assets/img/product/<?php echo $row['img_path']?>" height="180">
		
		<?php 
		echo "</td>";
		echo "<td>".$row["p_name"]."</td>";
		
		?>
					<td><center>
			<a href="gallarydelete.php?id=<?php echo $id?>"> <img src="delete.png" height="20"> </a></center>
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