<html>
<head>
	<title><h1>Signup</h1></title>
	<style type="text/css">
		h1{
			
			background: green;
			color: darkred;
			font-family: "Times New Roman";
			font-size: 80px;
		}
		h3{
			background: greenyellow;
			color: orange;
			font-family: "Times New Roman";
			font-size: 60px;
		}
		.name{
			color: green;
			background-color: lightblue;
			font-family: "Times New Roman";
			font-size: 25px;
		}
		.g{
			color: red;
			font-family: "Times New Roman";
			background-color: greenyellow;
			font-size: 25px;
		}
		#field{
			background-color: lightblue;

		}
	</style>
</head>
<body>
	<form name='adm'  method="POST" action="../controller/adminRegCheck.php" onsubmit="return validateForm()">
		<center>
			<h1>Transport Management System</h1>
			<h3>Admin Sign Up</h3>
			
		</center>

		<fieldset id="field">
			
			<div>
				<label class="name">Id : </label>
				<input type="text" name="id" placeholder="Enter 4 digit any ID number"><br><br>
			</div>

			<div>
				<label class="name">Username : </label>
				<input type="text" name="username" placeholder="Username"><br><br>
				
			
			</div>

			<div>
			<label class="name">Password : </label>
			<input type="text" name="password" placeholder="Password"><br><br>
			</div>

			<div>
				<label class="name">Address : </label>
				<input type="text" name="address" placeholder="Address"><br><br>
			</div>

			
				
			<div>
				<label class="name">Phone : </label>
				<input type="text" name="phone" placeholder="Phone"><br><br>
			</div>
			

			<div>
				<label class="name">Age : </label>
				<input type="text" name="age" placeholder="Age"><br><br>
				
			</div>

			<div>
				<label class="name">Position</label>
				<input type="text" name="position" placeholder="Enter Your Position Name" value=""><br><br>
				
			</div>

			<div>
				<label class="name" for="gender">Gender :</label>
				<input class="g" type="radio" name="gender" value="M">Male
				<input class="g" type="radio" name="gender" value="F">Female
				<input class="g" type="radio" name="gender" value="O">Others<br><br>
			</div>

			<div>
				<label class="name">Email : </label>			
				<input type="email" name="email" placeholder="Email Address" value=""><br><br>
				
			</div>

			<div>
					<input type="submit" name="submit" value="Submit">
				
			</div>
		
		</fieldset>

	
		
	</form>

		<script type="text/javascript">
			function validateForm() {
  let x = document.forms["adm"]["id"].value;
  let y = document.forms["adm"]["password"].value;
  let z = document.forms["adm"]["phone"].value;
  let a = document.forms["adm"]["position"].value;
  let b = document.forms["adm"]["email"].value;
  let c = document.forms["adm"]["username"].value;
  let d = document.forms["adm"]["address"].value;
  let e = document.forms["adm"]["age"].value;
  let f = document.forms["adm"]["gender"].value;
  if (x || y || z ||a||b||c||d||e||f== "") {
    alert("Fill missing the values");
    return false;
  }
}
		</script>
</body>
</html>