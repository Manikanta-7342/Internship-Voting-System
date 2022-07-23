
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>
      
        <!-- Page Content -->
        <div id="page-wrapper"><hr/>
            <div class="row">
            <div class="panel panel-default" style="border-color:white;">
                <div class="panel-heading" style="margin-bottom:20px;">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading" style="background-color:#de9d4d;border-color:#de9d4d">
														Voted List
													</div>  
							                   </div>
                                            </h4>
                        </div>
				<?php 
					$count = $conn->query("SELECT COUNT(*) as total FROM `voters`")->fetch_array();
					$count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted' ")->fetch_array();
                    $count3 = $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `gender` = 'Male'  AND `status` =  'Voted' ")->fetch_array();
                    $count4 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `gender` = 'Female' AND `status` =  'Voted' ")->fetch_array();
				?>
				<a href="voters.php" class = "btn btn-primary btn-outline"><i class = "fa fa-paw"></i> ALL Voters (<?php echo $count['total']?>)</a>
				<a href="voted.php" class = "btn btn-success btn-outline"><i class = "fa fa-paw"></i> Voted(<?php echo $count1['total']?>)</a>
				<a href="unvoted.php" class = "btn btn-danger btn-outline"><i class = "fa fa-paw"></i> Unvoted(<?php echo $count2['total']?>) </a><p><br clear = all><p/>
                <label  ><i class = "fa fa-paw"></i> Males(<?php echo $count3['total']?>)</label> <br/>
                <label ><i class = "fa fa-paw"></i> Females(<?php echo $count4['total']?>)</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				 
				<br/>
                <!-- /.col-lg-12 -->
				<hr/>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Voter ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Category</th>
                                            <th>Participant Name</th>
                                            <th>Contact Number</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                      
										<?php 
										require '../DatabaseConnection/dbcon.php';
										$query = $conn->query("SELECT * FROM voters where status = 'Voted'");
										while($row1 = $query->fetch_array()){
											$voters_id=$row1 ['voter_id'];
                                            $query1 = $conn->query("SELECT c.category,c.participant_name from votes v,participant c,voters v1 where v.voter_id=$voters_id and v.participant_id =c.participant_id");
                                            $row2 = $query1->fetch_array();
										?>
										 <tr >
                                            <td><?php echo $row1 ['voter_id'];?></td>
                                                <td><?php echo $row1 ['name'];?></td>
                                                <td><?php echo $row1 ['gender'];?></td>
                                                <td><?php echo $row1 ['age'];?></td>
                                                <td><?php echo $row2 ['category'] ;?></td>
                                                <td><?php echo $row2 ['participant_name'] ;?></td>
                                                <td><?php echo $row1 ['ph_no'];?></td>
                                                <td><?php echo $row1 ['email'];}?></td> 
                                        </tr>
                                        
                                       <?php
											
									   ?>
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
    <?php //include ('edit_voters_modal.php');?>
	
</body>

</html>