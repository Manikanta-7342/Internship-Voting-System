<!DOCTYPE HTML>
<html>
	<head>
	<link rel="icon" type="image/x-icon" href="https://competition.youngartiste.com/assets/img/siff.png">
		<title>SIFF Young Artiste</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <title>SIFF | Categories  </title>
  
		<style>
			body{
				background-color: rgb(241,240,219);
			}
 .logo123{
	width:200px;
	padding-top:50px;
	z-index: 1;
	
	
 }
 .dot123{
	width:200px;
	padding-top:50px;
	z-index: 1;
	margin-left: 50%;
	
 }
 .flute1234{
	
  position:absolute;
 
  width:150px;
  height:850px;
  bottom: 20%;
  margin-top:30%;
  margin-left:45%;
 
  z-index: -1;
  -ms-transform: rotate(270deg); /* IE 9 */
  transform: rotate(270deg);

 }
 @media only screen and (max-width: 800px) {
	.flute1234{
		/* width:100px;
  height:300px;
  margin-top:35%;
  margin-right: 10%;
  margin-left: 30%; */
visibility: hidden;
	}
	.logo12345{
		display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
	}
 }
</style>
	</head>
	<?php include("../VideosPage/sess.php")?>
	<body class="is-preload">
		
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								 <a  href="../index.php"><img class="logo12345"src="image/young-artiste-colored.png" style="width : 250px; height:auto; position : relative; top: 50px;"></a>
								 <pre>    <img  class="flute1234" src="https://competition.youngartiste.com/assets/img/categories.png" alt="flute"></a></pre>
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
