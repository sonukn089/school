<?php

	class Configure extends CI_Controller {

		function classconfig(){
			$data['title'] = "Class Configuration";
			$data['body'] = "configuration/class_configuration";

			$data['stream'] = $this->db->get("stream")->result();

			$this->load->view("layout", $data);

		}

		function saveStream(){
			// $_POST['stream'];
			$stream = $this->input->post('sub_stream');

			$data = Array("sub_stream" => $stream);
			$this->db->insert("stream",$data);
			
			redirect(base_url()."configure/classconfig");
		}

		function editstream() {

			$stream = $this->input->post('sub_stream');
			$id = $this->input->post('id');
			$action = $this->input->post('action');

			if($action == "edit"):
				$data['sub_stream'] = $stream;
				$this->db->where("id", $id);
				$this->db->update("stream", $data);
			else:
				$this->db->where("id", $id);
				$this->db->delete("stream");
			endif;

			redirect(base_url()."configure/classconfig");
		}
	}


?>