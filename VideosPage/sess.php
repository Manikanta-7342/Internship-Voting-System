<?php
	require '../DatabaseConnection/dbcon.php';
	session_start(); 
	
	if(!ISSET($_SESSION['voter_id'])){ ?>
		<script>window.location='../index.php';</script>
<?php	}else{
		$session_id=$_SESSION['voter_id'];
		$user_query = $conn->query("SELECT * FROM voters WHERE voter_id = '$session_id'")  or die($conn->error);
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['name'];
	}
?>