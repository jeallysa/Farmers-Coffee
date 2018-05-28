<?php

	class InventoryOutRawCoffee extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('InventoryOutRawCoffee_model');
			$this->load->model('notification_model');
		}
		
		public function index()
		{
            if ($this->session->userdata('username') != '')
			{
                $reorder = $this->notification_model->reorder();
                $data1['coffeeoutwalkin'] = $this->InventoryOutRawCoffee_model->get_coffeeoutwalkin();
                $data2['coffeeoutcontracted'] = $this->InventoryOutRawCoffee_model->get_coffeeoutcontracted();
                $data3['machineout'] = $this->InventoryOutRawCoffee_model->get_machineout();
                $this->load->view('Inventory_Module/inventoryOutRawCoffee', ["reorder" => $reorder, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
            } else {
            	redirect('login');
            }
		}

	}

?>