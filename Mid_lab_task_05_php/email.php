<?php

$email="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['mail']==null){
    	$error="Invalid email!";
	}
	else{$email=$_REQUEST['mail'];}
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="REQUEST" action="$">

	  
	  	<fieldset>
        <legend>Email</legend>
	  		
        <input type="text" name="mail" value="<?=$email?>"><td><?=$error?></td></br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>