<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class AddSupplier extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('addsupplier_model');  

			} else {
				redirect('login');
			}
		}
		
		public function insertSupplier()
		{ 
			$supplier = $this->input->post('supplier');
			$address = $this->input->post('address');
			$first_name = $this->input->post('cpfname');
			$last_name = $this->input->post('cplname');
			$position = $this->input->post('position');
			$email = $this->input->post('email');
			$tel_number = $this->input->post('tel_number');
			$date_reg = $this->input->post('date_reg');
			
			$this->addsupplier_model->activity_logs('admin', "Inserted New Supplier: ".$supplier." ");	

			$this->addsupplier_model->add_data($supplier, $address, $first_name, $last_name, $position, $email, $tel_number, $date_reg);
			
			
			
		}

	}
?>