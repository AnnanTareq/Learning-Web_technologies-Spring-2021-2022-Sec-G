<?php 
//session_start();
require('../model/userModel.php');


if(isset($_REQUEST['submit'])){
	
	$id=$_REQUEST['id'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$age=$_REQUEST['age'];
	$position=$_REQUEST['position'];
	$gender=$_REQUEST['gender'];
	$email=$_REQUEST['email'];
	

	if($id!=null && $username!=null && $password!=null && $address!=null && $phone!=null && $age!=null && $position!=null && $gender!=null && $email != null ){
		
	

		$status = adminSignUpDb($id,$username,$password,$address,$phone,$age,$position,$gender,$email);
		
		if($status){
			echo "Success";
            //header('location: ../views/login.php');
		}else{
            echo "Something wrong...";
		//	header('location: ../views/reg.php');
		}


	}else{
		echo "null submission ....";
	}
}

?>