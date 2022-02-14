<?php

$gender="";
$error="";
if(isset($_POST['submit'])){
	if(_POST['gender']==null){
    	$error="Invalid!";
	}
	else{$email=$_POST['gender'];}
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="*">

	  
	  	<fieldset>
        <legend>Gender</legend>
	  	<input type="checkbox" name="gender" value="Male">
		<label>Male</label>
		<input type="checkbox" name="gender" value="Female">
		<label>Female</label>
		<input type="checkbox" name="gender" value="Other">
		<label>Other</label>
	</br><br>
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>