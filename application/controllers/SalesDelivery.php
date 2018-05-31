<?php

	class SalesDelivery extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->model('SalesDelivery_model');
				$data1['get_delivery_list'] = $this->SalesDelivery_model->get_delivery_list();
				$data2['get_delivered'] = $this->SalesDelivery_model->get_delivered();
				$data3['get_paid'] = $this->SalesDelivery_model->get_paid();
				$this->load->view('Sales_Module/salesPenDelivery', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3] );
			} else {
				redirect('login');
			}
		}

		public function salesArchivedPO()
		{ 

			if ($this->session->userdata('username') != '')
            {
				$this->load->model('SalesDelivery_model');
				$cancel['get_cancel_list'] = $this->SalesDelivery_model->get_cancel_list();
				$this->load->view('Sales_Module/salesArchivedPO', ['cancel' => $cancel]);
			} else {
				redirect('login');
			}
		}

        function insert()
		{
			$this->load->model('SalesDelivery_model');
			$po = $this->input->post("po_id");
			$cli_dr = $this->input->post("client_dr"); 
			$del_Date = $this->input->post("delivery_date");
			$blend = $this->input->post("blend");
			$pack_size = $this->input->post("pack_size");
            $gross_amount = $this->input->post("client_balance");  

            $blend_price = $this->input->post("blend_price");
            $deliver_quantity = $this->input->post("delivered_qty");


            $client_balance = $blend_price * $deliver_quantity;


			$client =$this->input->post("client_company");

			$client =$this->input->post("client_company");


			$data = array(
				"client_dr" =>$this->input->post("client_dr"),
				"client_deliverDate" =>$this->input->post("delivery_date"),
				"client_invoice" =>$this->input->post("invoice"),
                "client_receive" =>$this->input->post("receive_by"),        
                "contractPO_id" =>$this->input->post("po_id"),        
                "client_balance" =>$client_balance,        
                "client_id" =>$this->input->post("client_id"),      
                "deliver_quantity" =>$this->input->post("delivered_qty")      
			);
			$data = $this->security->xss_clean($data);
			
			$fulDel = $this->input->post('full_qty');
			$delivered_quantity = $this->input->post('delivered_qty');

			if ($delivered_quantity == $fulDel) {
				$deliver = 'delivered';
				$po_id = $this->input->post("po_id");
				$delivered_qty = $this->SalesDelivery_model->insert_data($data);
				$this->SalesDelivery_model->activity_logs('sales', " Mark ".$client."'s orders as Fully Delivered ");
				$this->SalesDelivery_model->updateDel($deliver, $po_id, $delivered_quantity);
				$this->SalesDelivery_model->record_data($delivered_quantity, $blend, $pack_size);
				echo "<script>alert('Delivery successful!');</script>";

				
			} 	elseif ($delivered_quantity < $fulDel) {
				$deliver = 'partial delivery';
				$po_id = $this->input->post("po_id");
				$delivered_qty = $this->SalesDelivery_model->insert_data($data);
				$this->SalesDelivery_model->activity_logs('sales', " Mark ".$client."'s orders as Partially Delivered ");
				$this->SalesDelivery_model->updateDel($deliver, $po_id, $delivered_quantity);
				$this->SalesDelivery_model->record_data($delivered_quantity, $blend, $pack_size);
				echo "<script>alert('Delivery successful!');</script>";

				
			} 

			redirect('SalesDelivery', 'refresh');
			
		}

        function undoDel()
		{
            $password = $this->input->post("password");
            if($this->db->query("SELECT IF (EXISTS (SELECT * FROM user WHERE password = '".$password."' and u_type = 'admin'), 1,  0) AS result")->row()->result == 1){
                $this->load->model('SalesDelivery_model');
                $po = $this->input->post("po_undo");
                $this->SalesDelivery_model->undoDel($po);
                $this->session->set_flashdata('success', 'Purchase order has been archived.');
                redirect('SalesDelivery', 'refresh');	
            }else{
                $this->session->set_flashdata('error', 'Invalid password, failed to cancel order');
                redirect('SalesDelivery');
                }
			
		}
        function roastDel()
		{
			$this->load->model('SalesDelivery_model');
			$po_id = $this->input->post("po_roast");
			$date = $this->input->post("po_date");
			$QTY = $this->input->post("po_qty");
			$blend_id = $this->input->post("po_blend");
			$dateNow = $this->input->post("dateNow");

			$this->SalesDelivery_model->roastDel($date, $QTY, $blend_id, $po_id, $dateNow);
			redirect('SalesDelivery', 'refresh');
		}

        function retDel()
		{   
            $password = $this->input->post("password");
            if($this->db->query("SELECT IF (EXISTS (SELECT * FROM user WHERE password = '".$password."' and u_type = 'admin'), 1,  0) AS result")->row()->result == 1){
                $this->load->model('SalesDelivery_model');
                $po2 = $this->input->post("po_ret");
                $this->SalesDelivery_model->retDel($po2);
                $this->session->set_flashdata('success', 'Purchase order has been retrieved');
                redirect('SalesDelivery/salesArchivedPO', 'refresh');
            }else{
                $this->session->set_flashdata('error', 'Invalid password, failed to retrieve order');
                        redirect('SalesDelivery/salesArchivedPO');
                }
		}

        function insert1()
		{
			$this->load->model('SalesDelivery_model');
			$dataA = array(
				"client_deliveryID" =>$this->input->post("deliveryID"),
				"client_dr" =>$this->input->post("client_dr"),
				"coff_returnDate" =>$this->input->post("date_returned"),
				"coff_returnQty" =>$this->input->post("qty_returned"),
                "coff_remarks" =>$this->input->post("remarks")    
			);
			$dataA = $this->security->xss_clean($dataA);
			$add_blend =$this->input->post("qty_returned");
			$client =$this->input->post("client_company");
			$blend_id =$this->input->post("blend_id");
			$return = 'Returned';
			$deliver_id = $this->input->post("deliveryID");

			//$client = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$id."'")->row()->client_company;
			$this->SalesDelivery_model->activity_logs('sales', "Mark ".$client."'s orders as Returned ");
			$this->SalesDelivery_model->insert_dataA($dataA);
			$this->SalesDelivery_model->updateA($return, $deliver_id);
			$this->SalesDelivery_model->add_blend($add_blend, $blend_id);
			echo "<script>alert('Item Returned!');</script>";
			redirect('SalesDelivery', 'refresh');
		}

        function insert2() 
		{
			$this->load->model('SalesDelivery_model');
			$dataB = array(
				"client_deliveryID" =>$this->input->post("deliver_id"),
				"paid_date" =>$this->input->post("date_paid"),
				"collection_no" =>$this->input->post("cr"),
                "paid_amount" =>$this->input->post("amount"),    
                "withheld" =>$this->input->post("withheld"),    
                "remarks" =>$this->input->post("remarkspay"),    
                "payment_mode" =>$this->input->post("mod"),
                "paid_amount" =>  $this->input->post("amount")
			);
			$dataB = $this->security->xss_clean($dataB);
			
				$client =$this->input->post("client_company");
				$total_amount = $this->input->post("total_amount");
				$withheld = $this->input->post("withheld");
				$amount_input = $this->input->post("amount");
				$amount_paid = $withheld + $amount_input;


				if ($amount_paid < $total_amount) {
					$payment_stat = 'partially paid';
					$deliver_id = $this->input->post("deliver_id");
					$this->SalesDelivery_model->activity_logs('sales', " Mark ".$client."'s orders as Partially Paid ");
					$this->SalesDelivery_model->insert_dataB($dataB);
					$this->SalesDelivery_model->updateB($payment_stat, $deliver_id, $amount_paid);
					echo "<script>alert('Payment recorded!');</script>";
				} else{
					$payment_stat = 'paid';
					$deliver_id = $this->input->post("deliver_id");
					$this->SalesDelivery_model->activity_logs('sales', " Mark ".$client."'s orders as Fully Paid ");
					$this->SalesDelivery_model->insert_dataB($dataB);
					$this->SalesDelivery_model->updateB($payment_stat, $deliver_id, $amount_paid);
					echo "<script>alert('Payment recorded!');</script>";
				}


			

			redirect('SalesDelivery', 'refresh');
		}

	}

?>