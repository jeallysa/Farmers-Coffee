<?php
    class salesMultipleOrders extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('SalesClients_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
                $data1['blends'] =  $this->SalesClients_model->getBlends();
				$this->load->view('Sales_Module/salesMultipleOrders.php', ['data1' => $data1 ]);
			} else {
				redirect('login');
			}
		}
        public function addMultipleOrders(){

			$data = $this->input->post('table_data');

			
			$this->SalesClients_model->activity_logs('sales', "Added other Purchase Order ");
			$this->SalesClients_model->AddMultipleOrders($data);
			$this->output->set_content_type('application/json');
			echo json_encode(array('check'=>'check'));
			
			redirect('salesMultipleOrders');
		}
    }
?>
        