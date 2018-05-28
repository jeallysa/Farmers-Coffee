<?php

	class AdminCollectionReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminCollectionReport_model');
				$data['collections']=$this->AdminCollectionReport_model->getCollections();
				$this->load->view('Admin_Module/adminCollectionReport', $data);
			} else {
				redirect('login');
			}
		}

	}

?>