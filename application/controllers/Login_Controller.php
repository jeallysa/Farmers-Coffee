<?php

/**
* 
*/
class Login_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = $this->Login_Model->login($username, $password);
		
		if($username === 'tin' && $password === 't')
			{
				$this->load->view('Sales_Module/salesDashboard', ['username' => $username]);
			}
		if($username === 'leo' && $password === 'l')
			{
				$this->load->view('Inventory_Module/inventoryDashboard', ['username' => $username]);
			}

		if (count($data) > 0) {
			if($username === 'jin' && $password === 'j')
			{
				$this->load->view('Admin_Module/adminDashboard', ['username' => $data[0]->username]);
			} 
			else
			{
				echo "Invalid";
			}
		}
		else
		{
			echo "Invalid";
		}
	}

	function logout() {
		$this->session_destroy();

		redirect('login');
	}
}