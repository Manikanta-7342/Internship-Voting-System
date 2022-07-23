<?php
	require_once '../DatabaseConnection/dbcon.php';
	$candidate_id=$_GET['candidate_id'];
	$conn->query("delete from participant where participant_id='$candidate_id'") or die($conn->error);
	header('location:participant.php');
?>