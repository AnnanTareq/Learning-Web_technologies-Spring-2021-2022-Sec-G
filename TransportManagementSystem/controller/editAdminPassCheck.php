<?php
    require('../model/userModel.php');

    if(isset($_REQUEST['submit'])){
        $email=$_REQUEST['email'];
	    $password1=$_REQUEST['password1'];
	    $password2=$_REQUEST['password2'];

        $status = editAdminPasswordDb($email,$password1,$password2);

       if($email!=null && $password1!=null && $password2!=null){
        if($password1===$password2){
            echo "CHange Applied<br><br>";
            //header('location: ../view/Admin.php');
        }else{
            header('location: ../view/editAdminPass.php');
        }

       }else{
           echo "Null Submission....";
       }
       
       
       
    }


?>
<body>
    <a href='../view/Admin.php'>Log In </a><br><br>
    <a href="../view/Dashboard.php">Dashboard</a>
</body>