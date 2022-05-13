<html>
<head>
	<title><h1>Signup</h1></title>
	<style type="text/css">
		#bd{
			background-color: lightblue;
		}
		
		#field{
			background-color: darkmagenta;
		}
		#h1{
			background-color: white;
			color: green;
			font-family: 'times new roman';
			font-size: 80px;
		}
		#h3{
			background-color: greenyellow;
			color: blue;
			font-family: 'times new roman';
			font-size: 60px;
		}
		.fnt{
			background-color: dodgerblue;
			color: floralwhite;
			font-family: 'times new roman';
			font-size: 25px;
		}
		.bx{
			font-size: 25px;
		}
	</style>
</head>
<body id='bd'>
	<form method="POST" action="../controller/driverRegCheck.php">
		<center>
			<h1 id='h1'>Transport Management System</h1>
			<h3 id='h3'>Driver Sign Up</h3>
			
		</center>

		<fieldset id='field'>
			
			<div>
				<label class="fnt">Id : </label>
				<input class="bx" type="text" name="id" placeholder="Enter any id number"><br><br>
			</div>

			<div>
				<label class="fnt">Username : </label>
				<input class="bx" type="text" name="username" placeholder="Username" value=""><br><br>
				
			
			</div>

			<div>
			<label class="fnt">Driving License No : </label>
			<input class="bx" type="text" name="drivingLicense" placeholder="Driving license number" value=""><br><br>
			</div>

			<div>
				<label class="fnt">Address : </label>
				<input class="bx" type="text" name="address" placeholder="Address" value=""><br><br>
			</div>

			
				
			<div>
				<label class="fnt">Phone : </label>
				<input class="bx" type="text" name="phone" placeholder="Phone Number(integer value)" value=""><br><br>
			</div>
			

			<div>
				<label class="fnt">Age : </label>
				<input class="bx" type="text" name="age" placeholder="Age(integer value)" value=""><br><br>
				
			</div>

			<div>
				<label class="fnt">Position</label>
				<input class="bx" type="text" name="position" placeholder="Working position" value=""><br><br>
				
			</div>

			<div>
				<label class="fnt" for="gender">Gender :</label>
				<input class="fnt" type="radio" name="gender" value="M">Male
				<input class="fnt" type="radio" name="gender" value="F">Female
				<input class="fnt" type="radio" name="gender" value="O">Others<br><br>
			</div>

			<div>
				<label class="fnt">Email : </label>			
				<input class="bx" type="email" name="email" placeholder="Email address" value=""><br><br>
				
			</div>

			<div>
					<input class="bx" type="submit" name="submit" value="INSERT">
				
			</div>
		
		</fieldset>
		
	</form>
</body>
</html>