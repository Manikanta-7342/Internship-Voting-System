<!DOCTYPE HTML>

<html>
	<head>
		<title>Videos Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript> -->
	</head>
	<?php include("sess.php");?>
	<body class="is-preload">
	
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
				<!-- Main -->
					<div id="main">
					<?php
                           require '../DatabaseConnection/dbcon.php';
						 	
							   if(!ISSET($_REQUEST['myVar']))
							   { ?>
								   <script>window.location='../UserVoting/category.php';</script>
							<?php   }
							   else
							   {
								   $_SESSION['category_id'] = $_REQUEST['myVar'];
							   }
						   $cat_id=$_SESSION['category_id'];
                           $query1 =mysqli_query($conn,"SELECT category FROM `category` where `category_id`='$cat_id' ") or die ($conn->error);
						   $row1=mysqli_fetch_array($query1);

						   ?>
					<header id="header">
						<h1><a href="/Users/puttu/Downloads/login page- internship/videos.html"><strong>Category: <?php echo $row1 ['category']; ?></strong> </a></h1>
						
					</header> 
					<?php
                          $query =mysqli_query($conn,"SELECT p.category, p.participant_video,p.participant_name,p.participant_id FROM participant p,category c where c.category_id= '$cat_id' and c.category=p.category") ;
							while($row=mysqli_fetch_array($query))
							{ 
							?>
							
						<article class="thumb">
							<iframe width="100%" height="80%" src="https://www.youtube.com/embed/<?php echo $row['participant_video']?>" ></iframe>
							<h2 style="font-family:sans-serif; position:relative; top:10px;">Participant Name:<?php echo $row['participant_name'];?></h2>
							<!-- <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.<br/> -->
							<form method="POST" action="vote_confirmation.php">
							
							<button type="submit" value="<?php echo $row['participant_id']; ?>" name="submit" style="color:black; position:relative; left: 70%; bottom:15px;">VOTE</button></p>
							</form>
						</article>
						<?php } ?>
					</div>

			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
