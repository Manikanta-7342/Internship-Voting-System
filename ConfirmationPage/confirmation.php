
<?php
	include("../DatabaseConnection/dbcon.php");
  session_start();
	session_destroy();
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
    <title>Confirmation page</title>
  </head>
  <body>
    <!-- <div class="logo" style="width:10px"> <img src="images/simplelogo.jfif" alt="logoof siff"></div> -->
   
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <br>
    <br>
    <!-- Tabs Titles -->
    <!-- <h2 class="active"> Home </h2>
  <a href=""><h2 class="inactive underlineHover">Category </h2></a> -->

    <!-- Icon -->
    <div class="back" >
      <img class="fadeIn third" class="responsive" src="images/template.jfif" alt="guitar">
    </div>
    <div class="fadeIn first">
      
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

    <div id="formFooter">
      <a class="underlineHover" href="https://www.youngartiste.com/">@youngartiste2022</a>
    </div>

  </div>
</div>

  </body>
</html>