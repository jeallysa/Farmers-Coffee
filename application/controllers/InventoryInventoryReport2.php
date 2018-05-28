<?php

	class InventoryInventoryReport2 extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('InventoryInventoryReportOut_Model');
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$reorder = $this->notification_model->reorder();
				$data1["inventoryout"] = $this->InventoryInventoryReportOut_Model->get_inventoryout();
                $data2["machineout"] = $this->InventoryInventoryReportOut_Model->get_machineout();
				$this->load->view('Inventory_Module/inventoryInventoryReport2', ["reorder" => $reorder, 'data1' => $data1, 'data2' => $data2]);
			} else {
				redirect('login');
			}
		}

	}

?>