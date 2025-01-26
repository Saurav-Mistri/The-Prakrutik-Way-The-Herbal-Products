<?php include('header.php');
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
<?php require_once("../config/connection.php");?>
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
							<h4 class="card-header" align="right"><a href="Reports/index.php">Generate Report</a></h4>
							
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
												<th width=130>User name</th>
                                                <th width=200>Address</th>
                                                <th width=100>gender</th>
                                                <th width=150>DOB</th>
												<th width=150>email</th>
												<th width=150>Conatct </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
										   $sql="select u.u_id,a.area_name,u.user_name,u.address,u.gender,u.user_dob, u.email,u.contact_no from user u,area a where u.area_id=a.area_id";
										   $result=mysqli_query($conn,$sql);
										  while($row=mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row["user_name"]."</td>";
		echo "<td>".$row["address"]."</td>";
		//$str =  $row["address"] . " , " . $row["area_name"];
		//echo "<td>". wordwrap($str,15,"<br>") . "</td>";
		echo "<td>".$row["gender"]."</td>";
		echo "<td>".$row["user_dob"]."</td>";
		//$email = $row["email"];
		//echo "<td>".wordwrap($email,10,"<br>",true)."</td>";
		echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["contact_no"]."</td>";

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