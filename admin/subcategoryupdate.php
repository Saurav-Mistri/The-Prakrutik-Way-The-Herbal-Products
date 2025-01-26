<?php include("header.php"); 
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
<?php 
	require_once("../config/connection.php");
    $sql="select * from category";
	$result = mysqli_query($conn,$sql);?>
	<?php

//including the database connection file
//require_once("../config/connection.php");
 
//getting id of the data from url
 if(isset($_GET['id']))
$id = $_GET['id'];
 //selecting the row from table
$sql1="Select * from sub_category where sub_category_id = '".$id."'";
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
                                                <label for="validationCustom01">sub category name</label>
                                                <input type="text" class="form-control" name="subcategory" id="validationCustom01" placeholder="" value="<?php echo $row1['sub_category_name'];?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                          
                                            
                                                <div class="form-group">
                                                   
													  <br>Category name
							<select class="form-control" name="c_id">
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
		if (isset($_POST["subcategory"]) && isset($_POST["c_id"]) )
		{
			$fname=$_POST["subcategory"];
			$desc=$_POST["c_id"];
				
			if($fname!='' && $desc!='')
			{				
				$sql="update sub_category set sub_category_name='".$fname."',c_id='".$desc."'  where sub_category_id = '".$id."'";
				$result=mysqli_query($conn,$sql); 
				if($result)
				{
					
					 echo "<meta http-equiv='refresh' content='3;url=subcategory.php'>";

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