<?php

	class AdminChangePassword extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Admin_Module/adminChangePassword');
			} else {
				redirect('login');
			}
		}

		public function updateusername() {
			$this->form_validation->set_rules('u_name', 'Username', 'required|min_length[5]|max_length[15]');
			$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[4]|max_length[20]');
			if ($this->form_validation->run()) {
				$u_name = $this->input->post('u_name');
				$curr_password = $this->input->post('password');
				$this->load->model('Changepassword_Model');

				$username = $this->session->userdata('username');
				$userid = $this->Changepassword_Model->getUserid($username);
				$psword = $this->Changepassword_Model->getCurrPassword($userid);
				if($this->db->query("SELECT IF (EXISTS (SELECT * FROM user WHERE username = '".$u_name."'), 1,  0) AS result")->row()->result == 1){
					$this->session->set_flashdata('error', 'Username already exist');
								redirect('adminChangePassword');
				}else{
					if ($psword->password == $curr_password) {
						if ($this->Changepassword_Model->updateUsername($u_name, $userid )){
									$this->session->set_flashdata('success', 'Successfully updated your username, kindly login again');
									redirect('login');
							} else {
								$this->session->set_flashdata('error', 'Failed to Update Password');
									redirect('adminChangePassword');
							}
					}
				}
			} else {
				echo validation_errors();
				$this->session->set_flashdata('error', validation_errors());
							redirect('adminChangePassword');
			}
		}

		public function updatePwd(){
			$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[4]|max_length[20]');
			$this->form_validation->set_rules('newpassword', 'New Password', 'alpha_numeric|min_length[4]|max_length[20]');
			$this->form_validation->set_rules('confpassword', 'Confirm Password', 'alpha_numeric|min_length[4]|max_length[20]');
			if ($this->form_validation->run()) {
				$curr_password = $this->input->post('password');
				$new_password = $this->input->post('newpassword');
				$conf_password = $this->input->post('confpassword');
				$this->load->model('Changepassword_Model');

				$username = $this->session->userdata('username');
				$userid = $this->Changepassword_Model->getUserid($username);
				$psword = $this->Changepassword_Model->getCurrPassword($userid);
				
					if (!empty($new_password)) {
						if ($psword->password == $curr_password) {
							if ($new_password == $conf_password) {
								if ($this->Changepassword_Model->updatePassword($new_password, $userid )){
									$this->session->set_flashdata('success', 'Successfully Updated your password');
									redirect('adminChangePassword');
								} else {
									$this->session->set_flashdata('error', 'Failed to ppdate password');
									redirect('adminChangePassword');
									}
							} else {
								$this->session->set_flashdata('error', 'New password and confirmation password does not match');
									redirect('adminChangePassword');
							}
						} else {
							$this->session->set_flashdata('error', 'Sorry, you have input a wrong password');
									redirect('adminChangePassword');
						}
					} else if (empty($new_password)) {
						if ($psword->password == $curr_password) {
							if ($this->Changepassword_Model->updateUsername($u_name, $userid )){
									$this->session->set_flashdata('success', 'Successfully updated your username, kindly login again');
									redirect('login');
							} else {
								$this->session->set_flashdata('error', 'Failed to update password');
									redirect('adminChangePassword');
							}
						} else {
							$this->session->set_flashdata('error', 'Sorry, You have input a wrong password');
									redirect('adminChangePassword');
						}
					}
				
			} else {
				echo validation_errors();
				$this->session->set_flashdata('error', validation_errors());
							redirect('adminChangePassword');
			}
		}

	}
?>