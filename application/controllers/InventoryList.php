<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('inventoryList_model');
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
            if ($this->session->userdata('username') != '')
			{
            	$data['reorder'] = $this->notification_model->reorder();
	            
	            $data['category'] = $this->inventoryList_model ->retrieveCategory();
	            
	            
				$this->load->view('inventoryList' , $data);
			} else {
				redirect('login');
			}
		}

	}

?>