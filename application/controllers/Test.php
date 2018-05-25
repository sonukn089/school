<?php

	class Test extends CI_Controller {

		public function mypage(){

			//echo "<a href='home/student'>student</a>";
			$this->load->view('employee');
		}

		public function index() {
			
			echo "index";
			echo "<a href='home/student'>student</a>";
		}

		public function student() {
			echo "student";
			echo "</br>";
			echo "My Name is : SONU";
		}

		public function registration() {
			echo "student";
		}

		public function teacher() {
			echo "teacher";
		}

		public function name(){

			echo "It's my page!";
			$this->load->view('emplyoee_registration');

		}
	}


?>