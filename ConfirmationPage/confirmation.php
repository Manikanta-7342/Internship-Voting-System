<?php
	include("../DatabaseConnection/dbcon.php");
  session_start();
	session_destroy();
    if(!ISSET($_SESSION['voter_id']))
    { ?>
      <script>alert("Sorry You have already Voted");window.location='../index.php'</script>
  <?php  }
  $participant_id=$_REQUEST['myVar'];
		$conn->query("INSERT INTO `votes` VALUES('', $participant_id, '$_SESSION[voter_id]')") or die($conn->error);
		$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voter_id` = '$_SESSION[voter_id]'") or die($conn->error);
		unset($_SESSION);
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/d7741372ca.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="https://competition.youngartiste.com/assets/img/siff.png">
    <title>SIFF | Confirmation </title>
  </head>
  <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <br>
    <br>
    <!-- Icon -->
    <div class="back" >
      <div class="fadeIn first"> 
    <img src="images/young-artiste-colored.png" id="icon" alt="SIFF Voting" />
    </div>
    <div class="first fadeIn third">
       <img src="images/3.png" alt="tick" width="100px" height="100px">
    </div>
    <div class="container">
      <h3 class="fadeIn second" >Congratulations</h3>
      <?php
              require '../DatabaseConnection/dbcon.php';
						   $cat_id=$_REQUEST['myVar'];
               $query1 =mysqli_query($conn,"SELECT p.participant_name,p.category FROM participant p where p.participant_id=$cat_id");
						   $row1=mysqli_fetch_array($query1); ?>
     <p class="fadeIn fourth">Your vote has been confirmed...<br>
       You have voted to <strong><?php echo $row1 ['participant_name']; ?></strong> in <strong><?php echo $row1 ['category']; ?></strong>
     </p> 
    </div>
    <button class="btn" onclick="window.print();"><i class="fa fa-download"></i> Download</button>
    <div id="formFooter">
      <a class="underlineHover" href="https://www.youngartiste.com/">@youngartiste2022</a>
    </div>

  </div>
</div>
    </div>
  </body>
</html>