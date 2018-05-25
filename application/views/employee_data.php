<?php
	$path = "localhost";
	$password = "";
	$user = "root";

	mysql_connect($path, $user, $password) or die("We couldn't connect");
	$con = mysql_select_db("testschool");

	
	
	$employee_details = mysql_query(
		"INSERT INTO `employee_registration`(
					  `first_name`,
					  `middle_name`,
					  `last_name`,
					  `email`,
					   `dob`, 
					   `gender`, 
					   `fname`, 
					   `mname`, 
					   `nationality`, 
					   `pnumber`, 
					   `mnumber`, 
					   `marital`, 
					   `address`, 
					   `city`, 
					   `state`, 
					   `postal_code`)
		VALUES ('
			".$_POST['first_name']."',
			'".$_POST['middle_name']."',
			'".$_POST['last_name']."',
			'".$_POST['email']."',
			'".$_POST['dob']."',
			'".$_POST['gender']."',
			'".$_POST['fname']."',
			'".$_POST['mname']."',
			'".$_POST['nationality']."',
			'".$_POST['pnumber']."',
			'".$_POST['mnumber']."',
			'".$_POST['marital']."',
			'".$_POST['address']."',
			'".$_POST['city']."',
			'".$_POST['state']."',
			'".$_POST['postal_code']."')
		");			
				
		$employee_id = mysql_insert_id();

		$queryString = "INSERT INTO `salary_structures`(
						`employee_id`,
						`ctc`, 
						`basic_salary`, 
						`hra`, 
						`ths`, 
						`epf`, 
						`uan`, 
						`esic`, 
						`da`)
					VALUES ('".$employee_id."',
						'".$_POST['ctc']."',
						'".$_POST['basic_salary']."',
						'".$_POST['hra']."',
						'".$_POST['ths']."',
						'".$_POST['epf']."',
						'".$_POST['uan']."',
						'".$_POST['esic']."',
						'".$_POST['da']."')";
		$salary_structure = mysql_query($queryString);
			$queryString = "INSERT INTO `education_details`(
							`graduation`,
							`pgraduation`,
							`skills`,
							`designation`,
							`previous_company`,
							`deparment`,
							`experience`,
							`annual`)
					VALUES ('".$_POST['graduation']."',
							'".$_POST['pgraduation']."',
							'".$_POST['skills']."',
							'".$_POST['designation']."',
							'".$_POST['previous_company']."',
							'".$_POST['deparment']."',
							'".$_POST['experience']."',
							'".$_POST['annual']."')";
			$education_detail = mysql_query($queryString);

						echo "Sucessfully Record Insert";		
?>


















<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1 style="background-color: blue; color: white;">Employee Information</h1>

	<?php
		echo "First Name : ".$_POST['first_name']."<br>";
		echo "Middile Name : ".$_POST['middle_name']."<br>";
		echo "Last Name : ".$_POST['last_name']."<br>";
		echo "Email : ".$_POST['email']."<br>";
		echo "<hr>";
	?>
	<?php
		echo "D.O.B : ".$_POST['dob']."<br>";
		echo "Gender : ".$_POST['gender']."<br>";
		echo "Father Name : ".$_POST['fname']."<br>";
		echo "Mother Name : ".$_POST['mname']."<br>";
		echo "<hr>";
	?>
	<?php
		echo "Nationality : ".$_POST['nationality']."<br>";
		echo "Phone : ".$_POST['pnumber']."<br>";
		echo "Mobile : ".$_POST['mnumber']."<br>";
		echo "Marital Status : ".$_POST['marital']."<br>";
		echo "<hr>";
	?>
	<?php
		echo "Address : ".$_POST['address']."<br>";
		echo "City : ".$_POST['city']."<br>";
		echo "Country : ".$_POST['state']."<br>";
		echo "Postal Code : ".$_POST['postal_code']."<br>";
		echo "<hr>";
	?>

	<h1 style="background-color: blue; color: white;">Education Details and Experience</h1>

	<?php
		echo "Graduation : ".$_POST['graduation']."<br>";
		echo "Post Graduation : ".$_POST['pgraduation']."<br>";
		echo "IT Skills : ".$_POST['skills']."<br>";
		echo "Designation : ".$_POST['designation']."<br>";
		echo "<hr>";
	?>
	<?php
		echo "Previous Company : ".$_POST['previous_company']."<br>";
		echo "Deparment : ".$_POST['deparment']."<br>";
		echo "Experience : ".$_POST['experience']."<br>";
		echo "Annual Income : ".$_POST['annual']."<br>";
		echo "<hr>";
	?>

	<h1 style="background: blue; color: white;">Salary-Structures</h1>

	<?php
		echo "Cost To Company (CTC) : ".$_POST['ctc']."<br>";
		echo "Basic Salay : ".$_POST['basic_salary']."<br>";
		echo "HRA : ".$_POST['hra']."<br>";
		echo "Take Home Salary : ".$_POST['ths']."<br>";
		echo "<hr>";
	?>
	
	<?php
		echo "Employees' Provident Fund : ".$_POST['epf']."<br>";
		echo "Universal Account Number (UAN) : ".$_POST['uan']."<br>";
		echo "Employees' State Insurance : ".$_POST['esic']."<br>";
		echo "Dearness Allowance : ".$_POST['da']."<br>";
		echo "<hr>";
	?>

</body>
</html>