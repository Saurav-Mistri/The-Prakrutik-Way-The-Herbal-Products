<?php include("header.php"); 
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
<?php 
	require_once("../config/connection.php");
   $id;
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$sql="select * from role";
			$result=mysqli_query($conn,$sql);
			
			$row=mysqli_fetch_array($result);
		}
		?>

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
					if($_SERVER["REQUEST_METHOD"]=="POST")
					{
						if(isset($_POST["role"]))
						{
							$role_Name=$_POST["role"];
							if($role_Name!='')
							{
						
						$sql="update role set role_name='".$role_Name."' where role_id='".$id."'";
								echo $sql;
								
								$result=mysqli_query($conn,$sql);
								
								echo $result;
								
								if($result)
								{
									 //header("Location:city.php");
									 echo "<meta http-equiv='refresh' content='0;url=role	.php'>";
										
								}
							}
						}
						else
						{
							echo "value is null";
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