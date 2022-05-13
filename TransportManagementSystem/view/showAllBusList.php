<?php
require('../model/userModel.php');

$host = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'tmssys';
    $con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
 
$sql = "SELECT * FROM bus";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
   echo "<table>";
    echo "<tr>";
      echo "<th>Bus Name</th>";
      echo "<th>From</th>";
      echo "<th>To</th>";
      echo "<th>Time schedule</th>";
      echo "<th>Fare</th>";
    echo "</tr>";
 
  while($data = mysqli_fetch_assoc($result)){
    echo "<tr>";
      echo "<td>".$data['busName']."</td>";
      echo "<td>".$data['fromm']."</td>";
      echo "<td>".$data['too']."</td>";
      echo "<td>".$data['time']."</td>";
      echo "<td>".$data['fare']."</td>";
      
    echo "</tr>";
  
  }
  echo "</tr>";
  }else{
  echo "No Data Found...";
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
    body {
  background-color: lightblue;
  text-align: center;
  font-family: "Times New Roman";
  column-rule-color: #ff0000;
  column-gap: 20px;
} 
  </style>
  
</head>
<body>

</body>
</html>
