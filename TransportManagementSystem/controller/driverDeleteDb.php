<?php 

require('../model/userModel.php');


if(isset($_REQUEST['submit'])){
	
	
	$username=$_REQUEST['username'];
	$phone=$_REQUEST['phone'];
	
	

	if($username!=null && $phone!=null){
		$status = driverDeleteDb($username,$phone);

	}else{
		echo "Null submission ....";
	}
}

?>
<a href="driverDelete.php">Back</a>