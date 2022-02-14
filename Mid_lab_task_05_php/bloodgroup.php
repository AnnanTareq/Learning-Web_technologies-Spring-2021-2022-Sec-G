<?php

$bloodGroup="";
$error="";
if(isset($_GET['submit'])){
	if(_GET['bloodGroup']==null){
    	$error="Invalid blood group!";
	}
	else{$bloodGroup=$_GET['blood Group'];}
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="#">

	  
	  	<fieldset>
        <legend>Blood Group</legend>
	  		
        <select name="bloodgroup" >
		<option value="A+">A+</option>
		<option value="B+">B+</option>
		<option value="AB+">AB+</option>
		<option value="o+">O+</option>
		<option value="A-">A-</option>
		<option value="B-">B-</option>
		<option value="AB-">AB-</option>
		<option value="o-">O-</option></select>
        <br><br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>