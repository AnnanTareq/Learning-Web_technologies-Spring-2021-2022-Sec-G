<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Admin Password</title>
	<style type="text/css">
		#bd{
			background-color: lightblue;
		}
		#hd{
			background-color: greenyellow;
			text-align: center;
			font-family: "times new roman";
			font-size: 80px;
		}
		.wd{
			background-color: blue;
			color: white;
			font-family: "times new roman";
			font-size: 25px;
		}
		.bx{
			font-family: 'times new roman';
			font-size: 25px;
			background: yellowgreen;
		}
	</style>
</head>
<body id="bd">
	<form action="../controller/editAdminPassCheck.php" method="POST">
		<h1 id='hd'>Edit Admin Password</h1>
	<fieldset>
		<h2 class='wd'>Email : </h2>
		<input class="bx" type="text" name="email" placeholder="Enter Your Email Address Here "><br>
		<h2 class="wd">New Password : </h2>
		<input class="bx" type="text" name="password1" placeholder="New Password"><br><br>
		<h2 class="wd">Confirm Password : </h2>
		<input class="bx" type="text" name="password2" placeholder="Confirm Password"><br><br>
		<input class="bx" type="submit" name="submit" value="SUBMIT"><br><br>
	</fieldset>	
	</form>
	
			
	
</body>
</html>