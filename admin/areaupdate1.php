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
	<?php

//including the database connection file
//require_once("../config/connection.php");
 
//getting id of the data from url
 if(isset($_GET['id']))
$id = $_GET['id'];
 
//selecting the row from table
$sql1="Select * from area where Area_Id = '".$id."'";
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
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">Area name</label>
                                                <input type="text" class="form-control" name="area" id="validationCustom01" placeholder="" value="<?php echo $row1['area_name'];?>" required>
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
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
							
							</form>
							</div><!-- end card-box --></div><!-- end col -->
							
						
							
							
							
		
					<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		if (isset($_POST["area"]) && isset($_POST["city_id"]) )
		{
			$fname=$_POST["area"];
			$desc=$_POST["city_id"];
				
			if($fname!='' && $desc!='')
			{				
				$sql="update area set Area_Name='".$fname."',City_Id='".$desc."'  where Area_Id = '".$id."'";
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=area.php'>";

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
			`
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