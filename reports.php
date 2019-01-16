<?php
session_start();
if(isset($_SESSION['email'])&&isset($_SESSION['id'])&&$_SESSION['email']=="karmana@admin.kiet")
{
	require('connect.php');
	
	
}
else
{
	session_destroy();
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reports</title>
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
	<style>
	
	table tr{
		
		text-align:center;
	}
	
	</style>
  </head>

  <body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
   
    
    <!-- MAIN -->
    <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/img-05.jpg)"><p ><a style="color:white;" href="admin_logout.php">Logout</a></p>
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Reports
          </h1>
         
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        
        <!-- Section 1 -->
        <section class="section background-white">
          <div class="line text-center">
           
            
          
          </div>
          <div class="line">
            <div style="color:black;" class="margin2x">
			<?php
			$project="Select * from event_reg where event = 'Project Competition'";
			$result=$conn->query($project);
			
			$num_project=$result->num_rows;
			
			$lan="Select * from event_reg where event = 'LAN Gaming'";
			$result=$conn->query($lan);
			
			$num_lan=$result->num_rows;
			
			$quiz="Select * from event_reg where event = 'Quiz'";
			$result=$conn->query($quiz);
			
			$num_quiz=$result->num_rows;
			
			$acc="Select * from accomo";
			$result=$conn->query($acc);
			
			$num_acc=$result->num_rows;
			
			
			
            ?>  
			
			
			<table >
			<tr><th>Event</th><th>Number of Registrations</th></tr>
			<tr><td>Project Competition </td><td><form action="reports.php" method="post"><input type="text" hidden value="project" name="category"><input type="submit" name="project" value="<?php echo $num_project; ?>" ></form></td></tr>
			<tr><td>LAN Gaming  </td><td><form action="reports.php" method="post"><input type="text" hidden value="lan" name="category"><input type="submit" name="lan" value="<?php echo $num_lan; ?>"></form></td></tr>
			<tr><td>Online Quiz </td><td><form action="reports.php" method="post"><input type="text" hidden value="quiz" name="category"><input type="submit" name="quiz" value="<?php echo $num_quiz; ?>"></form></td></tr>
			<tr><td>Accomodation </td><td><form action="reports.php" method="post"><input type="text" hidden value="accom" name="category"><input type="submit" name="accom" value="<?php echo $num_acc; ?>"></form></td></tr>
			
			</table>
			
			
			<br><br>
			
			
			<?php
			
			if(isset($_POST['project']))
			{
				$event="Project Competition";
				$sql="Select * from event_reg where event ='$event'";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
				echo '<table>';
				echo '<tr><th>Reg_ID</th><th>Technology</th><th>Project Title</th><th>Team Name</th><th>Members</th><th>Leader & Phone</th><th>Member 2 & Phone</th><th>Member 3 & Phone</th><th>Member 4 & Phone</th><th>Course</th><th>College</th><th>State</th><th>E-mail</th><th>Abstract</th><th>Status</th><th>D.0.R</th></tr>';
				while($row=$result->fetch_assoc())
				{
					$reg=$row['reg_id'];
					$sub_sql="select firstname,phone,college,email,state,course from userdata where reg_id='$reg'";
					$sub_res=$conn->query($sub_sql);
					$sub_row=$sub_res->fetch_assoc();
					
					
                echo '<tr><td>'.$row['reg_id'].'</td><td>'.$row['technology'].'</td><td>'.$row['project_title'].'</td><td>'.$row['team'].'</td><td>'.$row['members'].'</td><td>'.$sub_row['firstname'].' , '.$sub_row['phone'].'</td><td>'.$row['mem_2'].' , '.$row['phone_2'].'</td><td>'.$row['mem_3'].' , '.$row['phone_3'].'</td><td>'.$row['mem_4'].' , '.$row['phone_4'].'</td><td>'.$sub_row['course'].'</td><td>'.$sub_row['college'].'</td><td>'.$sub_row['state'].'</td><td>'.$sub_row['email'].'</td><td>'.$row['abstract'].'</td><td>'.$row['status'].'</td><td>'.$row['date'].'</td></tr>';

					
				}
					
				}
				
				
				
				
				
				echo '</table>';
				
				
			}
			
			if(isset($_POST['lan']))
			{
				$event="LAN Gaming";
				$sql="Select * from event_reg where event ='$event'";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
				echo '<table>';
				echo '<tr><th>Reg_ID</th><th>Name & Phone</th><th>Course</th><th>College</th><th>State</th><th>E-mail</th><th>Status</th><th>D.0.R</th></tr>';
				while($row=$result->fetch_assoc())
				{
					$reg=$row['reg_id'];
					$sub_sql="select firstname,phone,college,email,state,course from userdata where reg_id='$reg'";
					$sub_res=$conn->query($sub_sql);
					$sub_row=$sub_res->fetch_assoc();
					
					
               echo '<tr><td>'.$row['reg_id'].'</td><td>'.$sub_row['firstname'].' , '.$sub_row['phone'].'</td><td>'.$sub_row['course'].'</td><td>'.$sub_row['college'].'</td><td>'.$sub_row['state'].'</td><td>'.$sub_row['email'].'</td><td>'.$row['status'].'</td><td>'.$row['date'].'</td></tr>';

					
				}
					
				}
				
				
				
				
				
				echo '</table>';
				
		
				
			}
			
			
			
			if(isset($_POST['accom']))
			{
				$event="LAN Gaming";
				$sql="Select * from accomo";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
				echo '<table>';
				echo '<tr><th>Reg_ID</th><th>Name & Phone</th><th>Course</th><th>College</th><th>State</th><th>E-mail</th><th>Number of People</th><th>Days</th><th>Status</th><th>D.0.R</th></tr>';
				while($row=$result->fetch_assoc())
				{
					$reg=$row['reg_id'];
					$sub_sql="select firstname,phone,college,email,state,course from userdata where reg_id='$reg'";
					$sub_res=$conn->query($sub_sql);
					$sub_row=$sub_res->fetch_assoc();
					
					
               echo '<tr><td>'.$row['reg_id'].'</td><td>'.$sub_row['firstname'].' , '.$sub_row['phone'].'</td><td>'.$sub_row['course'].'</td><td>'.$sub_row['college'].'</td><td>'.$sub_row['state'].'</td><td>'.$sub_row['email'].'</td><td>'.$row['members'].'</td><td>'.$row['days'].'</td><td>'.$row['status'].'</td><td>'.$row['date'].'</td></tr>';

					
				}
					
				}
				
				
				
				
				
				echo '</table>';
				
		
				
			}
			
			
			
			
			
			
			
			
			if(isset($_POST['quiz']))
			{
				
			$event="Quiz";
				$sql="Select * from event_reg where event ='$event'";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
				echo '<table>';
				echo '<tr><th>Reg_ID</th><th>Leader & Phone</th><th>Member 2 & Phone</th><th>Course</th><th>College</th><th>State</th><th>E-mail</th><th>Status</th><th>D.0.R</th></tr>';
				while($row=$result->fetch_assoc())
				{
					$reg=$row['reg_id'];
					$sub_sql="select firstname,phone,college,email,state,course from userdata where reg_id='$reg'";
					$sub_res=$conn->query($sub_sql);
					$sub_row=$sub_res->fetch_assoc();
					
					
               echo '<tr><td>'.$row['reg_id'].'</td><td>'.$sub_row['firstname'].' , '.$sub_row['phone'].'</td><td>'.$row['mem_2'].' , '.$row['phone_2'].'</td><td>'.$sub_row['course'].'</td><td>'.$sub_row['college'].'</td><td>'.$sub_row['state'].'</td><td>'.$sub_row['email'].'</td><td>'.$row['status'].'</td><td>'.$row['date'].'</td></tr>';

					
				}
					
				}
				
				
				
				
				
				echo '</table>';
				
				
			}
			
			
			
			
			
			
			
			?>
			
			
			
			
            </div>    
          </div>  
        </section>      
      </article>
    </main>
    
  <?php
  $conn->close();
  ?>