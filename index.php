<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="UserLogin/CSS/index.css">
    <link rel="icon" type="image/x-icon" href="favicon/TI3.png">
    <title>login page</title>
    
  </head>
  <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
  <a href="UserLogin/PHP/signup.php"><h2 class="inactive underlineHover">Register To Vote </h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.youngartiste.com/assets/img/young-artiste-logo-white.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method='post'>
      <input type="text"  class="fadeIn second" name="phone" maxlength="10" placeholder="mobile number" required>
      <!-- <input type="submit" id="sendOTP" class="fadeIn fourth" name="login" value="send OTP" /> -->

      <input type="submit"  name='login' class="fadeIn fourth" value="Send OTP">
</form>


      <?php
	require 'DatabaseConnection/dbcon.php';
	
	if(isset($_POST['login'])){
		$idno=$_POST['phone'];
		//$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE ph_no = '$idno' &&  `status` = 'Unvoted'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `voters` WHERE ph_no = '$idno' && `status` = 'Voted'") or die(mysqli_errno());
    $row2=$voted->fetch_array();
    $numberOfRowsOfvoted=$voted;
		$numberOfRows = $result->num_rows;
    if ($numberOfRows > 0){
			session_start();
			$_SESSION['voter_id'] = $row['voter_id'];
      $_SESSION['ph_no']=$row['ph_no'] ?>
      <script>
        window.location='UserLogin/PHP/otp.php';
        </script>

	<?php	}
    else if($numberOfRowsOfvoted == 1){
      session_start();
      $_SESSION['ph_no']=$row2['ph_no'] ?>
        <script type="text/javascript">
        window.location='ConfirmationPage/confirmation1.php';
        </script>
        <?php
      }else{
        ?>
        <script type="text/javascript">
        alert('Your account is not registered.So,please Register to vote');
        window.location='UserLogin/PHP/signup.php';
        </script>
        <?php
      }

  }

?>
  </div>
</div>
  
  </body>
</html>