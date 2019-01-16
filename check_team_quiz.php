<?php
require('connect.php');


if(isset($_POST["team"]))
{
	if($_POST["team"]!='')
	{
		$event="Quiz";
		$sql ="select *from event_reg where team ='".$_POST["team"]."' && event='$event'";
		
	}
	
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		
		echo "1";
		
	}
 }                                
	
$conn->close();
?>