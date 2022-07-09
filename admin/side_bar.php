<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:#de9d4d;">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style = "color:white;font-weight: bold;font-size:30px;"><i class = "fa fa-home fa-large" > </i>Admin Dashboard</a>
				
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php require 'dbcon.php';
				//$query = $conn->query("SELECT * from user where user_id ='$session_id'")or die (mysql_error ());
				
				//while ($row = $query->fetch_array()){
				
				
			 ?>
               
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white">
					<i>Welcome: <?php// echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?></i>
                    </a>
                </li> -->
           
            </ul>
			<?php //}?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <!-- <li>
                            <a href="#"><i class="fa fa-menu fa-fw"></i>Menu </a>
                        </li> -->
                        <li>
                            <a href="candidate.php"><i class = "fa fa-user fa-fw"></i> View Candidates</a>
                         
                        </li>
						<li>
                          <a href="voters.php"><i class = "fa fa-user fa-fw"></i> View Voters</a>
                        </li>
                         <li>
                          <a href="add_category.php"><i class = "fa fa-user fa-fw"></i>Add Category</a>
                        </li>
						 
                        <li>
                            <a href="canvassing.php"><i class="fa fa-download fa-fw"></i>Election Reports</a>
                        </li>
                        <li>
                            <a href="add_candidate_modal.php"> <i class = "fa fa-users" ></i> Add participant</a>
                        </li> 
                        <!-- <li>
                            <a href="login_times.php"> <i class = "fa fa-users" ></i>User Login Time</a>
                        </li> -->
                        <li>
                           <a href="logout.php"> <i class = "fa fa-sign-out" ></i>Logout</a>
                        </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>