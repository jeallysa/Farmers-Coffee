<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOTransactionHistory extends CI_Controller
	{
		function __construct(){
			parent::__construct();
            
             $this->load->model('inventoryPOTransactionHistory_model');
             $this->load->model('notification_model');
		}
		
		public function index()
		{ 
      //      $this->load->view('layout/header');
           
            
            
            $data['Transactions'] = $this->inventoryPOTransactionHistory_model ->retrieveTransactions();
            $data['reorder'] = $this->notification_model->reorder();
            
            
			$this->load->view('inventoryPOTransactionHistory' , $data);
		}

	}

?>