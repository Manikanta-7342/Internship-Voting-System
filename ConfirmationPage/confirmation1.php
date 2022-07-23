
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/d7741372ca.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="favicon/TI3.png">
	  <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <!-- <img class="fadeIn third" class="responsive" src="images/template.jfif" alt="guitar">
    </div> -->
    <div class="fadeIn first">
      
    <img src="../UserLogin/young-artiste-logo-white.png" id="icon" alt="User Icon" />

    </div>
    <div class="first fadeIn third">
       <img src="images/3.png" alt="tick" width="100px" height="100px">

    </div>
    
    <div class="container">
      <h3 class="fadeIn second" >You have already voted </h3>
      

      <?php
                           
                           session_start(); 
						  if(ISSET($_SESSION['ph_no']))
              {
               $mobile=$_SESSION['ph_no'];
               require '../DatabaseConnection/dbcon.php';
               $query1 =mysqli_query($conn,"SELECT p.participant_name,p.category FROM participant p, votes v1,voters v2 where v2.ph_no=$mobile and v2.voter_id=v1.voter_id and v1.participant_id=p.participant_id");
						   $row1=mysqli_fetch_array($query1); ?>
     <p class="fadeIn fourth">
       to <br>Participant Name: <strong><?php echo $row1 ['participant_name']; ?></strong> <br> Category:<strong> <?php echo $row1 ['category']; }?></strong>
     </p> 
     <button ondblclick="window.print();" class="btn"><i class="fa fa-download"></i> <label >Download</label></button>
    </div>

    <div id="formFooter">
      <a class="underlineHover" href="https://www.youngartiste.com/">@youngartiste2022</a>
    </div>
              <?php  session_destroy();?>
  </div>
</div>

  </body>
</html>
