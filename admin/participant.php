<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include ('side_bar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                
				<hr/>
				
                    <div class="panel panel-default" style="border-color:white;">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading" style="background-color:#de9d4d;border-color:#de9d4d">
														Participant List
													</div>  
                                                      
												</div>
                                                <a href="participant_excel.php"><button type="button" style = "margin-right:14px; background-color:#de9d4d;border-color:#de9d4d; margin-top:30px;margin-bottom:30px " id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>Export to Excel</button></a>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">Category</th>
                                            <th style="text-align:center">Participant_Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
                                            
										<?php 
											require '../DatabaseConnection/dbcon.php';
											$bool = false;
											$query = $conn->query("SELECT * FROM participant ORDER BY participant_id DESC");
												while($row = $query->fetch_array()){
													$candidate_id=$row['participant_id'];
										?>
											
											<td><?php echo $row ['category'];?></td>
                                            <td style="text-align:center"><?php echo $row ['participant_name'];?></td>
                                            
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
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
    
</body>

</html>

