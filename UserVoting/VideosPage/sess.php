<?php
	require 'dbcon.php';
	session_start(); 
	
	if(!ISSET($_SESSION['voter_id'])){ ?>
		<script>window.location='UserVoting/';</script>
<?php	}else{
		$session_id=$_SESSION['voter_id'];
		$user_query = $conn->query("SELECT * FROM voters WHERE voter_id = '$session_id'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['name'];
	}
?>