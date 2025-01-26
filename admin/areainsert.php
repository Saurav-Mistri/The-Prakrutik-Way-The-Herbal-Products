<?php include("header.php"); 
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
<?php 
	require_once("../config/connection.php");
    $sql="select * from city";
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
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Area name</label>
                                                <input type="text" class="form-control" name="area" id="validationCustom01" placeholder="" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                          
                                            
                                                <div class="form-group">
                                                   
													  <br>City name
							<select class="form-control" name="city_id">
							<?php
			while($row=mysqli_fetch_array($result))
			{
		?>
			<option value="<?php echo $row['city_id'];?>">
			<?php echo $row['city_name']; ?> </option>
		<?php	
			}
		?>
							</select>
							</select></div></div>
							</div>
							<div class="form-group">					
							
							
							<div class="form-group">					
							
							
							
							
						
							
							
							
		<button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button> 
							
							</form>
							</div><!-- end card-box --></div><!-- end col -->
					<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if (isset($_POST["area"]) && isset($_POST["city_id"]) )
		{
			$category=$_POST["area"];	
			$subcategory=$_POST["city_id"];
			
			
			if($category!='' && $subcategory!='' )
			{

				$sql = "insert into area(area_name,city_id)
				values('".$category."','".$subcategory."')";
				
				$result=mysqli_query($conn,$sql);

				if($result)
				{
					echo "<meta http-equiv='refresh' content='3;url=area.php'>";
					
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