<?php

	class AdminReceivableReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminReceivableReport_model');
				$data['receivable']=$this->AdminReceivableReport_model->getReceivable();
				$this->load->view('Admin_Module/adminReceivableReport', $data);
			} else {
				redirect('login');
			}
		}

	}

?>