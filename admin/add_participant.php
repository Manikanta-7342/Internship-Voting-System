


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
		</div> 
		</div>
			
			<div class="modal-body">
				<form onsubmit='sav()' method = "post" enctype = "multipart/form-data" >	
					<div class="form-group">
						<label>Select Category:</label>
						<select class = "form-control" name = "position" required>
						<option selected disabled>Select Category Group</option>
						<?php 
											require '../DatabaseConnection/dbcon.php';
											$bool = false;
											$query = $conn->query("SELECT * FROM category ORDER BY category_id DESC");
												 while($row = $query->fetch_array()){
													$category_id=$row['category_id'];
										?>
								
								<option><?php echo $row ['category'];?></option>
								
								<?php } ?>
							</select>
					
                            </div>
							<div class="form-group">
						<label>Name:</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter Name" required="true">
					</div>
							<div class="form-group">
                        <label>Provide Video Link Key:</label>
						<input class="form-control" type="text" name="video" placeholder="Eg:- https://www.youtube.com/watch?v=(KEY)" required> 
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
					
					$conn->query("INSERT INTO participant(category,participant_name,participant_video)values('$position','$firstname','$video')")or die($conn->error);
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

    <script>
	function sav(){
		alert("Successfully saved");
		window.location='participant.php';
	}
	</script>

</body>

</html>


