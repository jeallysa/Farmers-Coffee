<?php

	class SalesDashboard extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('SalesDashboard_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data1['sales'] = $this->SalesDashboard_model->getSales();
				$data2['collections'] = $this->SalesDashboard_model->getCollections();
				$data3['receivables'] = $this->SalesDashboard_model->getReceivables();
				$data4['clients'] = $this->SalesDashboard_model->getContracted();
				$this->load->view('Sales_Module/salesDashboard', ['data1'=>$data1, 'data2'=>$data2, 'data3'=>$data3, 'data4'=>$data4]);
			} else {
				redirect('login');
			}

		}
		public function updateNotif(){
			
			$id = $this->uri->segment(3,1);
			$unseen = '1';
			$data = $this->SalesDashboard_model->UpdateSeen($id, $unseen);
			 echo json_encode($data);
		}
		
		public function mayNotif(){
			$id = $this->uri->segment(3,1);
			$meron = '0';
			$data = $this->SalesDashboard_model->mayNotif($id, $meron);
			echo json_encode($data);
		}
	}

?>