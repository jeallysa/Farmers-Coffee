<?php

	class SalesActivityLogs extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->model('SalesActivityLogs_Model');
            	$actvlg_data["fetch_data"] = $this->SalesActivityLogs_Model->fetch_data();
				$this->load->view('Sales_Module/salesActivityLogs', $actvlg_data);
            } else {
            	redirect('login');
            }
		}

	}

?>