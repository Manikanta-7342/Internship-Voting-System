<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <hr/>
        <div id="page-wrapper">
        <div class="panel panel-default" style="border-color:white;">
                        <div class="panel-heading" style="margin-bottom:20px;">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading" style="background-color:#de9d4d;border-color:#de9d4d">
														Voters List
													</div>  
</div>
												</div>
				<?php 
					$count = $conn->query("SELECT COUNT(*) as total FROM `voters`")->fetch_array();
					$count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted'")->fetch_array();
                    $count3 = $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `gender` = 'Male' ")->fetch_array();
                    $count4 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `gender` = 'Female'")->fetch_array();
					?>
				<button><i class = "fa fa-paw"></i> All Voters (<?php echo $count['total']?>)</button>
				<button><i class = "fa fa-paw"></i> Voted(<?php echo $count1['total']?>)</button>
				<button><i class = "fa fa-paw"></i> Unvoted(<?php echo $count2['total']?>) </button>
                <button><i class = "fa fa-paw"></i> Males(<?php echo $count3['total']?>)</button>
                <button><i class = "fa fa-paw"></i> Females(<?php echo $count4['total']?>)</button>
                 <a href="voters_excel.php"><button type="button" style = "margin-right:14px; background-color:#de9d4d;border-color:#de9d4d;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>Export Voters to Excel</button></a>
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				
				<!-- <a  href = "activate_accounts.php"class = "btn btn-danger btn-outline pull-right" style = "margin-right:12px;" name = "go"><i>Activate Voter Accounts</i> </a>
				<a  href = "deactivate_accounts.php"class = "btn btn-danger btn-outline pull-right" style = "margin-right:12px;" name = "go"><i>Deactivate Voter Accounts</i> </a> -->
                
				<br />
				<br />
				
				
				
                    <div class="panel panel-default">
                    
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        
                                            <th>Voter ID</th>
                                            <th>Names</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Contact Number</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            require 'dbcon.php';
                                            
                                            $query = $conn->query("SELECT * FROM voters ORDER BY voter_id DESC");
                                            while($row1 = $query->fetch_array()){
                                            $voters_id=$row1['voter_id'];
                                            $query1 = $conn->query("SELECT c.category from votes v,participant c,voters v1 where v.voter_id=$voters_id and v.participant_id =c.participant_id");
                                            $row2 = $query1->fetch_array();
                                        ?>
                                      
                                            <tr >
                                                <td><?php echo $row1 ['voter_id'];?></td>
                                                <td><?php echo $row1 ['name'];?></td>
                                                <td><?php echo $row1 ['gender'];?></td>
                                                <td><?php echo $row1 ['age'];?></td>
                                                <?php
                                                    if($row2==NUll)
                                                    {?>
                                                        <td>Not Voted</td>
                                                        <?php }
                                                        else{?>
                                                <td><?php echo $row2 ['category'] ;}?></td>
                                                <td><?php echo $row1 ['status'];?></td>
                                                <td><?php echo $row1 ['ph_no'];?></td>       
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
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

