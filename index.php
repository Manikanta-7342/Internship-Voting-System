<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="UserLogin/CSS/index.css">
    <link rel="icon" type="image/x-icon" href="favicon/TI3.png">
    <title>Sign In-SIFF Young Artiste</title>
  </head>
  <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
  <a href="UserLogin/PHP/signup.php"><h2 class="inactive underlineHover">Register</h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.youngartiste.com/assets/img/young-artiste-logo-white.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method='post' >
    
                        <h3 class="active">Login as: </h3>
                        
                        <select onchange = "page(this.value)" class = "form-field" style=" color: #767676;" required="true">
                    <option value = "admin/index.php">Admin</option>    
                    <option selected disables>Voter</option>
                        													
                    </select>
  
      <input type="text"  class="fadeIn second" name="phone" maxlength="10" style="position:relative; top:20px;" placeholder="Enter Mobile Number:" required>
      <!-- <input type="submit" id="sendOTP" class="fadeIn fourth" name="login" value="send OTP" /> -->

      <input type="submit"  name='login' class="fadeIn fourth" style="position:relative; top:20px;" value="Send OTP">
      
</form>


      <?php
	require 'DatabaseConnection/dbcon.php';

	if(isset($_POST['login'])){
		$idno=$_POST['phone'];
		//$password=$_POST['password'];

		$result = $conn->query("SELECT * FROM voters WHERE ph_no = '$idno' &&  `status` = 'Unvoted'") or die($conn->error);
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `voters` WHERE ph_no = '$idno' && `status` = 'Voted'") or die($conn->error);
    $row2=$voted->fetch_array();
    $numberOfRowsOfvoted=$voted->num_rows;
		$numberOfRows = $result->num_rows;
    if ($numberOfRows > 0){
			session_start();
			$_SESSION['voter_id'] = $row['voter_id'];
      $_SESSION['ph_no']=$row['ph_no'] ?>
      <script>
        window.location='UserVoting/category.php';
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
<script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>
<!-- <script type="text/javascript">
  function helpbox()
  {
    alert("if you haven not registered \n please click on register to vote on the top");
  }
</script> -->
  </body>
</html>
