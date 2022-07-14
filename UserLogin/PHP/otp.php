<?php

//$name= $_POST['name'];
session_start(); 
//$mobile= $_REQUEST['myVar'];
if(ISSET($_SESSION['ph_no'])){ 

  $mobile=$_SESSION['ph_no'];
    #### 2Factor API Setting
    $APIKey='ebc541c3-ff47-11ec-9c12-0200cd936042';
    $OTPMessage="<p>We have sent an OTP to $mobile,<br>Please enter the same below</p>";
    
    #### Custom Logic
    $otpValue=(( isset($_REQUEST['otp']) AND $_REQUEST['otp']<>'' ) ? $_REQUEST['otp'] : '' );
    
    //else
    // if ( $mobile =='' AND $email=='' )
    // {
    //     echo "<script type='text/javascript'> alert('Please provide either a mobile number or an email address to proceed');window.history.back(); </script>";
    //     die();
    // }
    // else if (  $mobile =='' AND $email <> '' )
    // $forceSubmitWithEmail=1;

    if ( ( $mobile =='' OR strlen($mobile) <>10 OR substr($mobile,0,2) < 60) )
    {
        echo "<script type='text/javascript'> alert('Please enter valid mobile number');window.location='../../index.php'; </script>";
         die();
     }
    else if ( $otpValue <> '') ### OTP value entered by user
    {
        ### Check if OTP is matching or not
        $VerificationSessionId=$_REQUEST['VerificationSessionId'];
        $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/VERIFY/$VerificationSessionId/$otpValue"),false);
        $VerificationStatus= $API_Response_json->Details;
            
            ### Check if OTP is matching
            if ( $VerificationStatus =='OTP Matched')
            {?>
                <script>
                alert("Sucessfullly Verified");
                window.location="../../UserVoting/category.php";
                </script>
           <?php }
            else
            {
                echo "<script type='text/javascript'>alert('Sorry, OTP entered was incorrect.We have sent it again. Please enter correct OTP');  window.history.back();  </script>";
                die();
            }
        
    }
    else
    {    
            ### Send OTP
            $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/$mobile/AUTOGEN"),false);
            if($API_Response_json==NULL){?>
            <script>alert('Server Error');window.location='../../index.php'</script> 
            <?php }
            else{
            $VerificationSessionId= $API_Response_json->Details;
          }
    }

  }
  else{?>
  <script>
    window.location='../../index.php';
    </script>
    <?php }?>



<!--HTML Part-->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="icon" type="image/x-icon" href="favicon/TI3.png">
    <title>otp</title>
    
    <!-- <link rel="icon" type="image/x-icon" href=""> -->
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

    <form action="otp.php" method="post">
    <input type="text" id='otp' name="otp" maxlength="6" placeholder="Enter OTP"  required="required">
    <input type="hidden"  name="VerificationSessionId" value="<?php echo $VerificationSessionId; ?>" >
    <input type="hidden"  name="phone" value="<?php echo $mobile; ?>" >
      <input type="submit" id="log" class="fadeIn fourth" value="Login">
    </form>

  </div>
</div>
  
  </body>
</html>