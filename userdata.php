<?php
session_start();
if(isset($_POST['register'])&&isset($_SESSION['check']))
{

require('connect.php');
require('secure_pass.php');	
$_SESSION['fname']=ucwords($_POST['first_name']);
$_SESSION['lname']=ucwords($_POST['last_name']);
$_SESSION['course']=$_POST['course'];
$_SESSION['gender']=$_POST['gender'];
$_SESSION['email']=mysqli_real_escape_string($conn, $_POST['email']);
$_SESSION['phone']=mysqli_real_escape_string($conn, $_POST['phone']);
$_SESSION['state']=$_POST['state'];
$_SESSION['college']=$_POST['college'];
$_SESSION['pass']=$_POST['pass'];
if($_SESSION['college']="Others")
{
	$_SESSION['college']=$_POST['college'];
}

                          $otp=mt_rand(100000,999999);
						   $_SESSION['otp']=$otp;
						   $_SESSION['mob']=$_SESSION['phone'];
						   $phone=$_POST['phone'];
						   $msg="Your%20OTP%20is%20".$otp;
						    $url="http://203.129.203.243/blank/sms/user/urlsms.php?username=kietgzb&pass=kiet@123&senderid=KIETGZ&dest_mobileno=$phone&message=$msg&response=Y";
						 
						 $c=curl_init();
						   curl_setopt($c,CURLOPT_RETURNTRANSFER,1);
						   curl_setopt($c,CURLOPT_URL,$url);
						   $contents=curl_exec($c);
						   curl_close($c);
						   
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-M-d");
$time = date('h:i:s a', time());
						   
						   
$insert="Insert into otp values('','$phone','$otp','$date','$time')";
$result=$conn->query($insert);

header('location:otp.php');
}
?>
	
