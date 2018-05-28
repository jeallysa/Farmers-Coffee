<?php

	class InventoryOutPackaging extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('InventoryOutPackaging_model');
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
            	$data['packageout'] = $this->InventoryOutPackaging_model->get_packageout();
            	$this->load->view('Inventory_Module/inventoryOutPackaging', $data);
            } else {
            	redirect('login');
            }
		}

	}

?>