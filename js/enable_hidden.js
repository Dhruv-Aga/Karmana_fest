



function show(){
	

	var college=document.getElementById("college").value;
	
	if(college=="Others")
	{
		
		document.getElementById("others_col").hidden=false;
		document.getElementById("others").disabled=false;
	}
	else{
		document.getElementById("others").disabled=true;
		document.getElementById("others_col").hidden=true;
	}
	
	
	
}
