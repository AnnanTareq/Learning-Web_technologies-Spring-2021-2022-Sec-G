<!DOCTYPE html>
<html>
<head>
	<img src="../view/download.jpg" alt="Transport Management System" style="width:1800px;height:200px";>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
	<style type="text/css">
		h1{
			color: darkred;
			font-family: "Times New Roman";
			font-size: 80px;
		}
		h3{
			color: green;
			font-family: Arial;
			font-size: 50px;
		}

		#email{
			color: blue;
			font-family: "Times New Roman";
			font-size: 25px;
		}
		#pass{
			color: blue;
			font-family: "Times New Roman";
			font-size: 25px;
		}

		#sub{
			color: orange;
			border: red;
			padding: green;
			width: 100px;
		}
		#sign{
			color: green;
			font-family: "Times New Roman";
			font-size: 25px;
		}
		#forgot{
			color: greenyellow;
			font-family: "Times New Roman";
			font-size: 20px;
		}
		#field{
			background-color: lightblue;
		}

	</style>
</head>
<body>
	<center>
		<h1>Transport Management System</h1>
		<h3>Welcome to Admin page </h1>
		
	</center>
		
<form name="login" action="../controller/adminLoginCheck.php" method="POST" onsubmit="return validateForm()">
	<fieldset id="field">
			<div>
			<h2 id="email">Email : </h2>
			<input  type="text" name="email" placeholder="Enter Your Email Address Here " required><br>
		</div>

		<div>
			<h2 id="pass">Password : </h2>
			<input type="text" name="password" placeholder="Password" required><br><br>
		</div>

		<div>
			<input id="sub" type="submit" name="submit" value="SUBMIT"><br><br>
		</div>

		<div>
			<a id="sign" href="adminSignUp.php">Sign Up</a>
			<h2 id="forgot"><a  href="editAdminPass.php">Forgot Password</a></h2>
		</div>
		</fieldset>
</form>
		
	
		<script type="text/javascript">
	function validateForm() {
  let x = document.forms["login"]["email"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
		</script>
		
		
	
</body>
</html>