<?php
session_start();
if(isset($_SESSION['fname'])&&isset($_SESSION['reg_id']))
{
	$name=$_SESSION['fname'];
	$phone=$_SESSION['phone'];
	$id=$_SESSION['reg_id'];
	require('connect.php');
	 date_default_timezone_set('Asia/Kolkata');
								$date=date("Y-M-d");
								$time = date('h:i:s a', time());
						   
						   $task="Attempt for Accomodation";
						   $log="Insert into log values('$id','$task','$date','$time')";
						   $log_query=$conn->query($log);
	
	
	
}
else
{
    session_destroy();  
	header('location:login.php');  
}
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accomodation</title>
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
	<script type="text/javascript">

	function check(){
		
		if(document.getElementById("members").value==0)
		{
			alert("Select Number of People");
			document.getElementById("members").focus();
			return false;
			
		}
		
		if(document.getElementById("days").value==0)
		{
			alert("Select Number of Days");
			document.getElementById("days").focus();
			return false;
			
		}
		return true;
		
	}
	
	</script>
	
	
  </head>
  
  <body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
   <?php
   include('header_logged.php');
   ?>
    <!-- MAIN -->
    <main role="main">
      <article>    
        <!-- Header -->
       <header class="section background-image text-center" style="background-image:url(img/img-05.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Book Your Stay
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
		
		<section class="section-small-padding background-white text-center">      
          <div class="line">
            
            <h2 class="text-dark text-size-50 text-m-size-40"><i class="icon-pen text-primary text-size-40 text-line-height-1"></i>&nbsp;&nbsp;Please fill the form Carefully</h2>
          </div>                                                                                                    
        </section>
        

        <!-- Section 3 -->
        <section class="section background-dark">
          <div class="s-12 m-12 l-4 center">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Registration Form</b><p style="color:white;">Fee Rs 500/- Per Person Per Day</p></h3>
            <form class="customform text-white" method="post" onsubmit="return check();" action="accom_pay.php" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                   <select name="members" id="members" required>
                                    
                                   <option value="0" selected disabled>Number of People</option>
								    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
									 <option>4</option>
                                    
                                </select>
                  </div>
                  <div class="s-12 m-12 l-6">
                    <select name="days" id="days" required>
                                    
                                   <option value="0" selected disabled>Number of Days</option>
								    <option>1</option>
                                    <option>2</option>
                                    
									 
                                    
                                </select>
					
                  </div>
                </div>
				
				<div class="line"><div class="margin"><div class="s-12">
				<input id="amt" value="<?php echo "Rs ";?>0" name="amt" disabled required />
				</div>
				</div>
				</div>
              </div>   
					
				<?php
				
				$check = "select * from accomo where reg_id='$id'";
				$res=$conn->query($check);
				$conn->close();
				if($res->num_rows>0)
				{
					echo '<p style=" text-align:center; background-color:green;">Accomodation Fee Paid</p>';
				}
				else
					
                echo '<div class="line"><div class="margin"><div class="s-12"><button class="button border-radius  background-primary" name="pay" type="submit">Pay Now</button></div></div></div>';
				?>
              </div>    
            </form>
          </div>           
        </section>  
      </article>
    </main>
    
  <?php
	
	include('footer_logged.php');
	
	?>
	<script>
		$(document).bind("contextmenu",function(e){
        e.preventDefault();

		});

   $(document).keydown(function(e){

if(e.which===123)
{

	return false;
}

   });

$(document).ready(function(){
	$('#days').change(function(){
		var mem=$('#members').val();
           var days = $(this).val();
		   var tot=days*mem*500;
		   
		  $('#amt').val(tot);
	});
	
	$('#members').change(function(){
		var days=$('#days').val();
           var mem = $(this).val();
		   var tot=days*mem*500;
		   
		  $('#amt').val(tot);
	});
	
});
</script>