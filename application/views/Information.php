<?php
	$path = "localhost";
	$password = "";
	$user = "root";

	mysql_connect($path, $user, $password) or die("We couldn't connect");
	$con = mysql_select_db("testschool");
	
	$sqlParentInformation = mysql_query(
		"INSERT INTO `parent_info`(
			`father_name`, 
			`mother_name`, 
			`caretaker`, 
			`caretaker_relation`, 
			`father_education`, 
			`mother_education`, 
			`father_occupation`, 
			`mother_occupation`, 
			`family_ai`, 
			`address`, 
			`city`, 
			`pin`, 
			`state`, 
			`country`, 
			`phone_number`, 
			`father_mn`, 
			`mother_mn`, 
			`select_ts`, 
			`password`, 
			`cassword`) 
		VALUES ('
			".$_POST['fname']."',
			'".$_POST['mname']."',
			'".$_POST['caretaker']."',
			'".$_POST['relation']."',
			'".$_POST['feducation']."',
			'".$_POST['meducation']."',
			'".$_POST['foccupation']."',
			'".$_POST['moccupation']."',
			'".$_POST['fai']."',
			'".$_POST['fadd']."',
			'".$_POST['fcity']."',
			'".$_POST['fpin']."',
			'".$_POST['fstate']."',
			'".$_POST['fcountry']."',
			'".$_POST['phone']."',
			'".$_POST['fmobile']."',
			'".$_POST['mmobile']."',
			'".$_POST['transport']."',
			'".$_POST['password']."',
			'".$_POST['cpassword']."')
		");

	$parent_id = mysql_insert_id();

	$query = "SELECT id FROM `class_information` WHERE `class_add` = '".$_POST['class']."' AND `section` = '".$_POST['section']."' AND `stream` = '".$_POST['stream']."'";

	$classInfo = mysql_query($query);

	$row = mysql_fetch_array($classInfo, MYSQL_ASSOC);

	$class_id = $row['id'];

	$query = "INSERT INTO `students`(
			`class_info_id`, 
			`parent_id`, 
			`schlor_no`, 
			`admission_date`, 
			`first_name`, 
			`middle_name`, 
			`last_name`, 
			`dob`, 
			`gender`, 
			`blood_group`, 
			`birth_place`, 
			`mother_toung`, 
			`category`, 
			`relegion`, 
			`address`, 
			`city`, 
			`state`, 
			`pin`, 
			`country`, 
			`mobile`, 
			`email`) 
		VALUES ('".$class_id."',
			'".$parent_id."',
			'".$_POST['scholar_no']."',
			'".$_POST['admission_date']."',
			'".$_POST['first_name']."',
			'".$_POST['middle_name']."',
			'".$_POST['last_name']."',
			'".$_POST['bday']."',
			'".$_POST['gender']."',
			'".$_POST['blood_group']."',
			'".$_POST['birth_place']."',
			'".$_POST['mother_tongue']."',
			'".$_POST['category']."',
			'".$_POST['religion']."',
			'".$_POST['address1']."',
			'".$_POST['city']."',
			'".$_POST['state']."',
			'".$_POST['pin']."',
			'".$_POST['country']."',
			'".$_POST['mobile']."',
			'".$_POST['email']."')";
			
	$sqlStudent = mysql_query($query);

	$student_id = mysql_insert_id();

	$query = "INSERT INTO `previous_school`(
		`student_id`, 
		`class`, 
		`passing_year`, 
		`school_name`, 
		`roll_no`, 
		`percentages`, 
		`subject`) 
	VALUES ('".$student_id."',
		'".$_POST['pclass']."',
		'".$_POST['pyear']."',
		'".$_POST['sname']."',
		'".$_POST['roll']."',
		'".$_POST['percentage']."',
		'".$_POST['subject']."')";

	$sqlPrevious_school = mysql_query($query);

	echo "Sucessfully Record Insert";

?>




<!DOCTYPE html>
<html>
<head>
	<title>Student Information Page</title>
