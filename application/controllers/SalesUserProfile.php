<?php

	class SalesUserProfile extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('UserProfile_model');
				$username = $this->session->userdata('username');
				$data['profile'] = $this->UserProfile_model->getProfile($username);
				$this->load->view('Sales_Module/SalesUserProfile', ['data' => $data]);
			} else {
				redirect('login');
			}
		}

		public function updateUser(){
			$this->form_validation->set_rules('lname', 'lastname', 'required');
			$this->form_validation->set_rules('fname', 'Firstname', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('number', 'Contact Number', 'alpha_dash|required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			if ($this->form_validation->run()) {
				$l_name = $this->input->post('lname');
				$f_name = $this->input->post('fname');
				$email = $this->input->post('email');
				$contact = $this->input->post('number');
				$address = $this->input->post('address');
				$this->load->model('UserProfile_model');

				$username = $this->session->userdata('username');
				$userid = $this->UserProfile_model->getUserid($username);
				$lname = $this->UserProfile_model->getLname();
				$fname = $this->UserProfile_model->getFname();

					if ($this->UserProfile_model->updateProfile($userid, $l_name, $f_name, $email, $contact, $address)){
						$this->session->set_flashdata('success', 'Successfully Updated your Profile');
						redirect('SalesUserProfile');
					} else {
						$this->session->set_flashdata('error', 'Sorry, Failed to Updated your Profile');
						redirect('SalesUserProfile');
					}
			} else {
				echo validation_errors();
				$this->session->set_flashdata('error', validation_errors());
							redirect('SalesUserProfile');
			}
		}

	}

?>