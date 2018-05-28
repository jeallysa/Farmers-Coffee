<?php 

	class SalesSellProduct extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index() 
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->model('sellProduct_model');
				$data1['sellCoffee']=$this->sellProduct_model->getSoldCoffee();
				$data2['sellMachine']=$this->sellProduct_model->getSoldMachine();
				$this->load->view('Sales_Module/salesSellProduct', ['data1' => $data1, 'data2' => $data2]);
				$this->load->library('session');
				echo $this->session->flashdata('success');
			} else {
				redirect('login');
			}
		}
		public function salesMachine()
		{ 
			$this->load->model('sellProduct_model');
			$data5['machine']=$this->sellProduct_model->getMachine();
			$data6['client']=$this->sellProduct_model->getClient();
			$this->load->view('Sales_Module/salesMachine', ['data6' => $data6, 'data5' => $data5]);
		}
		public function salesWalkin()
		{ 
			$this->load->model('sellProduct_model');
			$data3['blends']=$this->sellProduct_model->getBlends();

			$this->load->view('Sales_Module/salesWalkin', ['data3' => $data3]);
		}


		public function record()
		{
			$this->load->model('sellProduct_model');

			$date =  $this->input->post("date");
            $quantity = $this->input->post("qty");
            $blend_id = $this->input->post("blend_id");
			$blend = $this->db->query("SELECT * FROM coffee_blend WHERE blend_id = '".$blend_id."'")->row()->blend;
			$this->sellProduct_model->activity_logs('sales', "Sell ".$quantity." ".$blend." ");
			$this->sellProduct_model->record_data($date, $quantity, $blend_id);
			echo "<script>alert('Client order has been saved!');</script>";

			redirect('salesSellProduct/salesWalkin', 'refresh');
		}

		public function add()
		{
			$this->load->model('sellProduct_model');
			$data7 = array(
				"mach_id" =>$this->input->post("mach_id"),
				"date" =>$this->input->post("datePO"),
				"mach_qty" =>$this->input->post("qty"),
                "client_id" =>$this->input->post("client_id"),
                "mach_serial" =>$this->input->post("serial"),
                "status" =>$this->input->post("sold")
			);
			$data7 = $this->security->xss_clean($data7);
			$ma_id = $this->input->post("mach_id");
			$minusMach = $this->input->post("qty");
			$this->sellProduct_model->add_data($data7);
			$this->sellProduct_model->minus_machine($minusMach, $ma_id);
            redirect ('salesSellProduct');
		}

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
			$mach_id = $this->input->post("mach_id");
			$mach_retQty = $this->input->post("qty_returned");
			$machine = $this->db->query("SELECT * FROM machine WHERE mach_id = '".$mach_id."'")->row()->brewer;
			$mach_type = $this->db->query("SELECT * FROM machine WHERE mach_id = '".$mach_id."'")->row()->brewer_type;
			$this->sellProduct_model->activity_logs('sales', "Returned ".$mach_retQty." ".$machine." Machine ".$mach_type." from Walkin Sales ");
			$this->sellProduct_model->insert_dataA($dataA);
			$this->sellProduct_model->updateA($return, $id);
			$this->sellProduct_model->add_machine_stock($mach_retQty, $mach_id);
			echo "<script>alert('Machine Returned!');</script>";
			redirect('salesSellProduct', 'refresh');
		}

        function return_blend()
		{
			$this->load->model('sellProduct_model');
			$coffeeblend_return = array(
				"walkinPo_id" =>$this->input->post("walkin_id"),
				"coff_returnDate" =>$this->input->post("date_blend_returned"),
				"coff_returnQty" =>$this->input->post("blend_returned"),
				"coff_remarks" =>$this->input->post("return_blend_remarks")
			);
			$coffeeblend_return = $this->security->xss_clean($coffeeblend_return);

			$return = 'Returned';
			$id = $this->input->post("walkin_id");
			$blend_id = $this->input->post("blend_id");
			$blend_returnedQty = $this->input->post("blend_returned");

			$blend = $this->db->query("SELECT * FROM coffee_blend WHERE blend_id = '".$blend_id."'")->row()->blend;
			$this->sellProduct_model->activity_logs('sales', "Returned ".$blend_returnedQty." ".$blend." from Walkin Sales ");
			$this->sellProduct_model->insert_coffeereturn($coffeeblend_return);
			$this->sellProduct_model->update_coffeereturn($return, $id, $blend_returnedQty);
			$this->sellProduct_model->add_blend_stock($blend_returnedQty, $blend_id);
			echo "<script>alert('Coffee Blend Returned!');</script>";
			redirect('salesSellProduct', 'refresh');
		}
		public function getBlend(){
			$this->load->model('sellProduct_model');
			$id = $this->uri->segment(3,1);
			$data = $this->sellProduct_model->getBlend($id);
			 echo json_encode($data);
		}
		public function getMachinebyId(){
			$this->load->model('sellProduct_model');
			$id = $this->uri->segment(3,1);
			$data = $this->sellProduct_model->getMachinebyId($id);
			 echo json_encode($data);
		}
		public function getClientbyId(){
			$this->load->model('sellProduct_model');
			$id = $this->uri->segment(3,1);
			$data = $this->sellProduct_model->getClientbyId($id);
			 echo json_encode($data);
		}
		

	}

?>