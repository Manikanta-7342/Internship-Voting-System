<!DOCTYPE HTML>
<html>
	<head>
		<title>Categories</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<!-- <div class="inner">

							<!- Logo ->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>

							<!- Nav ->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div> -->
						
					</header>


				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								
								<h1>SIFF<br />
								
								 <a href="https://www.youngartiste.com">YOUNG ARTISITE</a>.</h1>
								<p>Select the required category to vote for in this voting contest.</p>
							</header>
							<section class="tiles">
							<?php
                           require 'dbcon.php';
						   
                           $query =mysqli_query($conn,"SELECT * FROM category");
							while($row=mysqli_fetch_array($query))
							{ 
							?>
							
								<article class="style1" value=""   >
								
									<span class="image">
										<img src="<?php echo $row['img']; ?>" alt=""  />
									</span>
									<a href="VideosPage/videos.php?myVar=<?php echo $row['category_id']; ?>" onclick="POST">
										<h2><?php echo $row['category'];?></h2>
										<!-- <div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div> -->
							</a>
							
							
								</article>
							<?php } ?>
							</section>
						</div>
					</div>

				<!-- Footer -->
					
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function page()
				{
					window.location='try.php';
				}
				</script>
	</body>
</html>
