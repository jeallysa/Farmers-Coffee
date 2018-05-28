<?php

	class AdminInventoryReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('notification_model');
			$this->load->model('Admin_Inventory_Report_Model');
		}
		
        public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				
				$reorder = $this->notification_model->reorder();
				$data1["coffeein"] = $this->Admin_Inventory_Report_Model->get_coffeein();
                $data6["coffeeout"] = $this->Admin_Inventory_Report_Model->get_coffeeout();
                $data5["datav"] = NULL;

				$this->load->view('Admin_Module/adminInventoryReport', ["reorder" => $reorder, 'data1' => $data1, 'data5' => $data5, 'data6' => $data6]);
			} else {
				redirect('login');
			}
		}
        
        public function date_filt(){
            $df = $this->input->post('datefilt');
            $reorder = $this->notification_model->reorder();
            $data1["coffeein"] = $this->Admin_Inventory_Report_Model->get_coffeeinWithP($df);
            $data6["coffeeout"] = $this->Admin_Inventory_Report_Model->get_coffeeoutWithP($df);
            $data5["datav"] = $df;

			$this->load->view('Admin_Module/adminInventoryReport', ["reorder" => $reorder, 'data1' => $data1, 'data5' => $data5, 'data6' => $data6]);
        }

	}
?>