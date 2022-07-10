<!DOCTYPE HTML>

<html>
	<head>
		<title>Categories</title>
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
								<h1>SIFF<br />
								 <a href="https://www.youngartiste.com">YOUNG ARTISITE</a></h1>
								<p>Select the required category to vote for in this voting contest.</p>
							</header>
							<section class="tiles">
							<?php
                           require '../DatabaseConnection/dbcon.php';
						   
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
