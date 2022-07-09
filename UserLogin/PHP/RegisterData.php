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

			$query = $conn->query("SELECT * FROM voters WHERE ph_no='$id_number'") or die ($conn->error);
			$numberOfrows=$query->num_rows;
		
		if ($numberOfrows == 0) {
				$conn->query("insert into voters(name,gender,age,ph_no,email,status) VALUES('$firstname','$gender','$age','$id_number','$email','Unvoted')");
				//$conn->query("insert into voters(id_number, password, firstname,lastname, gender,Age,status) VALUES('$id_number', '".md5($password)."','$firstname','$lastname', '$gender', '$age','Unvoted')");
			?>
	            <script>
			        alert( 'Successfully Registered');
			         window.location='../../index.php';
	            </script>
            <?php
			
			
		}else{
			?>
	            <script>
			        alert( 'Phone Number Already Registered');
			         window.location='../../index.php';
	            </script>
            <?php
		}
		

	}

?>


					  