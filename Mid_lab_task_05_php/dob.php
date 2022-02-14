<?php

$dob="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['dob']==null){
    	$error="Invalid date!";
	}
	else{$dob=$_REQUEST['dob'];}
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="REQUEST" action="@">

	  
	  	<fieldset>
        <legend>Date Of Birth</legend>
	  	<input type="date" name="date" id="date" placeholder="Enter Your Date of Birth ">
	  	<br><br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>