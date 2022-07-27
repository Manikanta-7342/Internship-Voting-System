<!DOCTYPE HTML>
<html>
	<head>
	<link rel="icon" type="image/x-icon" href="favicon/TI3.png">
		<title>SIFF Young Artiste</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<?php include("../VideosPage/sess.php")?>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								 <a href="https://www.youngartiste.com"><img src="image/young-artiste-white.png" style="width : 250px; height:auto; background-color: #e0ab68; position : relative; top: 50px;"></a>
								<p style="font-size:50px; position: relative; top:120px;">Select the category you want to vote from the list below:</p>
							</header>
							<section class="tiles">
							<?php
                           require '../DatabaseConnection/dbcon.php';
						   if(ISSET($_SESSION['category_id']))
							   { 
								  unset($_SESSION['category_id']);
							   }
                           $query =mysqli_query($conn,"SELECT * FROM category");
							while($row=mysqli_fetch_array($query))
							{ 
							?>
								<article class="style1">
									<span class="image">
										<img src="<?php echo $row['img']; ?>" alt=""  />
									</span>
									<a href="../VideosPage/videos.php?myVar=<?php echo $row['category_id']; ?>" onclick="POST">
										<h2><?php echo $row['category'];?></h2>
							</a>
								</article>
							<?php } ?>
							</section>
						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
