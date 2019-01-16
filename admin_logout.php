<?php
session_start();
if(isset($_SESSION['email'])&&isset($_SESSION['id'])&&$_SESSION['email']=="karmana@admin.kiet")
{
	$id=$_SESSION['id'];
	require('connect.php');
	 date_default_timezone_set('Asia/Kolkata');
								$date=date("Y-M-d");
								$time = date('h:i:s a', time());
						   
						   $task="Admin Logged Out";
						   $log="Insert into log values('$id','$task','$date','$time')";
						   $log_query=$conn->query($log);
	
	$conn->close();
	session_destroy();
	header('location:index.php');
}
else
{
	
	header('location:index.php');
}
?>