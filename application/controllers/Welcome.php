<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function sonu() {
		$data['page_title'] = "Student Registration";
		$this->load->view('registration', $data);
	}

	public function monu() {
		echo "My first CI Page Monu";
	}

	public function neeraj() {
		$data = $this->input->post();
		/*$data = array(
			`first_name` => $_POST['first_name'],
			`middle_name` => $_POST['middle_name'],
			`last_name` => $_POST['last_name'],
			`email` => $_POST['email'],
			`dob` => $_POST['dob'], 
			`gender` => $_POST['gender'], 
			`fname` => $_POST['fname'], 
			`mname` => $_POST['mname'], 
			`nationality` => $_POST['nationality'], 
			`pnumber` => $_POST['pnumber'], 
			`mnumber` => $_POST['mnumber'], 
			`marital` => $_POST['marital'], 
			`address` => $_POST['address'], 
			`city` => $_POST['city'], 
			`state` => $_POST['state'], 
			`postal_code` => $_POST['postal_code']
		);*/
		$this->db->insert("student", $data);
		echo "My first CI Page Neeraj";
	}
}
