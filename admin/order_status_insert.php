<?php include("header.php"); 
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
<?php 
	require_once("../config/connection.php");
    $sql="select * from order_status";
	$result = mysqli_query($conn,$sql);?>

                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Bootstrap Validation Form</h5>
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" novalidate>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">order status name</label>
                                                <input type="text" name="o_status" class="form-control" id="validationCustom01" placeholder="First name" value="	" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                      
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </div>
                                    </form>
									<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["o_status"]) )
		{
				
			$o_status1=$_POST["o_status"];
			
			
			if( $o_status1!='')
			{

				$sql = "insert into order_status(order_status_name)
				values('".$o_status1."')";
				
				$result=mysqli_query($conn,$sql);

				if($result)
				{
					echo "<meta http-equiv='refresh' content='3;url=order_status.php'>";
					
				}
			}
		}
		else
		{
			echo "value not set";
		}
	}
?>	
			
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>
                    
                        <!-- ============================================================== -->
                        <!-- basic form -->
                      
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include("footer.php"); ?>