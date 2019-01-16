
function check_pass(){
var check_pass=/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/;
if(!document.getElementById("pass").value.match(check_pass))
{

	alert("Password length must be Between 8-16 Characters\nIt must contain Characters (a-z,A-Z)\nAtleast one Number (0-9)\nAtleast one Special Character (!@#$%^&*()_+) ");
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