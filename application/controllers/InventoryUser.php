<?php

	class InventoryUser extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('UserProfile_model');
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				
				$username = $this->session->userdata('username');
				$reorder = $this->notification_model->reorder();
				$data['profile'] = $this->UserProfile_model->getProfile($username);
				$this->load->view('Inventory_Module/inventoryUser', ["reorder" => $reorder, 'data' => $data]);
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
				if ($this->UserProfile_model->updateProfile($userid, $l_name, $f_name, $email, $contact, $address)){
					$this->session->set_flashdata('success', 'Successfully Updated your Profile');
					redirect('InventoryUser');
				} else {
					$this->session->set_flashdata('error', 'Sorry, Failed to Updated your Profile');
					redirect('InventoryUser');
				}
				
			} else {
				echo validation_errors();
				$this->session->set_flashdata('error', validation_errors());
							redirect('inventoryUser');
			}
		}


	}

?>