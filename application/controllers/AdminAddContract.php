<?php

	class AdminAddContract extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
                $this->load->model('AdminAddContract_model');
	            $data1['getBlend'] = $this->AdminAddContract_model->getBlend();
              	 $data3['getMachine'] = $this->AdminAddContract_model->getMachine(); 
                $data4['getName'] = $this->AdminAddContract_model->getName();
				$this->load->view('Admin_Module/adminAddContract', ['data1' => $data1,'data3' => $data3,'data4' => $data4]);
                
			} else {
				redirect('login');
			}
		}
        
          function insert()
		{
			$this->load->model('AdminAddContract_model');
			$blend_id = $this->input->post("contract_blend");
			$data = array(
                "client_id" =>$this->input->post("client_company"),
				"date_started" =>$this->input->post("date_started"),
				"date_expiration" =>$this->input->post("date_expiration"),
				"blend_id" => $blend_id,
				"mach_id" =>$this->input->post("contract_machine"),
				"required_qty" =>$this->input->post("contract_bqty"),
			);
			$client_id = $this->input->post("client_company");
			$data = $this->security->xss_clean($data);
			$query_client = $this->db->query("SELECT * FROM contract WHERE client_id = '".$client_id."';");
			if ($query_client->num_rows() == 0){
				$this->AdminAddContract_model->insert_data($data);
				$contract_id = $this->db->insert_id();
				$data_bag = array(
	                "client_id" =>$this->input->post("client_company"),
					"date" =>$this->input->post("date_started"),
					"mach_id" =>$this->input->post("contract_machine"),
	                "mach_qty" =>$this->input->post("contract_mqty"),
	                "mach_serial" =>$this->input->post("contract_serial"),
	                "status" => "rented",
	                "contract_id" => $contract_id
				);
				$this->db->insert('machine_out', $data_bag);
				$this->session->set_flashdata('success', 'Insert & Update successful!');
			}else{
				$this->db->where('client_id', $client_id);
				$this->db->update('contract', $data);
				$new_machines = array(
					'mach_serial' => $this->input->post("contract_serial"),
					'mach_qty' => $this->input->post("contract_mqty")
				);
				$this->db->where('contract_id', $contract_id);
				$this->db->update('machine_out', $data);
				$this->session->set_flashdata('success', 'Update successful!');
			}
			

			
			/*$data_blend = array(
				'package_id' => $this->input->post("contract_bag"),
				'sticker_id' => $this->input->post("contract_sticker")

			);
			$this->db->where('blend_id', $blend_id);
			$this->db->update('coffee_blend', $data_blend);
			
			redirect($_SERVER['HTTP_REFERER']);*/

			/* data - contract; data_bag = machine_out*/
		}

		function update(){
			$client_id = $this->input->post("client_company");
			$blend_id = $this->input->post("contract_blend");
			$data = array(
                "client_id" =>$this->input->post("client_company"),
				"date_started" =>$this->input->post("date_started"),
				"date_expiration" =>$this->input->post("date_expiration"),
				"blend_id" => $blend_id,
				"mach_id" =>$this->input->post("contract_machine"),
				"required_qty" =>$this->input->post("contract_bqty")
                
			);
			$data = $this->security->xss_clean($data);
			$this->db->where('client_id', $client_id);
			$this->db->update('contract', $data);
			$this->session->set_flashdata('success', 'Update successful!');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
?>