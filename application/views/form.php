<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

	<form method="POST" action="process.php">
		
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="cpassword"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>

	</form>

</body>
</html>