<?php

class Home_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->load->view('index');
	}

	function admin(){
		$this->load->view('Admin_Module/adminDashboard');
	}

	function sales(){
		$this->load->view('Sales_Module/salesDashboard');
	}

	function inventory(){
		$this->load->view('Inventory_Module/inventoryDashboard');
	}
}