<?php 
    require '../../DatabaseConnection/dbcon.php';
								
		if (isset($_POST['save'])){
			$firstname=$_POST['firstname'];
			//$lastname=$_POST['lastname'];
			$gender=$_POST['gender'];
			$id_number=$_POST['id_number'];
			$email=$_POST['email'];
			$age=$_POST['Age'];
			//$password = $_POST['password'];
			//$password1 = $_POST['password1'];
			//$date = date("Y-m-d H:i:s");
			if ( ( $id_number =='' OR strlen($id_number) <>10 OR substr($id_number,0,2) < 60) )
    {
        echo "<script type='text/javascript'> alert('Please enter valid mobile number');window.location='signup.php'; </script>";
         die();
     }
			$query = $conn->query("SELECT * FROM voters WHERE ph_no='$id_number'") or die ($conn->error);
			$numberOfrows=$query->num_rows;
		
		if ($numberOfrows == 0) {
				$conn->query("insert into voters(name,gender,age,ph_no,email,status) VALUES('$firstname','$gender','$age','$id_number','$email','Unvoted')");
				//$conn->query("insert into voters(id_number, password, firstname,lastname, gender,Age,status) VALUES('$id_number', '".md5($password)."','$firstname','$lastname', '$gender', '$age','Unvoted')");
			?>
	            <script>
			        alert( 'Successfully Registered \n Please Login to Vote');
			         window.location='../../index.php';
	            </script>
            <?php
			
			
		}else{
			?>
	            <script>
			        alert( 'Phone Number Already Registered \n Proceed to Login');
			         window.location='../../index.php';
	            </script>
            <?php
		}
		

	}

?>


					  