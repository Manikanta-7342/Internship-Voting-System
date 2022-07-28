<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://competition.youngartiste.com/assets/img/siff.png">
    <title>Report</title>
</head>

<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include ('side_bar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <hr />
		<div class="panel panel-default" style="border-color:white;">
                        <div class="panel-heading" style="margin-bottom:20px;margin-top:20px;">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading" style="background-color:#de9d4d;border-color:#de9d4d;">
														Voting Report
													</div> 
            </div> 
        </div>
                    <br />
                    <form method="post" action="sort.php">

                        <select name="position" id="position" class="form-control pull-left" style="width:300px;margin-left:19px; ">
                            <option readonly>Sort by Category</option>
                            <?php 
											require '../DatabaseConnection/dbcon.php';
											//$bool = false;
											$query = $conn->query("SELECT * FROM category ORDER BY category_id");
												 while($row = $query->fetch_array()){
													
										?>
								
								<option><?php echo $row ['category'];?></option>
								<?php } ?>
                             </select>

                        &nbsp;
                        &nbsp;
                        <button id="sort" class="btn btn-success">Sort</button>
                        <a href="report_excel.php"><button type="button" style="margin-right:14px; background-color:#de9d4d;border-color:#de9d4d;" id="print" class="pull-right btn btn-info"><i class="fa fa-print"></i>Export to Excel</button></a>

                    </form>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover ">
                            <?php 
											require '../DatabaseConnection/dbcon.php';
                                            
											$query_1 = $conn->query("SELECT * FROM category ");
                                            while($row = $query_1->fetch_array()){
													$category=$row['category'];
                                ?>
                    <thead>
                                <td style="width:600px;" class="alert alert-success">Participants for <?php echo $row ['category'];?>  </td>
                               
                                <td align="center" class="alert alert-success">Total</td>
    </thead>        
										
			<?php
			require '../DatabaseConnection/dbcon.php';
			$query = $conn->query("SELECT * FROM participant WHERE category = '$category'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['participant_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE participant_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
                            <tbody>
                                <td><?php echo $fetch ['participant_name'];?></td>
                                <td style="width:20px; text-align:center"><button class="btn btn-primary" disabled><?php echo $fetch1 ['total'];?></button> </td>
                                <?php }}?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.table-responsive -->
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
