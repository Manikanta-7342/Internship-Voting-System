<?php
	include("../dbcon.php");
  session_start();
	session_destroy();
  $participant_id=$_REQUEST['myVar'];
		$conn->query("INSERT INTO `votes` VALUES('', $participant_id, '$_SESSION[voter_id]')") or die($conn->error);
		$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voter_id` = '$_SESSION[voter_id]'") or die($conn->error);
		
		
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/d7741372ca.js" crossorigin="anonymous"></script>
    <title>confirmation page</title>
  </head>
  <body>
    <!-- <div class="logo" style="width:10px"> <img src="images/simplelogo.jfif" alt="logoof siff"></div> -->
   
    <div class="wrapper fadeInDown">
  <div id="formContent">
    
    <!-- Tabs Titles -->
    <!-- <h2 class="active"> Home </h2>
  <a href=""><h2 class="inactive underlineHover">Category </h2></a> -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="https://www.youngartiste.com/assets/img/young-artiste-logo-white.png" id="icon" alt="User Icon" />
       -->
       <div class="circle"><i class="fa-solid fa-check fa-5x"></i></div>
       
    </div>
    <div class="back" >
      <img class="fadeIn third" src="images/template.jfif" alt="guitar">
    </div>
    <div class="container">
      <h3 class="fadeIn second" >Congratulations</h3>
      <?php
                           require '../dbcon.php';
						   $cat_id=$_REQUEST['myVar'];
               $query1 =mysqli_query($conn,"SELECT p.participant_name,p.category FROM participant p where p.participant_id=$cat_id");
						   $row1=mysqli_fetch_array($query1); ?>
     <p class="fadeIn fourth">Your vote has been confirmed...<br>
       You have voted to <strong><?php echo $row1 ['participant_name']; ?></strong> in <?php echo $row1 ['category']; ?>
     </p> 
    </div>
    

    <!-- Login Form -->
    <!-- <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="mobile number">
      <input type="button" id="sendOTP" class="fadeIn fourth" name="login" value="send OTP" />
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="otp">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form> -->

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">@youngartiste2022</a>
    </div>

  </div>
</div>

  </body>
</html>