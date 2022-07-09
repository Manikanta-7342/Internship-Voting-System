
<?php include ('head.php');?>

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
														Add Category
													</div>  
</div>
												</div>
                        <!-- /.panel-heading -->
								<div class="modal-body">
				<form onsubmit="sav()"  method = "post" enctype = "multipart/form-data" >	
					<div class="form-group">
						
					
                            </div>
							<div class="form-group">
						<label>Category Name:</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter Category Name" required=>
					</div>
							<div class="form-group">
                        <label>Upload Image:</label>
						<input type="file" name="file"required> 
                    </div>
						<center><button name = "save" type="submit" class="btn btn-primary" style="background-color:#de9d4d;border-color:#de9d4d;">Save Data</button></center>
				</form>  
			</div>
            
                            <!-- /.table-responsive -->
							<?php 
				require_once '../DatabaseConnection/dbcon.php';
				
				if (isset ($_POST ['save'])){
					$category=$_POST['firstname'];					
					
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
		
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$location="image/" . $_FILES["image"]["name"];
					
					
					$conn->query("INSERT INTO category(category,img)values('$category','$location')")or die($conn->error);
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
