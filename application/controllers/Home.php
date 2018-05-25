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
			echo "teacher";
		}

		function name(){

			echo "It's my page!";
			$this->load->view('emplyoee_registration');

		}
	}
?>