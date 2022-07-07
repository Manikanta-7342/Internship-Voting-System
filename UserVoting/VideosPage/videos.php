<!DOCTYPE HTML>
<html>
	<head>
		<title>Videos Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript> -->
	</head>
	<body class="is-preload">
	
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					

				<!-- Main -->
					<div id="main">
					<?php
                           require 'dbcon.php';
						   $cat_id=$_REQUEST['myVar'];
                           $query1 =mysqli_query($conn,"SELECT p.category FROM participant p,category c where c.category_id=$cat_id and c.category=p.category");
						   $row1=mysqli_fetch_array($query1);
						   ?>
					<header id="header">
						<h1><a href="/Users/puttu/Downloads/login page- internship/videos.html"><strong>Category: <?php echo $row1 ['category']; ?></strong> </a></h1>
						
					</header> 
					<?php
                          $query =mysqli_query($conn,"SELECT p.category, p.participant_video,p.participant_name,p.participant_id FROM participant p,category c where c.category_id=$cat_id and c.category=p.category");
							while($row=mysqli_fetch_array($query))
							{ 
							?>
						<article class="thumb">
							<iframe width="450px" height="245px" src="https://www.youtube.com/embed/m87B0ulgN64" ></iframe>
							<h2>Participant Name:<?php echo $row['participant_name'];?></h2>
							<!-- <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.<br/> -->
							<a href="VideosPage/videos.php?myVar=<?php echo $row['participant_id']; ?>" onclick="POST">
							<button type="button" name="VOTE" style="color:black; float: right;top:5px">VOTE</button></p>
							</a>
						</article>
						<?php } ?>
						<!-- <article class="thumb">
							<a href="https://www.youtube.com/watch?v=cRfI3UzHf7E" class="image"><img src="https://www.youtube.com/watch?v=cRfI3UzHf7E" alt="" /></a>
							<h2>Name: </h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.<br/>
							<button type="button" name="VOTE" style="color:black; position: relative;top:15px;">VOTE</button></p>
						</article>
						 -->
					</div>

				<!-- Footer -->
					

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
