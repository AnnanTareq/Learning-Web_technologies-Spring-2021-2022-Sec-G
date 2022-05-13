<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Driver Delete</title>
	<style type="text/css">
		#dd{
			font-family: 'times new roman';
			text-align: center;
			color: green;
			background-color: red;
			font-size: 80px;
	}	
	.lb{
		font-family: 'times new roman';
		color: blue;
		font-size: 25px;
	}
	#fs{
		background-color: lightblue;
	}
	#bd{
		background-color: greenyellow;
	}
	.in{
		font-size: 25px;
	}
	</style>
	
</head>
<body id="bd">
	<h1 id='dd'>Driver Deletion</h1>
	<center>

		<form action="../controller/driverDeleteDb.php" method="POST">
			<fieldset id="fs">
			<label class="lb">Username</label>
			<input class='in' type="text" name="username" placeholder="Put username" required><br><br>
			<label class="lb">Phone</label>
			<input class="in" type="text" name="phone" placeholder="Phone number" required><br><br>
			<input type="submit" name="submit" value="DELETE">
		</fieldset>	
		</form>
		
	</center>
</body>
</html>