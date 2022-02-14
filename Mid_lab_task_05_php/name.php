<?php

$uname="";
$error="";
if(isset($_REQUEST['submit'])){
	if(_REQUEST['name']==null){
    	$error="Invalid Name!";
	}
	else{$uname=$_REQUEST['name'];}
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="REQUEST" action="#">

	  
	  	<fieldset>
        <legend>Name</legend>
	  		
        <input type="text" name="name" value="<?=$uname?>"><label><?=$error?></label></br><br>
	  		
	  	<input type="submit" value="Submit">
	  </fieldset>
	</form>
</body>

</html>