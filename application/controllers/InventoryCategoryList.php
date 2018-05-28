<?php

	class InventoryCategoryList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
				$this->load->view('Inventory_Module/inventoryCategoryList', $data);
			} else {
				redirect('login');
			}
		}

	}

?>