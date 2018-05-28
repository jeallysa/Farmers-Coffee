<?php

	class SalesReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->model('Sales_model');
				$data['sales']=$this->Sales_model->getSales();
				$data1['saleswalkin']=$this->Sales_model->getSoldCoffee();
				$data2['salesmach']=$this->Sales_model->getSoldMachine();
				$this->load->view('Sales_Module/salesReport', ['data' => $data, 'data1' => $data1, 'data2' => $data2]);
			} else {
				redirect('login');
			}
		}

	}

?>