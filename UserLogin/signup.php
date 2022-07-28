<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="icon" type="image/x-icon" href="https://competition.youngartiste.com/assets/img/siff.png">
    <title>Register-SIFF Young Artiste</title>
  </head>
  <body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
        <a href="../index.php"><h2 class="inactive underlineHover">Sign In </h2></a>
          <h2 class="active">Register</h2>
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="Images/young-artiste-colored.png" id="icon" alt="SIFF Voting" />
          </div>
          <!-- signup Form -->
          <form method = "post" enctype = "multipart/form-data">
            <input type="text" id="signup" class="fadeIn second" name="firstname" placeholder="Enter Name:" required="true">
               <select class = "form-field" style=" color: #767676;" name = "gender" required="true">
                    <option disabled selected>Select Gender:</option>    
                    <option  >Male</option>
                    <option >Female</option>														
                </select>
            <input type="number" class="form-control" name="Age" placeholder="Enter Age:">
            <input type="text" id="signup2" class="fadeIn second" name="id_number" maxlength="10" placeholder="Enter Mobile Number:" required="true">
            <input type="text" id="signup3" class="fadeIn second" name="email" placeholder="Enter E-mail:" required="true">
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