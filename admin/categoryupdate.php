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
			$sql="select * from category where c_id = $id";
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
                                                <label for="validationCustom01">category name</label>
                                                <input type="text" name="category" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo $row['c_name'];?>"required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                      <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">category description</label>
                                                <input type="text" name="category1" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo $row['description'];?>" required>
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
						if (isset($_POST["category"]) && isset($_POST["category1"]) ) 
						{
							$category=$_POST["category"];
							$category1=$_POST["category1"];
							if( $category!='' && $category1!='')
							{
						
						$sql="update category set c_name='".$category."',description='".$category1."' where c_id='".$id."'";
								echo $sql;
								
								$result=mysqli_query($conn,$sql);
								
								echo $result;
								
								if($result)
								{
									
									 //header("Location:city.php");
									 echo "<meta http-equiv='refresh' content='0;url=category.php'>";
										
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