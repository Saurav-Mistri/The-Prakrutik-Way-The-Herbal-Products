<?php include("header.php"); 
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
<?php 
	require_once("../config/connection.php");
	if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$categoryid=$_GET['categoryid'];
	$sql="select * from subcategory where sub_category_id = '".$id."'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
?>

<?php

$id;
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$sql="select * from sub_category";
			$result=mysqli_query($conn,$sql);
			
			$row=mysqli_fetch_array($result);
		}

?>				
		 
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Bootstrap Validation Form</h5>
                                <div class="card-body">
                                    <form class="needs-validation" method="post" novalidate>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">sub category name</label>
                                                <input type="text" class="form-control" name="subcategory"  id="validationCustom01" placeholder="" value="<?php echo $row['sub_category_name'];  ?>" >
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                          
                                            
                                                <div class="form-group">
                                                   
													  <br>Category name
											<select class="form-control" name="txtcat">
														<?php
														  $sql1="select * from category";
														  $result1=mysqli_query($con,$sql1);
														  
													
													while($row=mysqli_fetch_array($result1))
													{
												?>
													<option value='<?php echo $row['c_id'];?>'
													<?php if($id == $row['c_name'])
														echo "Selected"; ?> >
													<?php echo $row['c_name']; ?> </option>
												<?php	
													}
												?>
													</select>
													  
					
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
								<?php
					if($_SERVER["REQUEST_METHOD"]=="POST")
					{
						if (isset($_POST["subcategory"]) && isset($_POST["c_id"]) )
						{
							$category=$_POST["c_id"];	
							$subcategory=$_POST["subcategory"];;
							if( $category!='' && $subcategory!='')
							{
						
						$sql="update subcategory set c_id='".$category."',sub_category_name='".$subcategory."' where sub_category_id=".$id;
								echo $sql;
								
								$result=mysqli_query($conn,$sql);
								
								echo $result;
								
								if($result)
								{
									
									 //header("Location:city.php");
									 echo "<meta http-equiv='refresh' content='0;url=subcategory.php'>";
										
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
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                      
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include("footer.php"); ?>