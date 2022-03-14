<?php 
session_start();

if(isset($_REQUEST['submit'])){
	
	$username=$_REQUEST['username'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$age=$_REQUEST['age'];
	$post=$_REQUEST['post'];
	$gender=$_REQUEST['gender'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];

	if($username != null && $address!=null && $phone!=null && $age!=null && $post!=null && $gender!=null && $email != null && $password != null){
		
		$user = ['username'=> $username,'address'=>$address,'phone'=>$phone,'age'=>$age,'post'=>$post,'gender'=>$gender, 'email'=>$email, 'password'=>$password];
		$_SESSION['user'] = $user; 
		header('location: AdminLogin.php');

	}else{
		echo "Something missing";
	}
}

?>