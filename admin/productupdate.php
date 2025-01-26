<?php include("header.php"); 
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
<?php 
	require_once("../config/connection.php");
    $sql="select * from sub_category";
	$result = mysqli_query($conn,$sql);?>
	<?php

//including the database connection file
//require_once("../config/connection.php");
 
//getting id of the data from url
 if(isset($_GET['id']))
$id = $_GET['id'];
 
	//selecting the row from table
	$sql1="Select * from product where p_id = '".$id."'";
	$result1=mysqli_query($conn,$sql1);

	$row1 = mysqli_fetch_array($result1);
 
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
                                    <form class="needs-validation" method="post" novalidate>
									<br>Sub Category name
							<select class="form-control" name="c_id">
							<?php
							
			while($row=mysqli_fetch_array($result))
			{
		?>
			<option value="<?php echo $row['sub_category_id'];?>">
			<?php echo $row['sub_category_name']; ?> </option>
		<?php	
			}
		?>
							</select>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">product name</label>
                                                <input type="text" class="form-control" name="productname" id="validationCustom01" placeholder="" value="<?php echo $row1['p_name'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">product description</label>
                                                <input type="text" class="form-control" name="pdes" id="validationCustom01" placeholder="" value="<?php echo $row1['p_description'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">product price</label>
                                                <input type="text" class="form-control" name="pprice" id="validationCustom01" placeholder="" value="<?php echo $row1['p_price'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">product qty</label>
                                                <input type="text" class="form-control" name="pqty" id="validationCustom01" placeholder="" value="<?php echo $row1['p_qty'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                          
                                            
                                                <div class="form-group">
                                                   
													  
                                            </div>
											 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                          
                                            
                                                <div class="form-group">
                                                   
													 
							<?php
							
			while($row=mysqli_fetch_array($result))
			{
		?>
			<option value="<?php echo $row['c_id'];?>">
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
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (isset($_POST["c_id"]) && isset($_POST["productname"]) && isset($_POST["pdes"]) && isset($_POST["pprice"]) && isset($_POST["pqty"]))		
	{
		$cid=$_POST["c_id"];	
			$pname=$_POST["productname"];
			$des=$_POST["pdes"];	
			$price=$_POST["pprice"];
			$qty=$_POST["pqty"];	
				
			if($cid!='' && $pname!='' && $des!='' && $price!='' && $qty!='')
			{				
				$sql="update product set sub_category_id='".$cid."',p_name='".$pname."',p_description='".$des."',p_price='".$price."',p_qty='".$qty."'     where p_id = '".$id."'";
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=product.php'>";

				}
			}
			else
			{
					echo "Value is null";
			}
		}
		else
		{
				echo "Value not set";
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