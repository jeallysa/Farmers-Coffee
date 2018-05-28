<?php

	class AdminContract extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{
            $id = $this->input->get('p');
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminContract_model');
				$cli_data["fetch_data"] = $this->AdminContract_model->fetch_data($id);
				$this->load->view('Admin_Module/adminContract', $cli_data);
			} else {
				redirect('login');
			}
		}

	/*	function update(){
			$this->load->model('AdminContract_model');
			$id = $this->input->post("contract_id");
            
			$date_started = $this->input->post("date_started");
			$date_expiration = $this->input->post("date_expiration");
			$credit_term = $this->input->post("contract_term");
			$blend_id = $this->input->post("contract_blend");
			$package_id = $this->input->post("contract_size");
			$required_qty = $this->input->post("contract_bqty");
			$mach_id = $this->input->post("contract_machine");
			$mach_qty = $this->input->post("contract_mqty");
			$mach_serial = $this->input->post("contract_serial");
            
			$this->AdminContract_model->update($id, $date_started, $date_expiration, $credit_term, $blend_id, $package_id, $required_qty, $mach_id, $mach_qty, $mach_serial);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminClients', 'refresh');
		} */

    }
?>