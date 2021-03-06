<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css"> <!-- CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--Jquery-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!--bootstrap-->
</head>
<body>
	<center>
		<h1 style="background-color: blue; color: white;">Welcome to Admin Panel</h1>
	</center>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">

				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a href="#">Dashboard</a>
					      </h4>
					    </div>
  					</div>
				</div>
				<!-- Configration Menu Start -->
                <div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse1">Configration</a>
					      </h4>
					    </div>
					    <div id="collapse1" class="panel-collapse collapse">
					      <ul class="list-group">
							<li class="list-group-item">
					        	<a href="<?= base_url();?>home/configureClass">Configure Class</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/configFee">Configure Fee</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?=  base_url();?>home/updateClass">Update Class</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/subjectConfiguration">Subject Configuration</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/classPromotion">Class Promotion</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Configration Menu End -->

				<!-- Employee Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse2">Employee</a>
					      </h4>
					    </div>
					    <div id="collapse2" class="panel-collapse collapse">
					      <ul class="list-group">
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/addemployee">Add Employee</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/simpleEmployeeList">Simple Employee List</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/advanceEmployeeList">Advanced Employee List</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<? base_url();?>home/employeeSalary">Employee Salary</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<? base_url();?>home/employeeSalaryReport">Employee Salary Report</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<? base_url();?>home/inactiveEmployeeList">Inactive Employee List</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Employee Menu End -->

				<!-- Students Menu Start -->				
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse3">Students</a>
					      </h4>
					    </div>
					    <div id="collapse3" class="panel-collapse collapse">
					      <ul class="list-group">
					        <li class="list-group-item">
					        	<a href="<? base_url();?>home/newAdmission">New Admission</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/simpleSearch">Simple Search</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/advanceSearch">Advanced Search</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/activeStudentList">Active Student List</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/dropoutStudentList">Dropout Student List</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Students Menu End -->

				<!-- Fee Menu Start -->				
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      	<h4 class="panel-title">
					          <a data-toggle="collapse" href="#collapse4">Fee</a>
					      	</h4>
					    </div>
					    <div id="collapse4" class="panel-collapse collapse">
					      	<ul class="list-group">
						       	<li class="list-group-item">
								<a href="<?= base_url();?>home/collectFee">Collect Fee</a>
						       	</li>
						        <li class="list-group-item">
						        <a href="<?= base_url();?>home/updateScheduledFee">Update 	 Scheduled Fee</a>
						        </li>
						        <li class="list-group-item">
						        	<a href="<?= base_url();?>home/feeReport">Fee Report</a>
						        </li>
						        <li class="list-group-item">
						        	<a href="<?= base_url();?>home/dueFeeReport">Due Fee Report</a>
						        </li>
						        <li class="list-group-item">
						        	<a href="<?= base_url();?>home/printDdueFeeReport">Print Due Fee Report</a>
						        </li>
					      	</ul>
					    </div>
  					</div>
				</div>
				<!-- Fee Menu End -->

				<!-- Attendence Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse6">Attendence</a>
					      </h4>
					    </div>
					    <div id="collapse6" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/studentAttendence">Student Attendence</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/teacherAttendence">Teacher Attendence</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/studentAttendenceReport">Student Attendence Report</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/teacherAttendenceReport">Teacher Attendence Report</a>
					        </li>  
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Attendence Menu End -->

				<!-- Time Schedulling Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse7">Time Schedulling</a>
					      </h4>
					    </div>
					    <div id="collapse7" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/periodTimeSlots">Period Time Slots</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/schedullingReport">Schedulling Report</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/defineLessonPlan">Define Lesson Plan</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/lessonPlanReport">Lesson Plan Report</a>
					        </li>  
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Time Schedulling Menu End -->

				<!-- Exam Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse8">Exam</a>
					      </h4>
					    </div>
					    <div id="collapse8" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/examSchedulling">Exam Schedulling</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/examTimeTable">Exam Time Table</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/examDetails">Exam Details</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/subjectResults">Subjects Results</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/generateResult">Generate Result</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/downloadAdmitCard">Download Admit Card</a>
					        </li>  
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Exam Menu End -->

				<!-- Report Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse9">Report</a>
					      </h4>
					    </div>
					    <div id="collapse9" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/promotedReportClasswise">Promoted Report Classwise</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/transferCertificate">Transfer Certificate</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/defineLessonPlan">Character Certificate</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Report Menu End -->


				<!-- HomeWork Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse10">HomeWork</a>
					      </h4>
					    </div>
					    <div id="collapse10" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/defineHomeWork">Define HomeWork</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/showHomeWork">Show HomeWork</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- HomeWork Menu End -->


				<!-- Stock Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse11">Stock</a>
					      </h4>
					    </div>
					    <div id="collapse11" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/enterStock">Enter Stock</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/saleStock">Sale Stock</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/printReciept">Print Reciept</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/editBill">Edit Bill</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Stock Menu End -->


				<!-- Message Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse12">Messgae</a>
					      </h4>
					    </div>
					    <div id="collapse12" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/noticeAlert">Notice/Alert</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/message">Message</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Message Menu End -->


				<!-- Mobile Message Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse13">Mobile Message</a>
					      </h4>
					    </div>
					    <div id="collapse13" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/mobileSms">Mobile SMS Setting</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/notice">Notice(Individual)</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/parentMessage">Parrent Message</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/anouncement">Anouncement(For Staff)</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/greeting">Greeting(To All)</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/classWise">Class Wise</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Mobile Message Menu End -->


				<!-- Accounting Menu Start -->
				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse14">Accounting</a>
					      </h4>
					    </div>
					    <div id="collapse14" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/noticeAlert">Day Book</a>
					        </li>
					        <li class="list-group-item">
					        	<a href="<?= base_url();?>home/transaction">Transaction</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>

				<div class="panel-group">
  					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapse14">Website</a>
					      </h4>
					    </div>
					    <div id="collapse14" class="panel-collapse collapse">
					      <ul class="list-group">
					      	<li class="list-group-item">
					        	<a href="<?= base_url();?>home/gallery">Gallery</a>
					        </li>
					      </ul>
					    </div>
  					</div>
				</div>
				<!-- Accounting Menu End -->

			</div>

			<div class="col-sm-10">
				<?php $this->load->view($body); ?>
			</div>
		</div>
	</div>

</body>
</html>