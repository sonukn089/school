<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
</head>
<body>

	<form method="POST" action="Information.php">
		<h1 style="background-color: #ff8000;">Student Information</h1>
		<table>
			<tr>
				<td>Scholar Number</td>
				<td>First Name</td>
				<td>Middile Name</td>
				<td>Last Name</td>
				<td>Admission Date</td>
			</tr>
			<tr>
				<td><input type="text" name="scholar_no"></td>
				<td><input type="text" name="first_name"><span class="error"></span></td>
				<td><input type="text" name="middle_name"></td>
				<td><input type="text" name="last_name"><span class="error">*</span></td>
				<td><input type="date" name="admission_date" min="2000-01-02"></td>
			</tr>
			<tr>
				<td>Date of birth *(yyyy-mm-dd)</td>
				<td>Gender</td>
				<td>Blood Group</td>
				<td>Birth Place</td>
			</tr>
			<tr>
				<td><input type="date" name="bday" min="2000-01-02"></td>
				<td>
					<input type="radio" name="gender" value="male" checked>Male
					<input type="radio" name="gender" value="female">Female
				</td>
				<td><input type="text" name="blood_group"></td>
				<td><input type="text" name="birth_place"></span></td>
			</tr>
			<tr>
				<td>Mother Tongue</td>
				<td>Category</td>
				<td>Religion</td>
				<td>Address Line 1</td>
			</tr>
			<tr>
				<td><input type="text" name="mother_tongue"></td>
				<td>
					<select name="category" required="true">
						<option>Choose-Category</option>
						<option>Gernal</option>
						<option>OBC</option>
						<option>SC</option>
						<option>ST</option>
					</select>
				</td>
				<td>
					<select name="religion" required="true">
						<option>Choose-Religion</option>
						<option>Hindu</option>
						<option>Muslim</option>
						<option>Christianity</option>
						<option>Others</option>
					</select>
				</td>
				<td><input type="text" name="address1"><span class="error">*</span></td>
			</tr>
			<tr>
				<td>Address Line 2</td>
				<td>City</td>
				<td>State</td>
				<td>Pin Code</td>
			</tr>
			<tr>
				<td><input type="text" name="address2"></td>
				<td><input type="text" name="city"><span class="error">*</span></td>
				<td><input type="text" name="state"><span class="error">*</td>
				<td><input type="text" name="pin"><span class="error">*</span></td>
			</tr>
			<tr>
				<td>Country</td>
				<td>Phone Number</td>
				<td>Mobile Number</td>
				<td>Email Address</td>
			</tr>
			<tr>
				<td><input type="text" name="country"></td>
				<td><input type="number" name="phone"></td>
				<td><input type="number" name="mobile"><span class="error">*</td>
				<td><input type="email" name="email"><span class="error">*</span></td>
			</tr>

		</table>
		<h1 style="background-color: #ff8000;">Parrent Information</h1>
		<table>
			<tr>
				<td>Father Name</td>
				<td>Mother Name</td>
				<td>Caretaker</td>
				<td>Caretaker Relation</td>
			</tr>
			<tr>
				<td><input type="text" name="fname"><span class="error">*</td>
				<td><input type="text" name="mname"><span class="error">*</td>
				<td><input type="text" name="caretaker"></td>
				<td><input type="text" name="relation"></td>
			</tr>
			<tr>
				<td>Father's Education</td>
				<td>Mother's Education</td>
				<td>Father Occupation</td>
				<td>Mother Occupation</td>
			</tr>
			<tr>
				<td><input type="text" name="feducation"></td>
				<td><input type="text" name="meducation"></td>
				<td><input type="text" name="foccupation"></td>
				<td><input type="text" name="moccupation"></td>
			</tr>
			<tr>
				<td>Family Annual Income</td>
				<td>Address<input type="checkbox" name="familyadd" value="add"><br></td>
				<td>City<input type="checkbox" name="fcity" value="city"><br></td>
				<td>State</td>
			</tr>
			<tr>
				<td><input type="text" name="fai"></td>
				<td><input type="text" name="fadd"></td>
				<td><input type="text" name="fcity"><span class="error">*</td>
				<td><input type="text" name="fstate"><span class="error">*</td>
			</tr>
			<tr>
				<td>Pin</td>
				<td>Country</td>
				<td>Phone Number</td>
				<td>Father Mobile Number<input type="checkbox" name="fcity" value="city"><br></td></td>
			</tr>
			<tr>
				<td><input type="text" name="fpin"></td>
				<td><input type="text" name="fcountry"></td>
				<td><input type="text" name="fphone"></td>
				<td><input type="text" name="fmobile"></td>
			</tr>
			<tr>
				<td>Mother's Mobile No.</td>
				<td>Select Transport Service</td>
				<td>Password</td>
				<td>Confirm Password</td>
			</tr>
			<tr>
				<td><input type="text" name="mmobile"></td>
				<td>
					<select name="transport" required="true">
						<option>Choose-Transportation</option>
						<option>Bus</option>
						<option>Car</option>
						<option>Volvo</option>
						<option>Others</option>
					</select>
				</td>
				<td><input type="password" name="password"></td>
				<td><input type="password" name="cpassword"></td>
			</tr>
		</table>
		<h1 style="background-color: #ff8000;">Class Information</h1>
		<table>
			<tr>
				<td>Admission date * (yyyy-mm-dd)</td>
				<td>Class of add</td>
				<td>Section</td>
				<td>Stream</td>
			</tr>
			<tr>
				<td><input type="date" name="adate" min="2000-01-02"></td>
				<td><input type="text" name="class"></td>
				<td><input type="text" name="section"></td>
				<td><input type="text" name="stream"><span class="error">*</span></td>
			</tr>
		</table>
		<h1 style="background-color: #ff8000;">Previous School/Class Details</h1>
		<table>
			<tr>
				<td>Class</td>
				<td>Passing Year</td>
				<td>School Name</td>
				<td>Roll No Marks</td>
				<td>Percentages</td>
				<td>Subject</td>
			</tr>
			<tr>
				<td><input type="text" name="pclass"></td>
				<td><input type="text" name="pyear"></td>
				<td><input type="text" name="sname"></td>
				<td><input type="text" name="roll"></td>
				<td><input type="text" name="percentage"></td>
				<td><input type="text" name="subject"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Register Here"></td>
			</tr>
		</table>
	</form>

</body>
</html>