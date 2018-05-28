<?php

	class AdminMachines extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('AdminMachines_model', 'CM');
			$this->load->helper('security');
		}
		
        function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminMachines_model');
				$data['machines']=$this->AdminMachines_model->getMachines();
	            $data1['getSupplier'] = $this->AdminMachines_model->getSupplier();
				$this->load->view('Admin_Module/adminMachines', ['data' => $data,  'data1' => $data1]);
			} else {
				redirect('login');
			}
		}
        
         function insert()
		{
			$this->load->model('AdminMachines_model');
			$data = array(
                "brewer" =>$this->input->post("brewer"),
				"brewer_type" =>$this->input->post("type"),
				"unitPrice" =>$this->input->post("price"),
				"mach_reorder" =>$this->input->post("reorder"),
                "mach_stocks" =>$this->input->post("stocks"),
                "sup_id" =>$this->input->post("sup_company")
        
			);
			$brewer = $this->input->post("brewer");
			$brewer_type = $this->input->post("type");
			if($this->db->query("SELECT IF (EXISTS (SELECT * FROM machine WHERE brewer = '".$brewer."' AND brewer_type = '".$brewer_type."'), 1,  0) AS result")->row()->result == 1){
					$this->session->set_flashdata('error', 'Machine already exist');
					redirect('adminMachines');
				}else{
					$brewer = $this->input->post("brewer");
					$type = $this->input->post("type");
					$this->AdminMachines_model->activity_logs('admin', "Inserted Coffee Machine: '".$brewer.", ".$type."'");
					$data = $this->security->xss_clean($data);
					$this->AdminMachines_model->insert_data($data);
					$this->session->set_flashdata('error', 'Machine added successfully');
					redirect('adminMachines', 'refresh');
				}
			
		}

		function update(){
			$this->load->model('AdminMachines_Model');
			$id = $this->input->post("mach_id");
			$brewer = $this->input->post("brewer");
			$type = $this->input->post("type");
			$price = $this->input->post("price");
			$reorder = $this->input->post("reorder");
			$stock_level = $this->input->post("stock_level");
			$sup_id = $this->input->post("sup_company");
			$this->AdminMachines_Model->activity_logs('admin', "Updated Coffee Machine: ".$brewer.", ".$type." roast ");
			$this->AdminMachines_Model->update($id, $brewer, $type, $price, $reorder, $stock_level, $sup_id);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminMachines', 'refresh');
		}

        function activation(){
			$this->load->model('AdminMachines_model');
			$id = $this->input->post("deact_id");
			$deact = $this->db->query("SELECT * FROM machine WHERE mach_id = '".$id."'")->row()->mach_activation;
			$brewer = $this->input->post("brewer");
			$type = $this->input->post("type");
			if ($deact == 1){
				$this->AdminMachines_model->activity_logs('admin', "Deactivated: '".$brewer.", ".$type."'");
				$this->AdminMachines_model->activation($id);//
				redirect('adminMachines');
			}else{	
				$this->AdminMachines_model->activity_logs('admin', "Activated: '".$brewer.", ".$type."'");
				$this->AdminMachines_model->activation($id);
				redirect('adminMachines');
			}
		}
	}
?>