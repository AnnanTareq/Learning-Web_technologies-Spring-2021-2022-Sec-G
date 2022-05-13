<?php 
	require('../model/userModel.php');

	if(isset($_REQUEST['submit'])){

	$busName=$_REQUEST['busName'];
	$fromm=$_REQUEST['fromm'];
	$too=$_REQUEST['too'];
	$time=$_REQUEST['time'];
	$fare=$_REQUEST['fare'];

	if($busName!=null && $fromm!=null && $too!=null && $time!=null && $fare!=null){
		$status = busCompanyInsertDb($busName,$fromm,$too,$time,$fare);
		if($status){
			echo "Successfully bus inserted...";
		}else{
			echo "Something went wrong!!!!";
		}

	}else{
		echo "Null Submission!!!!!!!!";
	}
}

?>
<br>
<a href="../view/busCompany.php">Back</a><br><br>
<a href="../view/Dashboard.php">Dashboard</a>