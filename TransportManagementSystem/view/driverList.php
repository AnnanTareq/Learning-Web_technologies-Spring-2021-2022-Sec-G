<?php
require('../model/userModel.php');

$host = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'tmssys';
    $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
 
$sql = "SELECT * FROM driver";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
   echo "<table>";
    echo "<tr>";
      echo "<th>username</th>";
      echo "<th>drivingLicense</th>";
    echo "</tr>";
 
  while($data = mysqli_fetch_assoc($result)){
    echo "<tr>";
      echo "<td>".$data['username']."</td>";
      echo "<td>".$data['drivingLicense']."</td>";
      
    echo "</tr>";
  
  }
  echo "</tr>";
  }else{
  echo "No Data Found...";
}

mysqli_close($con);
?>