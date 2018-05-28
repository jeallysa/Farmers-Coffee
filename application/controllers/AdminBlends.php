<?php 
 
	class AdminBlends extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		} 
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Blends_Model');
				$blend_data["fetch_data_eb"] = $this->Admin_Blends_Model->fetch_data_eb();
				$this->load->view('Admin_Module/adminBlends', $blend_data);
			} else {
				redirect('login');
			}
		}

		public function edit_show(){
			$id = $this->input->get('id');
			$type = $this->input->get('type');

			if ($this->session->userdata('username') != ''){
				$this->load->model('Admin_Blends_Model');
				$s_data["edit_page"] = $this->Admin_Blends_Model->edit_page($id);
				$this->load->view('Admin_Module/adminBlends_edit', $s_data);
			} else {
				redirect('login');
			}
		}

		public function editclient_show(){
			$id = $this->input->get('id');
			$type = $this->input->get('type');

			if ($this->session->userdata('username') != ''){
				$this->load->model('Admin_Blends_Model');
				$s_data["edit_page"] = $this->Admin_Blends_Model->edit_page($id);
				$this->load->view('Admin_Module/adminBlends_clientEdit', $s_data);
			} else {
				redirect('login');
			}
		}

		public function add_show(){
			if ($this->session->userdata('username') != '')
			{
			$this->load->model('Admin_Blends_model');

				$this->load->view('Admin_Module/adminAddBlend');
			} else {
				redirect('login');
			}
		}

		public function add_showClient(){
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Blends_model');
				$this->load->view('Admin_Module/adminAddBlendClient');
			} else {
				redirect('login');
			}
		}

		public function edit_trial(){
			$this->load->model('Admin_Blends_Model');
			$blend_name = $this->input->post('blend_name');
			$id = $this->input->post('id');
			$price = $this->input->post('price');
			$packaging = $this->input->post('package_id');
			$sticker = $this->input->post('stick');

			$pack = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_type;
			$size = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_size;
			$this->Admin_Blends_Model->activity_logs('admin', "Updated Coffee Blend: ".$blend_name.", ".$pack." Bag ".$size." grams in Company Blends.");
			$this->db->query("UPDATE coffee_blend SET blend = '".$blend_name."', blend_price = '".$price."', package_id = '".$packaging."',  sticker_id = '".$sticker."' WHERE blend_id = '".$id."'");
			$query = $this->db->query("SELECT * FROM raw_coffee;");
			foreach($query->result() as $row){
				$prop = $this->input->post("per[".$row->raw_id."]");
				$query_spec = $this->db->query("SELECT blend_id, raw_id, percentage FROM proportions WHERE blend_id = '".$id."' AND raw_id = '".$row->raw_id."';");
				if ($query_spec->num_rows() == 0){
					$data_for = array(
			        	'blend_id' => $id,
			        	'raw_id' => $row->raw_id,
			        	'percentage' => $prop
			        );
			        $this->db->insert('proportions', $data_for);
				}else{
					$this->db->query("UPDATE proportions SET percentage = '".$prop."' WHERE blend_id = '".$id."' AND raw_id = '".$row->raw_id."'");
				}
			}
			echo "<script>alert('Update successful!');</script>";
			redirect('adminBlends', 'refresh');
		}

		public function edit_clienttrial(){
			$this->load->model('Admin_Blends_Model');
			$blend_name = $this->input->post('blend_name');
			$id = $this->input->post('id');
			$price = $this->input->post('price');
			$packaging = $this->input->post('package_id');
			$sticker = $this->input->post('stick');

			$pack = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_type;
			$size = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_size;
			$this->Admin_Blends_Model->activity_logs('admin', "Updated Coffee Blend: ".$blend_name.", ".$pack." Bag ".$size." grams in Client Blends.");
			$this->db->query("UPDATE coffee_blend SET blend = '".$blend_name."', blend_price = '".$price."', package_id = '".$packaging."', sticker_id = '".$sticker."' WHERE blend_id = '".$id."'");
			$query = $this->db->query("SELECT * FROM raw_coffee;");
			foreach($query->result() as $row){
				$prop = $this->input->post("per[".$row->raw_id."]");
				$query_spec = $this->db->query("SELECT blend_id, raw_id, percentage FROM proportions WHERE blend_id = '".$id."' AND raw_id = '".$row->raw_id."';");
				if ($query_spec->num_rows() == 0){
					$data_for = array(
			        	'blend_id' => $id,
			        	'raw_id' => $row->raw_id,
			        	'percentage' => $prop
			        );
			        $this->db->insert('proportions', $data_for);
				}else{
					$this->db->query("UPDATE proportions SET percentage = '".$prop."' WHERE blend_id = '".$id."' AND raw_id = '".$row->raw_id."'");
				}
			}
			echo "<script>alert('Update successful!');</script>";
			redirect('adminClientBlends', 'refresh');
		}

		public function insertion(){
			$this->load->model('Admin_Blends_model');
			$blend_name = $this->input->post('blend_name'); 
			$price = $this->input->post('price');
			$packaging = $this->input->post('package_id'); 
			$temptype = $this->input->post('type');
			$sticker = $this->input->post('stick');
			$pack = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_type;	
			$size = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_size;
			
				$this->Admin_Blends_model->activity_logs('admin', "Inserted New Coffee Blend: ".$blend_name.", ".$pack." bag ".$size." grams in ".$temptype." blend ");	
				$data_blend = array(
					'blend' => $blend_name,
					'package_id' => $packaging,
					'blend_price' => $price,
					'blend_type' => "Existing",
					'sticker_id' => $sticker
				);
				$this->db->insert('coffee_blend', $data_blend);
				$id = $this->db->insert_id();
				$query = $this->db->query("SELECT * FROM raw_coffee;");
				foreach($query->result() as $row){
					$prop = $this->input->post("per[".$row->raw_id."]");
					$data_for = array(
							'blend_id' => $id,
							'raw_id' => $row->raw_id,
							'percentage' => $prop
						);
					$this->db->insert('proportions', $data_for);
				}
				$this->session->set_flashdata('success', 'Blend added successfully');
				redirect('adminBlends', 'refresh');
			
			


		}

		public function insertionClient(){
			$this->load->model('Admin_Blends_model');
			$blend_name = $this->input->post('blend_name');
			$blend_price = $this->input->post('price');
			/*
			$client = $this->input->post('client_id');
			
			$query_first = $this->db->query("SELECT a.blend_id AS main_id, a.client_id, a.date_started AS date_started, a.required_qty, a.credit_term, a.mach_id, a.mach_salesID, a.date_expiration, b.client_company, c.sticker_id AS sticker, c.blend AS blend, a.package_id AS pack, d.package_type, d.package_size, c.blend_price AS price FROM contract a JOIN contracted_client b ON a.client_id =  b.client_id LEFT JOIN coffee_blend c ON a.blend_id = c.blend_id LEFT JOIN packaging d ON c.package_id = d.package_id WHERE a.client_id = '".$client."' GROUP BY a.blend_id, a.client_id, a.package_id, a.date_started, a.required_qty, a.credit_term, a.mach_id, a.mach_salesID, a.date_expiration ORDER BY 1;");
			$packaging = $query_first->row()->pack;
			$price = $query_first->row()->price;
			$sticker = $query_first->row()->sticker;
			$date_started = $query_first->row()->date_started;
			$req_qty = $query_first->row()->required_qty;
			$cred_term = $query_first->row()->credit_term;
			$mach = $query_first->row()->mach_id;
			
			$date_expiration = $query_first->row()->date_expiration;
			*/
			$sticker = $this->input->post('stick');
			$packaging = $this->input->post('package_id');
			$this->Admin_Blends_model->activity_logs('admin', "Inserted New Coffee Blend (Client): ".$blend_name." .");	
			$data_blend = array(
				'blend' => $blend_name,
				'blend_price' => $blend_price,
				'blend_type' => "Client",
				'package_id' => $packaging,
				'sticker_id' => $sticker
			);
			$this->db->insert('coffee_blend', $data_blend);
			$id = $this->db->insert_id();
			$query = $this->db->query("SELECT * FROM raw_coffee;");
			foreach($query->result() as $row){
				$prop = $this->input->post("per[".$row->raw_id."]");
				$data_for = array(
			        	'blend_id' => $id,
			        	'raw_id' => $row->raw_id,
			        	'percentage' => $prop
			        );
			    $this->db->insert('proportions', $data_for);
			}

			/*

			$data_contract = array(
				"client_id" =>$this->input->post("client_company"),
				"date_started" =>$this->input->post("date_started"),
				"date_expiration" =>$this->input->post("date_expiration"),
				"unitprice" =>$this->input->post("unitprice"),
				"blend_id" =>$this->input->post("blend_id"),
				"mach_id" =>$this->input->post("contract_machine"),
				"required_qty" =>$this->input->post("contract_bqty"),
				"package_id" =>$this->input->post("contract_size"),
				"mach_salesID" => $m_sales_id
				'seen' => "0",
				'seen_admin' => "0"

			);
			$this->db->insert('contract', $data_contract);
			$mach_salesID = $this->db->insert_id();
			$this->db->query("UPDATE contract SET mach_salesID = '".$mach_salesID."' WHERE contract_id = '".$mach_salesID."'");
			*/

			echo "<script>alert('Insert successful!');</script>";
			redirect('adminClientBlends', 'refresh');


		}

		public function activation(){
			$this->load->model('Admin_Blends_model');
			$id = $this->input->post("deact_id");
			$deact = $this->db->query("SELECT * FROM coffee_blend WHERE blend_id = '".$id."'")->row()->blend_activation;
			
			$name = $this->db->query("SELECT * FROM coffee_blend WHERE blend_id = '".$id."'")->row()->blend;
			$type = $this->db->query("SELECT * FROM `coffee_blend` NATURAL JOIN packaging WHERE blend_id = '".$id."' ")->row()->package_type;
			$size =  $this->db->query("SELECT * FROM `coffee_blend` NATURAL JOIN packaging WHERE blend_id = '".$id."' ")->row()->package_size;

			if ($deact == 1){
				$this->Admin_Blends_model->activity_logs('admin', "Deactivated: ".$name." ".$type." ".$size." grams ");	
				$this->Admin_Blends_model->activation($id);
				echo "<script>alert('Deactivation successful!');</script>";
				redirect('adminBlends', 'refresh');

			}else{	
				$this->Admin_Blends_model->activity_logs('admin', "Activated: ".$name." ".$type." ".$size." grams ");	
				$this->Admin_Blends_model->activation($id);
				echo "<script>alert('Activation successful!');</script>";

				redirect('adminBlends', 'refresh');
			}
		}
        

	}
?>