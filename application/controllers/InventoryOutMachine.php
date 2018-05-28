<?php

	class InventoryOutMachine extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('InventoryOutMachine_model');
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
	            $data['machineout'] = $this->InventoryOutMachine_model->get_machineout();
	            $this->load->view('Inventory_Module/inventoryOutMachine', $data);
	        }  else {
	        	redirect('login');
	        }

		}
	}

?>