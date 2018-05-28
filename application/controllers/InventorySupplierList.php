<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventorySupplierList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('inventorySupplierList_model');
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
            if ($this->session->userdata('username') != '')
            {
	            $data['reorder'] = $this->notification_model->reorder();
	            $data['supplier'] = $this->inventorySupplierList_model ->retrieveSupplier();
				$this->load->view('inventorySupplierList' ,$data);
			} else {
				redirect('login');
			}
            
            
            
            
            
		}

	}

?>