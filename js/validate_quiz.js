function validate_quiz()
{
	
	var check=/^[a-zA-Z ]+$/;
	
	if(!document.getElementById("team").value.match(check))
	{
		alert("Please Enter only Characters in Team name");
		
		document.getElementById("team").focus();
		return false;
		
	}
	if(document.getElementById("team").value.length>25)
	{
		
		alert("Length of Team name should not exceed 25 letters");
		
		document.getElementById("team").focus();
		return false;
	
		
	}
	if(document.getElementById("members").value=="null")
	{
		alert("Please Select Number of Members");
		
		document.getElementById("members").focus();
		return false;
		
		
	}
	 if(document.getElementById("mem2").value!="")
	{
	if(!document.getElementById("mem2").value.match(check))
	{
		alert("Please Enter valid name");
		
		document.getElementById("mem2").focus();
		return false;
		
	}
	
	}
	if(document.getElementById("phone2").value!="")
	{
	if(document.getElementById("phone2").value.length!=10)
{
	alert("Please Enter valid Mobile Number");
	document.getElementById("phone2").focus();
	return false;
}

	}
	return true;
	
}
function enable()
{
	var mem=document.getElementById("members").value;
	
	if(mem==2)
	{
		
		
		document.getElementById("hidename").hidden=false;
		document.getElementById("hidephone").hidden=false;
		document.getElementById("mem2").disabled=false;
		document.getElementById("phone2").disabled=false;
		
		
	}
	else
	{
		document.getElementById("mem2").disabled=true;
		document.getElementById("phone2").disabled=true;
		document.getElementById("hidename").hidden=true;
		document.getElementById("hidephone").hidden=true;
		
		
	}
	
	
	
}