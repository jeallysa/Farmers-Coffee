<?php
 
	class AdminActivityLogs extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminActivityLogs_Model');
				$actvlg_data["fetch_data"] = $this->AdminActivityLogs_Model->fetch_data();
				$this->load->view('Admin_Module/adminActivityLogs', $actvlg_data);
			} else {
				redirect('login');
			}
		}

	}
?>