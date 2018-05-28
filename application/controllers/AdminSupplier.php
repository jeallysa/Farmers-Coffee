<?php

	class AdminSupplier extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '' )
			{
				
				$this->load->model('Admin_Suppliers_Model');
				$sup_data["fetch_data"] = $this->Admin_Suppliers_Model->fetch_data();
				$this->load->view('Admin_Module/adminSupplier', $sup_data);
			} else {
				redirect('login');
			}
		}

		function update(){
			$this->load->model('Admin_Suppliers_Model');
			$id = $this->input->post("sup_id");
			$sup_company = $this->input->post("sup_company");
			$sup_address = $this->input->post("sup_address");
			$sup_email = $this->input->post("sup_email");
			$sup_contact = $this->input->post("sup_contact");
			$sup_position = $this->input->post("sup_position");
			$sup_fname = $this->input->post("sup_fname");
			$sup_lname = $this->input->post("sup_lname");
			$date_reg = $this->input->post("date_reg");
			$this->Admin_Suppliers_Model->activity_logs('admin', "Updated Supplier: '".$sup_company."'");
			$this->Admin_Suppliers_Model->update($id, $sup_company, $sup_address, $sup_email, $sup_contact, $sup_position, $sup_fname, $sup_lname, $date_reg);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminSupplier');
		}

        function activation(){
			
			$this->load->model('Admin_Suppliers_Model');
			$id = $this->input->post("deact_id");
			$deact = $this->db->query("SELECT * FROM supplier WHERE sup_id = '".$id."'")->row()->sup_activation;
			$company = $this->input->post("sup_company");
			if ($deact == 1){
				$this->Admin_Suppliers_Model->activity_logs('admin', "Deactivated Supplier: '".$company."'");
				$this->Admin_Suppliers_Model->activation($id);
				redirect('adminSupplier');
			} else {
				$this->Admin_Suppliers_Model->activity_logs('admin', "Activated Supplier: '".$company."'");
				$this->Admin_Suppliers_Model->activation($id);
				redirect('adminSupplier');
			}


		}

		

	}
?>