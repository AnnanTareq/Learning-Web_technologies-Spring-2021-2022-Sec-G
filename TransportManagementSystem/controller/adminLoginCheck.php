<?php
    require('../model/userModel.php');


    if(isset($_REQUEST['submit'])){
	
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        
    
        if($email != null && $password != null ){
            
            $status = adminLogin($email,$password);
            <a href="Dashboard.php">Dashboard</a>
            return false;
            }
    
    
        }else{
            echo "null submission ....";
        }
    }

?>

