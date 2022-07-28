<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="https://competition.youngartiste.com/assets/img/siff.png">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIFF | Add_Participant</title>
</head>

<?php include ('head.php');?>
<?php include ('session.php');?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include ('side_bar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
		<hr /> 
				<div class="panel panel-default" style="border-color:white;">
								<div class="panel-heading" style="margin-bottom:20px;margin-top:20px;">
									<h4 class="modal-title" id="myModalLabel">         
														<div class="panel panel-primary">
															<div class="panel-heading" style="background-color:#de9d4d;border-color:#de9d4d;">
																Add Participant
															</div> 
									</h4>
		</div> 
		</div>
			<div class="modal-body">
				<form onsubmit='sav()' method = "post" enctype = "multipart/form-data" >	
					<div class="form-group">
						<label>Select Category:</label>
						<select class = "form-control" name = "position" required>
						<option selected disabled>Select the category group:</option>
						<?php 
											require '../DatabaseConnection/dbcon.php';
											$bool = false;
											$query = $conn->query("SELECT * FROM category ORDER BY category");
												 while($row = $query->fetch_array()){
													$category_id=$row['category_id'];
										?>
								
								<option><?php echo $row ['category'];?></option>
								
								<?php } ?>
							</select>
					
                            </div>
							<div class="form-group">
						<label>Name:</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter the name of the participant:" required="true">
					</div>
							<div class="form-group">
                        <label>Provide Video Link Key:</label>
						<input class="form-control" type="text" name="video" placeholder="Eg:- https://www.youtube.com/watch?v=(KEY)" >
							<br><center><strong>OR</strong></center>
							<label>Upload a Video</label>
						<input class="form-control" type="file" name="file">  
                    </div>
						<center><button name = "save" type="submit" class="btn btn-primary" style="background-color:#de9d4d;border-color:#de9d4d;">Save Data</button></center>
				</form>  
			</div>
            
                            <!-- /.table-responsive -->
							<?php 
				require_once '../DatabaseConnection/dbcon.php';
				
				if (isset ($_POST ['save'])){
					$position=$_POST['position'];		
								
					$firstname=$_POST['firstname'];
					
					$video= $_POST['video'];

					$maxsize = 52428800; // 50MB
			if($video==NULL){
				$target_dir = "videos/";
				$target_file = $target_dir . $_FILES["file"]["name"];

				// Select file type
				$extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Valid file extensions
				$extensions_arr = array("mp4","avi","3gp","mov","mpeg");

				// Check extension
				if( in_array($extension,$extensions_arr) ){
			
					// Check file size
					if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
						 ?><script>alert("File Size should be less than 40MB");</script><?php
					}else{
						// Upload
						if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){ 
						// Insert record

						$query ="INSERT INTO participant(category,participant_name,participant_video,local_video) VALUES('$position','$firstname','".$target_file."','Yes')";
						mysqli_query($conn,$query);?><script>alert("Added Participant Succesfully");window.location='participant.php';</script><?php
						}
						//$_SESSION['message'] = "Upload successfully.";
						
					}

				}
				else{
					?><script>alert("Invalid file extension.");window.history.back();</script><?php 
				}
				
			}
			else{
				$conn->query("INSERT INTO participant values(' ','$position','$firstname','$video','No')")or die($conn->error);
				?><script>alert("Added Participant Succesfully");window.location='participant.php';</script><?php
				}
			
			} 					
			?>	
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    

</body>

</html>


