
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="favicon/TI3.png">
    <title>Admin Sign In-SIFF Young Artiste</title>
    

    <link rel="stylesheet" href="css/index.css">
    
</head>
  <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
   
<br>
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.youngartiste.com/assets/img/young-artiste-logo-white.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form role="form" method="POST" enctype = "multipart/form-data">
    <!-- <label for = "username" >Username</label> -->
    <!-- <input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus> -->
    <input type="text" class="fadeIn second" name="username" placeholder="Enter Username:" autofocus>
      <!-- <input type="submit" id="sendOTP" class="fadeIn fourth" name="login" value="send OTP" /> -->
      <!-- <label for = "username" >Password</label> -->
    <!-- <input class="form-control" placeholder="Enter Password" name="password" type="password" value=""> -->
    <input type="password" class="fadeIn second" name="password" placeholder="Enter Password:" value="">
      <input type="submit" id="log" name='login' class="fadeIn fourth" value="Login">
      <?php include ('login_query.php');?>
			
    </form>
    
    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>
  
  </body>
</html>