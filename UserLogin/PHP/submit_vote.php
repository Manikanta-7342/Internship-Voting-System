<?php
	include("dbcon.php");
	session_start();
	session_destroy();
		// $conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pm_id]', '$_SESSION[voters_id]')") or die($conn->error);
		// $conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[cm_id]', '$_SESSION[voters_id]')") or die($conn->error);
		// $conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[mla_id]', '$_SESSION[voters_id]')") or die($conn->error);
		$conn->query("UPDATE `voters` SET `participant_id` = '$_SESSION[participant_id]' WHERE `voter_id` = '$_SESSION[voters_id]'") or die($conn->error);
		header("location:index.php");
		
?> 