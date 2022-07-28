<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ConfirmationPage/css/styles.css">
    <link rel="stylesheet" href="../ConfirmationPage/css/confi.css">
    <script src="https://kit.fontawesome.com/d7741372ca.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="https://competition.youngartiste.com/assets/img/siff.png">
    <title>SIFF | Vote Confirmation </title>
  </head>
  <body>
  <?php include("sess.php");?>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <br>
    <div class="container">
      <h3 class="fadeIn second" >Confirm Your Vote</h3>
      <?php
                           require '../DatabaseConnection/dbcon.php';
                           if(!ISSET($_POST['submit']))
                           { ?>
                             <script>window.location='../index.php';</script>
                   <?php   } else
                             {
                               $_SESSION['participant_id'] = $_POST['submit'];
                             
						   $cat_id=$_SESSION['participant_id'];
               $query1 =mysqli_query($conn,"SELECT p.participant_name,p.category FROM participant p where p.participant_id=$cat_id");
						   $row1=mysqli_fetch_array($query1); ?>
            <div class="alert alert-info">
                <div class="panel-heading">
                    <center><?php echo $row1 ['category']; ?></center>
                </div><br>
                Participant Name: <strong><?php echo $row1['participant_name'] ; }?></strong>
            </div>
                <div class="modal-body">
        <p>
            <center>Are you sure you want to submit your Vote? </center>
        </p>
    </div>
    <div class="modal-footer">
        <center>
            <a href="videos.php"><button class="btn2" >Back</button></a>
            <a href="../ConfirmationPage/confirmation.php?myVar=<?php echo $cat_id ?>" onclick="POST"><button class="btn1" type="submit" >Yes</button></a>
        </center>
        <br>
    </div>
    </div>
  </div>
</div>

  </body>
</html>