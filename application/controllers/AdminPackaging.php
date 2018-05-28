<?php 

	class AdminPackaging extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('AdminPackaging_model', 'CM');
			$this->load->helper('security');
		}
		
		function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminPackaging_model');
				$data['packaging']=$this->AdminPackaging_model->getPackaging();
	            $data1['getSupplier'] = $this->AdminPackaging_model->getSupplier();
				$this->load->view('Admin_Module/adminPackaging', ['data' => $data,  'data1' => $data1]);
			} else {
				redirect('login');
			}
		}
        
        function update(){
			$this->load->model('AdminPackaging_model');
			$id = $this->input->post("package_id");
			$type = $this->input->post("type");
            $size = $this->input->post("size");
            $unitprice = $this->input->post("unitprice");
			$reorder = $this->input->post("reorder");
			$stocks = $this->input->post("stocks");
			$sup_id = $this->input->post("sup_company");
			$this->AdminPackaging_model->activity_logs('admin', "Updated Packaging: '".$type." bag, ".$size."g'");
			$this->AdminPackaging_model->update($id, $type, $size, $unitprice, $reorder, $stocks, $sup_id);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminPackaging', 'refresh');
		}
        
        function insert()
		{
			$this->load->model('AdminPackaging_model');
			$data = array(
				"package_type" =>$this->input->post("type"),
                "package_size" =>$this->input->post("size"),
                "unitPrice" =>$this->input->post("unitprice"),
				"package_reorder" =>$this->input->post("reorder"),
                "package_stock" =>$this->input->post("stocks"),
                 "sup_id" =>$this->input->post("sup_company")
        
			);
			$type = $this->input->post("type");
		    $size = $this->input->post("size");
			
					$type = $this->input->post("type");
		            $size = $this->input->post("size");
					$this->AdminPackaging_model->activity_logs('admin', "Inserted New Packaging: '".$type." bag, ".$size."g'");
					$data = $this->security->xss_clean($data);
					$this->AdminPackaging_model->insert_data($data);
					$this->session->set_flashdata('error', 'Packaging added successfully');
					redirect('adminPackaging', 'refresh');
				
			
		}

        function activation(){
			
			$this->load->model('AdminPackaging_model');
			$id = $this->input->post("deact_id");
			$deact = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$id."'")->row()->pack_activation;
			$type = $this->input->post("type");
            $size = $this->input->post("size");

			if ($deact == 1){
				$this->AdminPackaging_model->activity_logs('admin', "Deativated: '".$type." bag, ".$size."g'");	
				$this->AdminPackaging_model->activation($id);
				redirect('adminPackaging', 'refresh');
			} else {
				$this->AdminPackaging_model->activity_logs('admin', "Activated: '".$type." bag, ".$size."g'");
				$this->AdminPackaging_model->activation($id);
				redirect('adminPackaging', 'refresh');
			}


		}
        
	}
?>