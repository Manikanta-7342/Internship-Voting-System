<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="favicon/TI3.png">
    <title></title>
    <link rel="stylesheet" href="css/index.css">
</head>
  <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <br>
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/young-artiste-logo.png" id="icon" alt="User Icon" />
    </div>
    <!-- Login Form -->
    <form role="form" method="POST" enctype = "multipart/form-data">
    <input type="text" class="fadeIn second" name="username" placeholder="Enter Username:" autofocus>
     <input type="password" class="fadeIn second" name="password" placeholder="Enter Password:" value="">
      <input type="submit" id="log" name='login' class="fadeIn fourth" value="Login">
      <?php include ('login_query.php');?>
			
    </form>
    </div>
</div>
  </body>
</html>