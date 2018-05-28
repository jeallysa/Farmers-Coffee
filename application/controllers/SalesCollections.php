<?php

	class SalesCollections extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->model('Collections_model');
				$data['collections']=$this->Collections_model->getCollections();
				$this->load->view('Sales_Module/salesCollections', $data);
			} else {
				redirect('login');
			}
		}

	}

?>