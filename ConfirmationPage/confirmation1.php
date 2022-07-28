<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/d7741372ca.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="https://competition.youngartiste.com/assets/img/siff.png">
	  <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Confirmation page</title>
  </head>
  <body>
   <div class="wrapper fadeInDown">
  <div id="formContent">
    <br>
    <br>
   <!-- Icon -->
    <div class="back" >
    <div class="fadeIn first">    
    <img src="images/young-artiste-white.png" id="icon" alt="User Icon" />
    </div>
    <div class="first fadeIn third">
       <img src="images/3.png" alt="tick" width="100px" height="100px">
    </div>
    <div class="container">
      <h3 class="fadeIn second" >You have already voted... </h3>
      <?php             
              session_start(); 
						  if(ISSET($_SESSION['ph_no']))
              {
               $mobile=$_SESSION['ph_no'];
               require '../DatabaseConnection/dbcon.php';
               $query1 =mysqli_query($conn,"SELECT p.participant_name,p.category FROM participant p, votes v1,voters v2 where v2.ph_no=$mobile and v2.voter_id=v1.voter_id and v1.participant_id=p.participant_id");
						   $row1=mysqli_fetch_array($query1); ?>
     <p class="fadeIn fourth">
       Participant Name: <strong><?php echo $row1 ['participant_name']; ?></strong> <br> Category:<strong> <?php echo $row1 ['category']; }?></strong>
     </p> 
     <button class="btn" onclick="window.print();"><i class="fa fa-download"></i> <label >Download</label></button>
    </div>
    <div id="formFooter">
      <a class="underlineHover" href="https://www.youngartiste.com/">@youngartiste2022</a>
    </div>        
  </div>
</div>
</div>
  </body>
</html>
