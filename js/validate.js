function validate()
{
	var check=/^[a-zA-Z ]+$/;
var check_pass=/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/;
	if(!document.getElementById("first_name").value.match(check))
{

	alert("Enter only characters in First name");
	document.getElementById("first_name").focus();
	return false;
}
if(document.getElementById("last_name").value!="")
{
if(!document.getElementById("last_name").value.match(check))
{
	alert("Enter only characters in last name");
	document.getElementById("last_name").focus();
	return false;
	
}
	
}
if(document.getElementById("course").value=="null")
{
	
	alert("Please Select Course");
	document.getElementById("course").focus();
	return false;
	
	
	
}




if(document.getElementById("phone").value.length!=10)
{
	alert("Please Enter valid Mobile Number");
	document.getElementById("phone").focus();
	return false;
}




if(document.getElementById("state").value=="null")
{
	
	alert("Please Select State");
	document.getElementById("state").focus();
	return false;
	
	
}


if(document.getElementById("college").value=="null")
{
	
	alert("Please Select College");
	document.getElementById("college").focus();
	return false;
	
	
	
}
if(document.getElementById("gender").value=="null")
{
	
	alert("Please Select Gender");
	document.getElementById("gender").focus();
	return false;
	
	
	
}
if(document.getElementById("others").value!="")
	{
	if(!document.getElementById("others").value.match(check))
	{
		alert("Please Enter valid College name");
		document.getElementById("others").value="";
		document.getElementById("others").focus();
		return false;
		
	}
	
	}



	if(!document.getElementById("pass").value.match(check_pass))
{

	alert("Password length must be Between 8-16 Characters\nPassword must start with characters\nIt must contain Characters (a-z,A-Z)\nAtleast one Number (0-9)\nAtleast one Special Character (!@#$%^&*()_+) ");
	document.getElementById("pass").focus();
	return false;
}



	if(document.getElementById("pass").value!=document.getElementById("c_pass").value)
{

	alert("Password and Confirm Password not Matching");
	document.getElementById("pass").focus();
	return false;
}

	else{
		
	return true;	
	}
	
	
	
}

function show_password()
 {
	
	var pass = document.getElementById("pass");
	var c_pass = document.getElementById("c_pass");
	
	if(pass.type=="password")
	{
     pass.type="text"
	 c_pass.type="text";
	 
 	}
	else 
	{
		pass.type="password";
		c_pass.type="password";
	}
	
	
}


