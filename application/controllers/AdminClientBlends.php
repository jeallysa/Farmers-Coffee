<?php
 
	class AdminClientBlends extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{  
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Blends_Model');
				$blend_data["fetch_data_cb"] = $this->Admin_Blends_Model->fetch_data_cb();
				$this->load->view('Admin_Module/adminClientBlends', $blend_data);
			} else {
				redirect('login');
			}
		}
        
        public function activation(){

        	$this->load->model('Admin_Blends_model');
			$id = $this->input->post("deact_id");
			$deact = $this->db->query("SELECT * FROM coffee_blend WHERE blend_id = '".$id."'")->row()->blend_activation;
			$name = $this->db->query("SELECT * FROM coffee_blend a JOIN packaging b ON a.package_id = b.package_id WHERE blend_id = '".$id."' ")->row()->blend;
			$type = $this->db->query("SELECT * FROM coffee_blend a JOIN packaging b ON a.package_id = b.package_id WHERE blend_id = '".$id."' ")->row()->package_type;
			$size =  $this->db->query("SELECT * FROM coffee_blend a JOIN packaging b ON a.package_id = b.package_id WHERE blend_id = '".$id."'  ")->row()->package_size;
			
			if ($deact == 1){
				$this->Admin_Blends_model->activity_logs('admin', "Deactivated: ".$name." ".$type." ".$size." grams ");	
				$this->Admin_Blends_model->activation($id);

				echo "<script>alert('Deactivation successful!');</script>";
				redirect('adminClientBlends', 'refresh');

			}else{	
				$this->Admin_Blends_model->activity_logs('admin', "Activated: ".$name." ".$type." ".$size." grams ");	
				$this->Admin_Blends_model->activation($id);
				echo "<script>alert('Activation successful!');</script>";

				redirect('adminClientBlends', 'refresh');
			}
		}

	}
?>