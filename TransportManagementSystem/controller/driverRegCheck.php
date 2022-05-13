<?php 

require('../model/userModel.php');


if(isset($_REQUEST['submit'])){
	
	$id=$_REQUEST['id'];
	$username=$_REQUEST['username'];
	$drivingLicense=$_REQUEST['drivingLicense'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$age=$_REQUEST['age'];
	$position=$_REQUEST['position'];
	$gender=$_REQUEST['gender'];
	$email=$_REQUEST['email'];
	

	if($id!=null && $username!=null && $drivingLicense!=null && $address!=null && $phone!=null && $age!=null && $position!=null && $gender!=null && $email != null ){
		
	

		$status = driverAddDb($id,$username,$drivingLicense,$address,$phone,$age,$position,$gender,$email);
		
		if($status){
			echo "Success";
           
		}else{
            echo "Something wrong...";
		
		}


	}else{
		echo "null submission ....";
	}
}

?>