<?php

	class AdminAccounts extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model("Admin_Accounts_Model");
				$acc_data["fetch_data"] = $this->Admin_Accounts_Model->fetch_data();
				$this->load->view('Admin_Module/adminAccounts', $acc_data);
			} else {
				redirect('login');
			}
		}

		function update(){
			$this->load->model('Admin_Accounts_Model');
			$id = $this->input->post("id");
			$l_name = $this->input->post("l_name");
			$f_name = $this->input->post("f_name");
			$position = $this->input->post("position");
			$address = $this->input->post("address");
			$email = $this->input->post("email");
			$cell_no = $this->input->post("cell_no");
			$this->Admin_Accounts_Model->activity_logs('admin', "Updated Account: ".$l_name.",".$f_name." of ".$position." Department ");

			$this->Admin_Accounts_Model->update($id, $l_name, $f_name, $position, $address, $email, $cell_no);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminAccounts', 'refresh');
		}
        
        function activation(){
			
			$this->load->model('Admin_Accounts_model');
			$id = $this->input->post("deact_id");
			$deact = $this->db->query("SELECT * FROM user WHERE user_no = '".$id."'")->row()->u_activation;
			$lname = $this->db->query("SELECT * FROM user WHERE user_no = '".$id."'")->row()->u_lname;
			$fname = $this->db->query("SELECT * FROM user WHERE user_no = '".$id."'")->row()->u_fname;
			if ($deact == 1){
				$this->Admin_Accounts_model->activity_logs('admin', "Deactivated: User ".$lname.",".$fname." ");	
				$this->Admin_Accounts_model->activation($id);
				redirect('adminAccounts', 'refresh');

			}else{	
				$this->Admin_Accounts_model->activity_logs('admin', "Activated: User ".$lname." ,".$fname."");	
				$this->Admin_Accounts_model->activation($id);
				redirect('adminAccounts', 'refresh');
			}
		}

	}
?>