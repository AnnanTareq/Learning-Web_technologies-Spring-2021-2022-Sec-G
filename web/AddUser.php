<?php 
	require('AdminLoginCheck.php');
?>

<html>
<head>
	<title>Add User</title>
</head>
<body>
	<form method="POST" action="UserRegCheck.php">

		<a href="Home.php"> Home</a> 
		<a href="CheckList.php">Back</a>
		

		<fieldset>
			<legend>Create New User by Admin</legend>
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" value="">
				</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>
					<input type="text" name="phone" value="">
				</td>
			</tr>
			<tr>
				<td>Age</td>
				<td>
					<input type="text" name="age" value="">
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="text" name="gender" value="">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email" value="">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" value="">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Create">
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>