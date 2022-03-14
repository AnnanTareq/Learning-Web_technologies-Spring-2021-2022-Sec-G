<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$username = $_REQUEST['username'];
	$phone	=	$_REQUEST['phone'];
	$age = $_REQUEST['age'];
	$gender = $_REQUEST['gender'];
	$password = $_REQUEST['password'];
	$email = $_REQUEST['email'];

	if($username != null && $phone!=null &&$age!=null $gender!=null && $password != null && $email != null){
		
		

		$user = "User Name= ".$username.","." Phone Number = ".$phone.","." Age = ".$age.","."Gender = ".$gender.",". "Password = ".$password.","."Email = ".$email;
		$file = fopen('tms.txt', 'w');
		fwrite($file, $user);
		echo "User Add successful";

	}else{
		echo "Something went wrong, try again!!!";
	}
}

?>