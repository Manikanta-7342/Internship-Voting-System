<!DOCTYPE HTML>
<html>
	<head>
		<title>Categories</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <style type="text/css">
            
</style>
    </head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					


				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								
								<h1>SIFF<br />
								
								 <a href="https://www.youngartiste.com">YOUNG ARTISITE</a>.</h1>
								<p>Select the required participant to vote for in this voting contest.</p>
							</header>
							<section class="tiles">
							<?php
                           require 'dbcon.php';
                           $cat_id=$_REQUEST['myVar'];
                           $query =mysqli_query($conn,"SELECT p.participant_video,p.participant_name,p.participant_id FROM participant p,category c where c.category_id=$cat_id and c.category=p.category");
							while($row=mysqli_fetch_array($query))
							{ 
							?>
								<article class="style1" >
								
									<span class="video">
										<iframe src="<?php echo $row['participant_video']; ?>" >
                            </iframe>
									</span><br>
									<input id="inplock" value = " <?php echo $row['participant_id']; ?>" name="pm_id" class="cm" type="checkbox">Give Vote
                                <label for="inplock">
    							</label>

                            <h2><?php echo $row['participant_name'];?></h2>
								</article>
							<?php } ?>
							</section>
                            <center><button class = "btn btn-success ballot" type = "submit" name = "submit" style="background-color: #2c264a;">Submit Ballot</button></center>
						</div>
					</div>

				<!-- Footer -->
					

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

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
			
	</body>
</html>
