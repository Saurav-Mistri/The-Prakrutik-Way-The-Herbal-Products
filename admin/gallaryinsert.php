<?php include("header.php"); 
if(!isset($_SESSION['user_name']))
{
	echo "<meta http-equiv='refresh' content='0; url=pages/login.php'>";
}
?>
<?php 
	require_once("../config/connection.php");
    $sql="select * from product";
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
                                    <form class="needs-validation" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">image path</label>
                                                <input type="file" class="form-control" name="ipath" id="validationCustom01" placeholder="" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
													</div>
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                          
                                            
                                                <div class="form-group">
                                                   
													  <br>product name
							<select class="form-control" name="p_id">
							<?php
							
			while($row=mysqli_fetch_array($result))
			{
		?>
			<option value="<?php echo $row['p_id'];?>">
			<?php echo $row['p_name']; ?> </option>
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
		if (isset($_FILES["ipath"]) && isset($_POST["p_id"]) )
		{
				
			$pid1=$_POST["p_id"];
			
			$file_name = $_FILES['ipath']['name'];
			$file_tmp = $_FILES['ipath']['tmp_name'];
			
			if($pid1!='' )
			{
			if(move_uploaded_file($file_tmp,"../client tamplate/demo.hasthemes.com/naturecircle-v2/naturecircle/assets/img/product/".$file_name)==1)
			{		
				$sql = "insert into gallery(img_path,p_id)
				values('".$file_name."','".$pid1."')";
					
				$result=mysqli_query($conn,$sql);

				if($result)
				{
					echo "<meta http-equiv='refresh' content='3;url=gallery.php'>";
					
				}
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