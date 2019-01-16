function validate_project(){
	
	
	
	
	var check=/^[a-zA-Z ]+$/;
	
	if(document.getElementById("tech").value=="null")
	{
		alert("Please Select Technology");
		
		document.getElementById("tech").focus();
		return false;
		
		
	}
	
	
	if(!document.getElementById("title").value.match(check))
	{
		alert("Please Enter only Characters in Project Title");
		
		document.getElementById("title").focus();
		return false;
		
	}
	if(document.getElementById("title").value.length>100)
	{
		
		alert("Length of Project Title should not exceed 100 letters");
		
		document.getElementById("title").focus();
		return false;
	
		
	}
	
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
	
	
	
	
	if(!document.getElementById("mem2").value.match(check))
	{
		alert("Please Enter valid name");
		
		document.getElementById("mem2").focus();
		return false;
		
	}
	
	if(document.getElementById("phone2").value.length!=10)
{
	alert("Please Enter valid Mobile Number");
	document.getElementById("phone2").focus();
	return false;
}
	
	
	
	if(document.getElementById("mem3").value!="")
	{
	if(!document.getElementById("mem3").value.match(check))
	{
		alert("Please Enter valid name");
		
		document.getElementById("mem3").focus();
		return false;
		
	}
	
	}
	if(document.getElementById("phone3").value!="")
	{
	if(document.getElementById("phone3").value.length!=10)
{
	alert("Please Enter valid Mobile Number");
	document.getElementById("phone3").focus();
	return false;
}
	}
	
	if(document.getElementById("mem4").value!="")
	{
	if(!document.getElementById("mem4").value.match(check))
	{
		alert("Please Enter valid name");
		
		document.getElementById("mem4").focus();
		return false;
		
	}
	
	}
	if(document.getElementById("phone4").value!="")
	{
	if(document.getElementById("phone4").value.length!=10)
{
	alert("Please Enter valid Mobile Number");
	document.getElementById("phone4").focus();
	return false;
}
	}
	
	
	
	else{
		
		return true;
	}
	
	
	
	
	
	
}




function enable()
{
	var mem=document.getElementById("members").value;
	
	if(mem==3)
	{
		
		
		document.getElementById("hidename").hidden=false;
		document.getElementById("hidephone").hidden=false;
		document.getElementById("mem3").disabled=false;
		document.getElementById("phone3").disabled=false;
		document.getElementById("mem4").disabled=true;
		document.getElementById("phone4").disabled=true;
		document.getElementById("hidename1").hidden=true;
		document.getElementById("hidephone1").hidden=true;
		
		
	}
	else if(mem==4)
	{
		document.getElementById("hidename").hidden=false;
		document.getElementById("hidephone").hidden=false;
		document.getElementById("hidename1").hidden=false;
		document.getElementById("hidephone1").hidden=false;
		document.getElementById("mem3").disabled=false;
		document.getElementById("phone3").disabled=false;
		document.getElementById("mem4").disabled=false;
		document.getElementById("phone4").disabled=false;
		
		
	}
	else{
		document.getElementById("mem3").disabled=true;
		document.getElementById("phone3").disabled=true;
		document.getElementById("mem4").disabled=true;
		document.getElementById("phone4").disabled=true;
		document.getElementById("hidename").hidden=true;
		document.getElementById("hidephone").hidden=true;
		document.getElementById("hidename1").hidden=true;
		document.getElementById("hidephone1").hidden=true;
		
	}
	
	
	
}