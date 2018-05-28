<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class AddAccounts extends CI_Controller
	{
		public function __construct(){
			parent::__construct();

			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AddAccounts_model');  
			} else {
				redirect('login'); 
			}

		}
		
		public function insertAccounts()
		{
			$this->form_validation->set_rules('u_fname', 'Firstname', 'required|alpha');
			$this->form_validation->set_rules('u_lname', 'Lastname', 'required|alpha');
			$this->form_validation->set_rules('u_email', 'Email', 'required|valid_email|is_unique[user.u_email]');
			$this->form_validation->set_rules('u_contact', 'Contact Number', 'required|alpha_numeric');
			$this->form_validation->set_rules('u_address', 'Address', 'required');
			$this->form_validation->set_rules('u_type', 'Department', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
			
			if ($this->form_validation->run()) {
				$u_fname = $this->input->post('u_fname');
				$u_lname = $this->input->post('u_lname');
				$u_email = $this->input->post('u_email');
				$u_contact = $this->input->post('u_contact');
				$u_address = $this->input->post('u_address');
				$u_type = $this->input->post('u_type');
	            $username = $this->input->post('username');
				
				$this->AddAccounts_model->activity_logs('admin', "Inserted New Account: ".$u_lname.",".$u_fname." in ".$u_type." Department ");

				$this->load->model('AddAccounts_model');

				if($this->db->query("SELECT IF (EXISTS (SELECT * FROM user WHERE (u_lname = '".$u_lname."' AND u_fname = '".$u_fname."') OR username = '".$username."'), 1,  0) AS result")->row()->result == 1){
						$this->session->set_flashdata('error', 'Data already exist');
									redirect('adminNewAccounts');
					}else {
						if ($password == $confpassword) {
							if ($this->AddAccounts_model->add_data($u_lname, $u_fname, $u_type, $u_address, $u_email, $u_contact, $username)){
								$this->session->set_flashdata('success', 'Successfully Record new Account');
								redirect('adminNewAccounts');
							} else {
								$this->session->set_flashdata('success', 'Successfully Record new Account');
								redirect('adminNewAccounts');
							}
						} 
					}
			} else {
				echo validation_errors();
				$this->session->set_flashdata('error', validation_errors());
							redirect('adminNewAccounts');
			}
		}

	}
?>