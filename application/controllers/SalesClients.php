<?php

	class SalesClients extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('SalesClients_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	
				$data['clients'] = $this->SalesClients_model->get_clients_list();
				$this->load->view('Sales_Module/salesClients', $data);
			} else {
				redirect('login');
			}
		}
		public function salesClientsInfo()
		{
			$id = $this->input->get('id');
			$this->load->model('SalesClients_model');
			$data["cli_data"] = $this->SalesClients_model->load_POClient($id);
			$data1["cli_det"] = $this->SalesClients_model->load_Client_det($id);
			$data2["del_data"] = $this->SalesClients_model->load_DelClient($id);
			$data3["pay_data"] = $this->SalesClients_model->load_PayClient($id);
			$data4["balance"] = $this->SalesClients_model->getBalances($id);
			$this->load->view('Sales_Module/salesClientsInfo', ['data' => $data,'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
		}
		public function salesContract()
		{
			$id = $this->input->get('id');
			$this->load->model('SalesClients_model');
			$data1["cli_det"] = $this->SalesClients_model->load_Client_det($id);
			$data2["cli_coff"] = $this->SalesClients_model->load_Client_coff($id);
			$data3["cli_mach"] = $this->SalesClients_model->load_Client_mach($id);
			$this->load->view('Sales_Module/salesContract', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3]); 
		}
		
		public function salesClientDetails(){
			$id = $this->uri->segment(3,1);
			$data = $this->SalesClients_model->getClientsDetails($id);
			  echo json_encode($data);
		}
		public function addClientPO(){
			$this->load->model('SalesClients_model');
			$id = $this->input->post('client_id');
			$date = $this->input->post('date');
			$QTY = $this->input->post('quantity');
			$blend_id = $this->input->post('ItemCode');
			
			$client = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$id."'")->row()->client_company;
			$this->SalesClients_model->activity_logs('sales', "Added Purchase Order for ".$client." ");
			
			$po_id = $this->SalesClients_model->addClientPO($date, $QTY, $id, $blend_id);
			// $this->SalesClients_model->stockDecrease($date, $QTY, $blend_id, $po_id);
		  
			redirect('SalesClients/index', 'refresh');

		}
		
		/*public function salesMultipleOrders(){

			$data1['blends'] =  $this->SalesClients_model->getBlends();
			$this->load->view('Sales_Module/salesMultipleOrders', ['data1' => $data1 ]);
		}*/

        function return_machine()
		{
			$this->load->model('sellProduct_model');
			$dataA = array(
				"mach_returnDate" =>$this->input->post("date_returned"),
				"mach_returnQty" =>$this->input->post("qty_returned"),
				"client_id" =>$this->input->post("client_id"),
				"mach_id" =>$this->input->post("mach_id"),
				"mach_serial" =>$this->input->post("serial"),
                "mach_remarks" =>$this->input->post("remarks")    
			);
			$dataA = $this->security->xss_clean($dataA);
			$return = 'Returned';
			$id = $this->input->post("sales_id");
			$cli_id = $this->input->post("cli_id");
			
			$mach_returnQty = $this->input->post("qty_returned");
			$mach_id = $this->input->post("mach_id");

			$this->sellProduct_model->insert_dataA($dataA);
			$this->sellProduct_model->updateA($return, $id);
			$this->sellProduct_model->minus_machine_rent($mach_returnQty, $mach_id);
			echo "<script>alert('Machine Returned!');</script>";
			redirect('salesClients/salesContract?id='.$cli_id.'', 'refresh');
		}
		
		
		
		

	}

?>