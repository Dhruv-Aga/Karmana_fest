<?php
session_start();
if(isset($_SESSION['fname'])&&isset($_SESSION['reg_id']))
{
$status="Unpaid";
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-M-d");
if(isset($_POST['pay']))
{
require('connect.php');
$name=$_SESSION['fname'];
$id=$_SESSION['reg_id'];	
$phone=$_SESSION['phone'];
$category=$_POST['category'];
$amt=0;


if($category=="PROJECT")
{
	$amt=600;
	$event="Project Competition";
    $tech=$_POST['tech'];
	$title=ucwords($_POST['title']);
	$team=ucwords($_POST['team']);
	$memb=$_POST['members'];
	$abs=mysqli_real_escape_string($conn,$_POST['abs']);
	$mem = array();
	$contact = array();
	$i=1;
	foreach($_POST['mem'] as $selected) 
	{
		
		$mem[$i]=ucwords($selected);	
         $i++;		
	}

	$i=1;
	foreach($_POST['phone'] as $selected) 
	{
		
		$contact[$i]=$selected;
		$i++;
	}
	
	for($i=$memb;$i<=3;$i++)
	{
		$mem[$i]="None";
		$contact[$i]="None";
	}
	
		$project="Select *from event_reg where team='$team' && event='$event'";
						$project_result=$conn->query($project);
						if($project_result->num_rows>0)
						{
							header('location:logged.php');
						}
else
{
    $sql="Insert into event_reg values('','$id','$event','$tech','$title','$team','$memb','$mem[1]','$contact[1]','$mem[2]','$contact[2]','$mem[3]','$contact[3]','$abs','$status','$date')";
	
 

 

}
	
	
	
	
	
	
	
	
}

if($category=="LAN")
{
	$amt=100;
	$event="LAN Gaming";
    $tech="None";
	$title=$_POST['game'];
	$team="None";
	$mem=1;
	$mem2="None";
	$phone2="None";
	$mem3="None";
	$phone3="None";
	$mem4="None";
	$phone4="None";
	$abs="None";
	
	
	
	$lan="Select *from event_reg where reg_id='$id' && event='$event'";
						$lan_result=$conn->query($lan);
						if($lan_result->num_rows>0)
						{
							header('location:logged.php');
						}
else
{
    // $sql="Insert into event_reg values('','$id','$event','$tech','$title','$team','$mem','$mem2','$phone2','$mem3','$phone3','$mem4','$phone4','$abs','$status','$date')";
    $sql="INSERT INTO `event_reg`(`id`, `reg_id`, `event`, `technology`, `project_title`, `team`, `members`, `mem_2`, `phone_2`, `mem_3`, `phone_3`, `mem_4`, `phone_4`, `abstract`, `status`, `date`) VALUES ('','$id','$event','$tech','$title','$team','$mem','$mem2','$phone2','$mem3','$phone3','$mem4','$phone4','$abs','$status','$date')";
	
 

 	die($sql);

}	

}


if($category=="QUIZ")
{
	
	$amt=100;
	$event="Quiz";
    $tech="None";
	$title="None";
	$team=ucwords($_POST['team']);
	$memb=$_POST['members'];
	$abs="None";
	$mem = array();
	$contact = array();
	if($memb==2)
	{
	$i=1;
	foreach($_POST['mem'] as $selected) 
	{
		
		$mem[$i]=ucwords($selected);	
         $i++;		
	}

	$i=1;
	foreach($_POST['phone'] as $selected) 
	{
		
		$contact[$i]=$selected;
		$i++;
	}
	}
	for($i=$memb;$i<=3;$i++)
	{
		$mem[$i]="None";
		$contact[$i]="None";
	}
	
		$quiz="Select *from event_reg where team='$team' && event='$event'";
						$quiz_result=$conn->query($quiz);
						if($quiz_result->num_rows>0)
						{
							header('location:logged.php');
						}
else
{
    $sql="Insert into event_reg values('','$id','$event','$tech','$title','$team','$memb','$mem[1]','$contact[1]','$mem[2]','$contact[2]','$mem[3]','$contact[3]','$abs','$status','$date')";
	
 

}
	
	
	

	
	
}


}
}
else{
	header("location:logged.php");
	
}
?>


 
  
  <!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Done</title>
	<link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
  </head>

  <body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
   
    
    <!-- MAIN -->
    <main role="main">
      <article>    
        <!-- Header -->
       <header class="section background-image text-center" style="background-image:url(img/img-05.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
           <?php
		   
		   if($conn->query($sql)==true)
{
	
	
	 date_default_timezone_set('Asia/Kolkata');
								$date=date("Y-M-d");
								$time = date('h:i:s a', time());
						   
						    $task="Registration Done For ".$event;
						   $log="Insert into log values('$id','$task','$date','$time')";
						   $log_query=$conn->query($log);
	
	
	$conn->close();
	echo $event." Registration Successfull<br><br>";
	echo "Please wait Redirecting to Home Page";
	
	header("refresh:3; url=logged.php");
	
}
else
{
	$conn->close();
	echo "Registration failed";
	header("refresh:3; url=logged.php");
	
}

		   
		   
		   ?>
          </h1>
         
          
          <!-- white full width arrow object -->
          
      </article>
    </main>
    
   

  
 