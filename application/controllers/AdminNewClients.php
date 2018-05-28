<?php

	class AdminNewClients extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('Admin_Clients_Model', 'CM');
			$this->load->helper('security');
		}
		
		public function index() { 
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Admin_Module/adminNewClients');
			} else { 
				redirect('login');
			}
		}
		



	}
?>