


    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="index1.css">
<script src="index.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<?php 
// Include the database config file 
include_once 'dbcon.php'; 
 
if(!empty($_POST["country_id"])){ 
    // Fetch state data based on the specific country 
    $query =  mysqli_query($conn,"SELECT * FROM participant WHERE category_id = ".$_POST['country_id']." "); 
   
     
    // Generate HTML of state options list 
    
        while($row=mysqli_fetch_array($query)){ ?>
        <div>
        
        <div class="space-medium">
        <div class="">
        <div class="">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12">
                    <div class="video-testimonial-block">
                        
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" >
                            </iframe>
                        </div>
                        <!-- <a href="#" class="video-play"></a> -->
                    </div>
                    <div class="video-testimonial-content">
                        <h4 class="mb10"><?php echo $row['participant_name'];?></h4>
                        <p>Student Loan</p>
                        <center><input type = "checkbox" value = " <?php echo $row['participant_id']; ?>" name="pm_id" class="cm" style="font-size:30px;" >Give Vote</center>
                    </div>
                </div>
               <!-- <center><img src = "admin/<//?php echo $row['img'];?>" style ="border-radius:6px;" height = "150px" width = "150px" ></center><br/>
            <center><strong>Name: </strong><br/><strong>Gender: </strong> <//?php echo $row['gender'];?><br/><strong>Age: </strong> <//?php echo $row['Age'];?><br/></center><br/> -->
                            </div>           </div></div>        </div>
        </div>
           <?php }}?>
           <center><button class = "btn btn-success ballot" type = "submit" name = "submit" style="background-color: #2c264a;">Submit Ballot</button></center>
           <script type = "text/javascript">
	$(document).ready(function(){
			$(".cm").on("change", function(){
				if($(".cm:checked").length == 1)
					{
						$(".cm").attr("disabled", "disabled");
						$(".cm:checked").removeAttr("disabled");
					}
				else
					{
						$(".cm").removeAttr("disabled");
					}
			});
			
			
		});	
	</script>

    



    
							
							
							