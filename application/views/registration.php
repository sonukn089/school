<!DOCTYPE html>
<html>
<head>
	<title><?= $page_title ?></title>
</head>
<body>
	<center>
		<h1 style="background: red; color: white;">Employee Registration Form</h1>
		<form method="POST" action="employee_data.php">
			<table>
				<tr>
					<td>First Name</td>
					<td>Middile Name</td>
					<td>Last Name</td>
					<td>Email</td>
				</tr>
				<tr>
					<td><input type="text" name="first_name"></td>
					<td><input type="text" name="middle_name"></td>
					<td><input type="text" name="last_name"></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>D.O.B</td>
					<td>Gender</td>
					<td>Father Name</td>
					<td>Mother Name</td>
				</tr>
				<tr>
					<td><input type="date" name="dob"></td>
					<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
					</td>
					<td><input type="text" name="fname"></td>
					<td><input type="text" name="mname"></td>
				</tr>
				<tr>
					<td>Nationality</td>
					<td>Phone</td>
					<td>Mobile</td>
					<td>Marital Status</td>
				</tr>
				<tr>
					<td>
						<select name="nationality" required="true">
							<option>Choose-Nationality</option>
							<option>Indian</option>
							<option>Australia</option>
							<option>New Zeland</option>
							<option>South Africa</option>
							<option>Others</option>
						</select>
					</td>
					<td><input type="number" name="pnumber"></td>
					<td><input type="number" name="mnumber"></td>
					<td>
						<select name="marital" required="true">
							<option>Choose-Marital Status</option>
							<option>Single</option>
							<option>Married</option>
							<option>Unmarried</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>City</td>
					<td>Country</td>
					<td>Postal Code</td>
				</tr>
				<tr>
					<td><input type="text" name="address"></td>
					<td><input type="text" name="city"></td>
					<td><input type="text" name="state"></td>
					<td><input type="number" name="postal_code"></td>
				</tr>
			</table>
			<h1 style="background: red; color: white;">Education Details and Experience</h1>
			<table>
				<tr>
					<td>Graduation</td>
					<td>Post Graduation</td>
					<td>IT Skills</td>
					<td>Designation</td>
				</tr>
				<tr>
					<td>
						<select name="graduation">
							<option>Slecet-Graduation</option>
							<option>B.A</option>
							<option>BSc</option>
							<option>BCA</option>
							<option>B.Tech</option>
							<option>BBA</option>
						</select>
					</td>
					<td>
						<select name="pgraduation">
							<option>Slecet-Post Graduation</option>
							<option>MA</option>
							<option>MSc</option>
							<option>MCA</option>
							<option>M Tech</option>
							<option>MBA</option>
						</select>
					</td>
					<td><input type="text" name="skills"></td>
					<td><input type="text" name="designation"></td>
				</tr>
				<tr>
					<td>Previous Company</td>
					<td>Deparment</td>
					<td>Experience</td>
					<td>Annual Income</td>
				</tr>
				<tr>
					<td><input type="text" name="previous_company"></td>
					<td><input type="text" name="deparment"></td>
					<td>
						<select name="experience">
							<option>Hom Many Experience</option>
							<option>1 year</option>
							<option>2 years</option>
							<option>3 years</option>
							<option>4 years</option>
							<option>5 years</option>
							<option>5+ years</option>
						</select>
					</td>
					<td>
						<select name="annual">
							<option>Select Annual Income</option>
							<option>1 Lack</option>
							<option>2 Lack</option>
							<option>3 Lack</option>
							<option>4 Lack</option>
							<option>5 Lack</option>
							<option>5+ Lack</option>
						</select>
					</td>
				</tr>
			</table>
			<h1 style="background: red; color: white;">Salary-Structures</h1>
			<table>
				<tr>
					<td>Cost To Company (CTC)</td>
					<td>Basic Salay</td>
					<td>HRA</td>
					<td>Take Home Salary</td>
				</tr>
				<tr>
					<td><input type="number" name="ctc"></td>
					<td><input type="number" name="basic_salary"></td>
					<td><input type="number" name="hra"></td>
					<td><input type="number" name="ths"></td>
				</tr>
				<tr>
					<td>Employees' Provident Fund</td>
					<td>Universal Account Number (UAN)</td>
					<td>Employees' State Insurance</td>
					<td>Dearness Allowance</td>
				</tr>
				<tr>
					<td><input type="number" name="epf"></td>
					<td><input type="number" name="uan"></td>
					<td><input type="number" name="esic"></td>
					<td><input type="number" name="da"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Register Here"></td>
				</tr>
			</table>
		</form>
	</center>	
</body>
</html>