<?php
	class Home extends CI_Controller {

		function index() {
			echo "index";
			echo "<a href='home/student'>student</a>";
		}

		function student() {
			echo "student";
			echo "</br>";
			echo "My Name is : SONU";
		}

		function registration() {
			echo "student";
		}

		function teacher() {
			$data['title'] = "Student Information";
			$data['body'] = "student_info";
			$this->load->view('layout', $data);
		}

		function name(){
			$data['title'] = "Employee Registration";
			$data['body'] = "employee_registration";
			$this->load->view('layout', $data);
		}

		function newAdmission(){

			
		}
	}
?>