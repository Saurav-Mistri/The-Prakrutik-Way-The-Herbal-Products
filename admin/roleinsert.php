<?php include("header.php"); 
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
<?php 
	require_once("../config/connection.php");
    $sql="select * from role";
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
                                                <label for="validationCustom01">Role name</label>
                                                <input type="text" name="role" class="form-control" id="validationCustom01" placeholder="First name" value="	" required>
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
		if (isset($_POST["role"]) )
		{
				
			$role1=$_POST["role"];
			
			
			if( $role1!='')
			{

				$sql = "insert into role(role_name)
				values('".$role1."')";
				
				$result=mysqli_query($conn,$sql);

				if($result)
				{
					echo "<meta http-equiv='refresh' content='3;url=role.php'>";
					
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