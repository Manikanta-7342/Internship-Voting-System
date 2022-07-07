<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <title>login page</title>
  </head>
  <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
  <a href="signup.php"><h2 class="inactive underlineHover">Register To Vote </h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.youngartiste.com/assets/img/young-artiste-logo-white.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form  method="POST">
      <input type="text" id="country" class="fadeIn second" name="phone" placeholder="mobile number" required>
      <!-- <input type="submit" id="sendOTP" class="fadeIn fourth" name="login" value="send OTP" /> -->
      
      <input type="submit" id="log" name='login' class="fadeIn fourth" value="Send OTP">
      <?php
	require_once 'dbcon.php';
	
	if(isset($_POST['login'])){
		$idno=$_POST['phone'];
		//$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE ph_no = '$idno' && status='Unvoted'")->num_rows ;
	
		

		if($result == 1){
            ?>
            <script>
              document.getElementById('country').type="hidden";
              document.getElementById('log').type="hidden";
              </script>
			<?php

//$name= $_POST['name'];
//$email= $_POST['email'];
    $mobile= $idno;

    #### 2Factor API Setting
    $APIKey='4b64ceb7-f7c9-11ec-9c12-0200cd936042';
    $OTPMessage="<p>We have sent an OTP to $mobile,<br>Please enter the same below</p>";
    
    #### Custom Logic
    $otpValue=(( isset($_REQUEST['otp']) AND $_REQUEST['otp']<>'' ) ? $_REQUEST['otp'] : '' );
    
    if ( $otpValue =='' AND $mobile=="")
    {
        echo "<script type='text/javascript'> window.history.back(); </script>";
        die();
    }
    

    if ( ( $mobile =='' OR strlen($mobile) <>10 OR substr($mobile,0,2) < 60) )
    {
        echo "<script type='text/javascript'> alert('Please enter valid mobile number');window.history.back(); </script>";
        die();
    }
     if ( $otpValue <> '') ### OTP value entered by user
    {
        ### Check if OTP is matching or not
        $VerificationSessionId=$_REQUEST['VerificationSessionId'];
        $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/VERIFY/$VerificationSessionId/$otpValue"),false);
        $VerificationStatus= $API_Response_json->Details;
            
            ### Check if OTP is matching
            if ( $VerificationStatus =='OTP Matched')
            {?>
                <script>
                alert("Sucessfullly <?php echo $mobile;?> Verified");
                
                window.location="http://localhost/Internship-Voting-System/UserVoting/index.php";
            
                
                
                </script>
           <?php }
            else
            {
                echo "<script type='text/javascript'>alert('Sorry, OTP entered was incorrect. Please enter correct OTP');  window.history.back();  </script>";
                die();
            }
        
    }
    else
    {    
            ### Send OTP
            
            $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/$mobile/AUTOGEN"),false);
            $VerificationSessionId= $API_Response_json->Details;
            
    }
  }
  else{
    ?>
    <script type="text/javascript">
    alert('Your account is not registered or Sorry You Already Voted');
    window.history.back();
    </script>
    <?php
  }

?>



<!--HTML Part-->
    

    <!-- Login Form -->
    <form action="otp.php" method="post">
    <input type="text" id='otp' name="otp" maxlength="6" placeholder="Enter OTP"  required="required">
    <input type="hidden"  name="VerificationSessionId" value="<?php echo $VerificationSessionId; ?>" >
      <!-- <input type="submit" id="sendOTP" class="fadeIn fourth" name="login" value="send OTP" />  -->
      <!-- <div id="formFooter">
      <a class="underlineHover" href="otp.php">Resend OTP</a>
    </div> -->
    <input type="hidden"  name="phone" value="<?php echo $mobile; ?>" >
      <input type="submit" id="log" class="fadeIn fourth" value="Login">
    </form>
    
    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  
  </body>
</html>

			<?php
			
		}
	
	
?>   
    </form>
    
    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>
  
  </body>
</html>