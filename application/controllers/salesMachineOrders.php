<?php
    class salesMachineOrders extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('sellProduct_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
                
                $data5['machine']=$this->sellProduct_model->getMachine();
                $data6['client']=$this->sellProduct_model->getClient();
				$this->load->view('Sales_Module/salesMultipleOrdersMachine.php', ['data6' => $data6, 'data5' => $data5]);
			} else {
				redirect('login');
			}
        }

        public function addMultipleOrders()
        {
            $data = $this->input->post('table_data');
			$this->sellProduct_model->multipleOrderMachine($data);
			$this->output->set_content_type('application/json');
			echo json_encode(array('check'=>'check'));
			
			redirect('salesSellProduct');
        }
        
    }
?>
        