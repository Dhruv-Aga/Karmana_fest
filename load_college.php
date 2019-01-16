<?php
require('connect.php');

$output='';

if(isset($_POST["state"]))
{
	
	if($_POST["state"]!='')
	{
		
		$sql ="select name from college where state ='".$_POST["state"]."'";
		
	}
	
	$result=$conn->query($sql);
	echo '<option value="null" disabled="disabled" selected="selected">Choose option</option>';
	echo '<option value="Others" >Others</option>';
	
	                        while ($get_college = $result->fetch_assoc())
								  {
								   $output ='<option>'.$get_college['name'].'</option>';
								   echo $output;
								  }
                                    
	
	
}
$conn->close();
?>