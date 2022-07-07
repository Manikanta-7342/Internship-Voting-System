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
        
        <a href="index.php"><h2 class="inactive underlineHover">Sign In </h2></a>

          <!-- Tabs Titles -->
          <!-- <a href="index.html"><h2 class="inactive underlineHover"> Sign In </h2></a> -->
          <h2 class="active">Register To Vote </h2>
      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="https://www.youngartiste.com/assets/img/young-artiste-logo-white.png" id="icon" alt="User Icon" />
          </div>
      
          <!-- signup Form -->
          <form method = "post" enctype = "multipart/form-data">
            <input type="text" id="signup" class="fadeIn second" name="firstname" placeholder="Enter Name" required="true">

                <!-- <label>Gender</label> <br/> -->
                    <select class = "form-field" style=" color: #767676;" name = "gender" required="true">
                    <option disabled selected>Gender</option>    
                    <option  >Male</option>
                        <option >Female</option>														
                    </select>
            <input type="number" class="form-control" name="Age" placeholder="Enter Age">
            <input type="text" id="signup2" class="fadeIn second" name="id_number" placeholder="Enter Mobile Number" required="true">
            <input type="text" id="signup3" class="fadeIn second" name="email" placeholder="Enter E-mail" required="true">
            <!--<input type="text" id="signup3" class="fadeIn second" name="login" placeholder="Enter OTP" required="true"> -->
            <input type="submit" name="save" class="fadeIn fourth" value="Enter To Vote">
          </form>
      
          <!-- Saving Data in Database -->
          <?php //PHP script to insert signup data into database
								require 'RegisterData.php';
								
							?>
        </div>
      </div>

  </body>
</html>