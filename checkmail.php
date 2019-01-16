<?php
require('connect.php');


if(isset($_POST["email"]))
{
	if($_POST["email"]!='')
	{
		
		$sql ="select *from userdata where email ='".$_POST["email"]."'";
		
	}
	
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		
		echo "1";
		
	}
 }                                
	
$conn->close();
?>