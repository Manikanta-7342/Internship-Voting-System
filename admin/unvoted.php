<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="UserLogin/CSS/index.css">
    <link rel="icon" type="image/x-icon" href="https://competition.youngartiste.com/assets/img/siff.png">
    <title>Unvoted </title>
  </head>
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
														Unvoted List
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
				<a href="voters.php" class = "btn btn-primary btn-outline"> ALL Voters (<?php echo $count['total']?>)</a>
				<a href="voted.php" class = "btn btn-success btn-outline"> Voted(<?php echo $count1['total']?>)</a>
				<a href="unvoted.php" class = "btn btn-danger btn-outline"> Unvoted(<?php echo $count2['total']?>) </a>
                <a href="unvoted_excel.php"><button type="button" style = "margin-right:14px; background-color:#de9d4d;border-color:#de9d4d;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>Export to Excel</button></a>
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <br/><br/>
                <label  ><i class = "fa fa-male"></i> Males(<?php echo $count3['total']?>)</label> <br/>
                <label ><i class = "fa fa-female"></i> Females(<?php echo $count4['total']?>)</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				 
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
                                            <th>Contact Number</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                      
										<?php 
										require '../DatabaseConnection/dbcon.php';
										$query = $conn->query("SELECT * FROM voters where status = 'Unvoted'");
										while($row1 = $query->fetch_array()){
											$voters_id=$row1 ['voter_id'];
                                            $query1 = $conn->query("SELECT c.category from votes v,participant c,voters v1 where v.voter_id=$voters_id and v.participant_id =c.participant_id");
                                            $row2 = $query1->fetch_array();
										?>
										 <tr >
                                            <td><?php echo $row1 ['voter_id'];?></td>
                                                <td><?php echo $row1 ['name'];?></td>
                                                <td><?php echo $row1 ['gender'];?></td>
                                                <td><?php echo $row1 ['age'];?></td>
                                                <td>Not Voted</td>
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

