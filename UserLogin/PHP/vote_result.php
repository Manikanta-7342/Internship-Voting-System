<?php include ('head.php');?>


<body>
    
    <div id="row">
        <?php require 'dbcon.php';
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pm_id']))
					{
						$_SESSION['pm_id'] = "";
					}
					else
					{
						$_SESSION['pm_id'] = $_POST['pm_id'];
					}
					
				}
		?>
    </div>
    <center>
        <div class="col-lg-8" style="margin-left:25%; margin-right:25%;">
            <div class="alert alert-info">
                <!-- <div class="panel-heading">
                    <center>Carnatic Vocal</center>
                </div> -->
                <br />
                <?php
				if(!$_SESSION['pm_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `participant` WHERE `participant_id` = '$_SESSION[pm_id]'")->fetch_array();
						
						echo $fetch['participant_name'];
					}
			?>
            </div>
            <br />
        </div>
    </center>
    <div class="modal-body">
        <p>
            <center>Are you sure you want to submit your Vote? </center>
        </p>
    </div>

    <div class="modal-footer">
        <center>
            <a href="submit_vote.php"><button type="submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
            <a href="category.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
        </center>
    </div>
    <!-- /.modal-content -->

    <!-- /.modal-dialog -->


</body>

<?php include ('script.php');
//include ('footer.php');?>

</html>
