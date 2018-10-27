<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cv</title>
</head>

<body>
<center>

<form id="sform" method="post" action="insert.php" onsubmit="return valiform()">

<table border="2px">
<tr>
<td><h1>Curriculam Vitae</h1></td>
</tr>

<tr><td>Fname:</td>
<td><input type="text" id="id" name="name" placeholder="Enter your first name" /></td>
</tr>

<tr><td>Lname:</td>
<td><input type="text" id="id" name="name" placeholder="Enter your last name" /></td>
</tr>

<tr><td>Father's Name:</td>
<td><input type="text" id="id" name="name" placeholder="Enter your father's name" /></td>
</tr>

<tr><td>Mother's Name:</td>
<td><input type="text" id="id" name="name" placeholder="Enter your mother's name" /></td>
</tr>

<tr><td>Phone No:</td>
<td><input type="text" id="number" name="name" placeholder="Enter your phone number" /></td>
</tr>

<tr><td>Email:</td>
<td><input type="email" id="email" name="email" placeholder="Enter your email address" /></td>
</tr>

<tr><td>Nid:</td>
<td><input type="text" id="number" name="number" placeholder="Enter your nid number" /></td>
</tr>

<tr><td>Address:</td>
<td><textarea rows="10" cols="20">
Enter your address:
</textarea><br />
</td>
</tr>

<tr><td>SSC:</td>
<td><input type="text" id="id" name="name" placeholder="Enter your ssc qualification" /></td>
</tr>

<tr><td>HSC:</td>
<td><input type="text" id="id" name="name" placeholder="Enter your hsc qualification" /></td>
</tr>

<tr><td>Religion:</td>
<td><input type="text" id="id" name="name" placeholder="Enter your religion" /></td>
</tr>

<tr><td>Gender:</td>
<td><input type="radio" id="male" name="gender" checked="checked"/>Male<br />

<input type="radio" id="female" name="gender" checked="checked"/>Female<br />

<input type="radio" id="others" name="gender" checked="checked"/>Others<br /></td>
</tr>

<tr><td>BG:</td>
<td><input type="text" id="id" name="name" placeholder="Enter your blood group" /></td>
</tr>

<tr>
<td><input type="submit" id="name" name="name"/></td>
</tr>

</center>
<script>

function valiform()
{
	var a1=document.forms["sform"]["fname"].value;
	var a2=document.forms["sform"]["lname"].value;
	var a3=document.forms["sform"]["father_name"].value;
	var a4=document.forms["sform"]["mother_name"].value;
	var a5=document.forms["sform"]["phone"].value;
	var a6=document.forms["sform"]["email"].value;
	var a7=document.forms["sform"]["nid"].value;
	var a8=document.forms["sform"]["address"].value;
	var a9=document.forms["sform"]["ssc"].value;
	var a10=document.forms["sform"]["hsc"].value;
	var a11=document.forms["sform"]["nationality"].value;
	var a12=document.forms["sform"]["religion"].value;
	var a13=document.forms["sform"]["gender"].value;
	var a14=document.forms["sform"]["dob"].value;
	var a15=document.forms["sform"]["bg"].value;
	
	
	
	
	if(a1==null || a1=="")
	{
		window.alert(" Fname must be field out");
		return  false;
	}
	else if(a2==null || a2=="")
	{
		window.alert("Lame must be field out");
		return  false;
	}
	else if(a3==null || a3=="")
	{
		window.alert("Father's name must be field out");
		return  false;
	}
	else if(a4==null || a4=="")
	{
		window.alert("Mother's name must be field out");
		return  false;
	}
	else if(a5==null || a5=="")
	{
		window.alert("Phone must be filed out");
		return  false;
	}
	else if(a6==null || a6=="")
	{
		window.alert("Email must be filed out");
		return  false;
	}
	else if(a7==null || a7=="")
	{
		window.alert("Nid must be filed out");
		return  false;
	}
	else if(a8==null || a8=="")
	{
		window.alert("Address must be filed out");
		return  false;
	}
	else if(a9==null || a9=="")
	{
		window.alert("Ssc must be filed out");
		return  false;
	}
	else if(a10==null || a10=="")
	{
		window.alert("Hsc must be filed out");
		return  false;
	}
	else if(a11==null || a11=="")
	{
		window.alert("Nationality must be filed out");
		return  false;
	}
	else if(a12==null || a12=="")
	{
		window.alert("Religion must be filed out");
		return  false;
	}
	else if(a13==null || a13=="")
	{
		window.alert("Gender must be filed out");
		return  false;
	}
	else if(a14==null || a14=="")
	{
		window.alert("Dob must be filed out");
		return  false;
	}
	else if(a15==null || a15=="")
	{
		window.alert("Bg must be filed out");
		return  false;
	}
	
}


</script>
</body>
</html>
