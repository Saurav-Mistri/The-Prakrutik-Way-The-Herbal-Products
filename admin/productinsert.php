<?php include("header.php"); ?>
<?php 
	require_once("../config/connection.php");
    $sql="select * from sub_category";
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
                                    <form class="needs-validation" method="post" novalidate>
			 <!--  					<br>Category name
							<select class="form-control" name="c_id">
							<?php
							$sql1="select * from category";
							$result1 = mysqli_query($conn,$sql1);
			while($row1=mysqli_fetch_array($result1))
			{
		?>
			<option value="<?php echo $row1['c_id'];?>">
			<?php echo $row1['c_name']; ?> </option>
		<?php	
			}
		?>
							</select>	-->									
									Sub Category name
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
                                                <input type="text" class="form-control" name="productname" id="validationCustom01" placeholder="" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">product description</label>
                                                <input type="text" class="form-control" name="pdes" id="validationCustom01" placeholder="" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">product price</label>
                                                <input type="text" class="form-control" name="pprice" id="validationCustom01" placeholder="" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">product qty</label>
                                                <input type="text" class="form-control" name="pqty" id="validationCustom01" placeholder="" value="" required>
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

				$sql = "insert into product(sub_category_id,p_name,p_description,p_price,p_qty)
				values('".$cid."','".$pname."','".$des."','".$price."','".$qty."')";
				
				$result=mysqli_query($conn,$sql);

				if($result)
				{
					echo "<meta http-equiv='refresh' content='3;url=product.php'>";
					
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