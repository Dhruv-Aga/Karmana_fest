<?php
require('connect.php');


if(isset($_POST["phone"]))
{
	if($_POST["phone"]!='')
	{
		
		$sql ="select *from userdata where phone ='".$_POST["phone"]."'";
		
	}
	
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		
		echo "1";
		
	}
 }                                
	
$conn->close();
?>