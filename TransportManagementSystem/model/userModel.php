<?php 

	function getConnection(){
		$host = 'localhost';
		$dbuser = 'root';
		$dbpassword = '';
		$dbname = 'tmssys';
		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}

function adminLogin($email,$password){
	$conn = getConnection();

	if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
 	

		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
   
		if(!empty($email) && !empty($password)){
			$sql = "SELECT * FROM admin WHERE email='{$email}' AND password='{$password}'"	;
			$sql_query = mysqli_query($conn,$sql);
   
			$mysqli_num_rows = mysqli_num_rows($sql_query);
   
			if($mysqli_num_rows){
				echo 'Login Successful...';
			}else{
				echo 'Invalid Username Or Password....';
			}
	
   
   
		}else{
		   echo 'something went wrong.....';
	   }
	}
}


function adminSignUpDb($id,$username,$password,$address,$phone,$age,$position,$gender,$email){
	$conn = getConnection();

	$id=$_REQUEST['id'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$age=$_REQUEST['age'];
	$position=$_REQUEST['position'];
	$gender=$_REQUEST['gender'];
	$email=$_REQUEST['email'];

	$sql = "INSERT INTO admin VALUES ('$id','$username','$password','$address','$phone','$age','$position','$gender','$email')";

	//mysqli_query($conn, $sql);

	if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$id\n$username\n $password\n "
                . "$address\n $phone\n $age\n $position\n $gender\n $email\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);

}


function editAdminPasswordDb($email,$password1,$password2){
	$conn =getConnection();

	$email=$_REQUEST['email'];
	$password1=$_REQUEST['password1'];
	$password2=$_REQUEST['password2'];


	if($password1 === $password2){
		$sql = "UPDATE admin SET password='{$password1}' WHERE email='{$email}'";
		mysqli_query($conn,$sql);
		echo "Success....";

	}else{
		echo "Something wrong, check your new password";
	}
}



function driverAddDb($id,$username,$drivingLicense,$address,$phone,$age,$position,$gender,$email){
	$conn = getConnection();

	$id=$_REQUEST['id'];
	$username=$_REQUEST['username'];
	$drivingLicense=$_REQUEST['drivingLicense'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$age=$_REQUEST['age'];
	$position=$_REQUEST['position'];
	$gender=$_REQUEST['gender'];
	$email=$_REQUEST['email'];

	$sql = "INSERT INTO driver VALUES ('$id','$username','$drivingLicense','$address','$phone','$age','$position','$gender','$email')";

	//mysqli_query($conn, $sql);

	if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$id\n$username\n $drivingLicense\n "
                . "$address\n $phone\n $age\n $position\n $gender\n $email\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
}

function busCompanyInsertDb($busName,$fromm,$too,$time,$fare){
	$conn =getConnection();

	$busName=$_REQUEST['busName'];
	$fromm=$_REQUEST['fromm'];
	$too=$_REQUEST['too'];
	$time=$_REQUEST['time'];
	$fare=$_REQUEST['fare'];

	$sql = "INSERT INTO bus VALUES ('$busName','$fromm','$too','$time','$fare')";

	if(mysqli_query($conn, $sql)){
		echo "<h3>Data stored in a database successfully.
			</h3>"; 

		echo nl2br("\n$busName\n$fromm\n $too\n "
			. "$time\n $fare\n");
	} else{
		echo "ERROR: Hush! Sorry $sql. " 
			. mysqli_error($conn);
	}
}

function driverDeleteDb($username,$phone){
	$conn = getConnection();
	$username=$_REQUEST['username'];
	$phone=$_REQUEST['phone'];

	$sql="DELETE FROM driver WHERE username ='{$username}' AND phone='{$phone}' ";

	if(mysqli_query($conn,$sql)){
		echo "Deletion done from database<br><br>";
	}else{
		echo "Something wrong<br><br>";
	}


}


?>