</head>
<body>

</body>
</html>
<h1 style="background-color: #ff8000;">Student Information</h1>
<?php

	echo "Scholar Number : ".$_POST['scholar_no']."<br>";
	echo "First Name : ".$_POST['first_name']."<br>";
	echo "Middile Name : ".$_POST['middle_name']."<br>";
	echo "Last Name : ".$_POST['last_name']."<br>";
	echo "<hr>";
?>	
<?php
	echo "Date of birth : ".$_POST['bday']."<br>";
	echo "Gender : ".$_POST['gender']."<br>";
	echo "Blood Group : ".$_POST['blood_group']."<br>";
	echo "Birth Place : ".$_POST['scholar_no'];
	echo "<hr>";
?>
<?php
	echo "Mother Tongue : ".$_POST['mother_tongue']."<br>";
	echo "Category : ".$_POST['category']."<br>";
	echo "Religion : ".$_POST['religion']."<br>";
	echo "Address Line 1 :".$_POST['address1']."<br>";
	echo "<hr>";
?>
<?php
	echo "Address Line 2 : ".$_POST['address2']."<br>";
	echo "City : ".$_POST['city']."<br>";
	echo "State : ".$_POST['state']."<br>";
	echo "pin".$_POST['pin']."<br>";
	echo "<hr>";
?>
<?php
	echo "Country : ".$_POST['country']."<br>";
	echo "Phone No : ".$_POST['phone']."<br>";
	echo "Mobile No : ".$_POST['mobile']."<br>";
	echo "Email : ".$_POST['email']."<br>";
	echo "<hr>";
?>
<h1 style="background-color: #ff8000;">Parrent Information</h1>
<?php
	echo "Father Name : ".$_POST['fname']."<br>";
	echo "Mother Name : ".$_POST['mname']."<br>";
	echo "Caretaker : ".$_POST['caretaker']."<br>";
	echo "Relation : ".$_POST['relation']."<br>";
	echo "<hr>";
?>
<?php
	echo "Father Education : ".$_POST['feducation']."<br>";
	echo "Mother Education : ".$_POST['meducation']."<br>";
	echo "Father Occupation : ".$_POST['foccupation']."<br>";
	echo "Mother Occupation : ".$_POST['moccupation']."<br>";
	echo "<hr>";
?>
<?php
	echo "Family Annual Income : ".$_POST['fai']."<br>";
	echo "Father Address : ".$_POST['fadd']."<br>";
	echo "Father City : ".$_POST['fcity']."<br>";
	echo "Father State : ".$_POST['fstate']."<br>";
	echo "<hr>";
?>
<?php
	echo "Father Pin : ".$_POST['fpin']."<br>";
	echo "Father Counrty : ".$_POST['fcountry']."<br>";
	echo "Phone Number : ".$_POST['fphone']."<br>";
	echo "Father's Mobile No : ".$_POST['fmobile']."<br>";
	echo "<hr>";
?>
<?php
	echo "Mother's Mobile No : ".$_POST['mmobile']."<br>";
	echo "Select Transport Service : ".$_POST['transport']."<br>";
	echo "Password : ".$_POST['password']."<br>";
	echo "Confirm Password : ".$_POST['cpassword']."<br>";
	echo "<hr>";
?>
<h1 style="background-color: #ff8000;">School Information</h1>
<?php
	echo "Admission date : ".$_POST['adate']."<br>";
	echo "Class of add : ".$_POST['class']."<br>";
	echo "Section : ".$_POST['section']."<br>";
	echo "Stream : ".$_POST['stream']."<br>";
	echo "<hr>";
?>

<?php
	echo "Class :".$_POST['pclass']."<br>";
	echo "Passing Year : ".$_POST['pyear']."<br>";
	echo "School Name : ".$_POST['sname']."<br>";
	echo "Roll No Marks : ".$_POST['roll']."<br>";
	echo "Percentages % : ".$_POST['percentage']."<br>";
	echo "Subject : ".$_POST['subject']."<br>";
?>

