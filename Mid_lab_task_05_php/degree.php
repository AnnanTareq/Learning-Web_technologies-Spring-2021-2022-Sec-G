<?php

$degree="";
$error="";
if(isset($_POST['submit'])){
	if(_POST['degree']==null){
    	$error="Invalid email!";
	}
	else{$degree=$_POST['degree'];}
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#">

	  
	  	<fieldset>
        <legend>Degree</legend>
        <input type="checkbox" name="degree" value="SSC">
		<label>SSC</label>
		<input type="checkbox" name="degree" value="HSC">
		<label>HSC</label>
		<input type="checkbox" name="degree" value="BSc">
		<label>BSc</label>
		<input type="checkbox" name="degree" value="Msc">
	  		
        </br><br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>