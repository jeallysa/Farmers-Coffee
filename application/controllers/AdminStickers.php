<?php 

	class AdminStickers extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('AdminStickers_model', 'CM');
			$this->load->helper('security');
		}
		
		function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminStickers_model');
				$data['stickers']=$this->AdminStickers_model->getStickers();
	            $data1['getSupplier'] = $this->AdminStickers_model->getSupplier();
				$this->load->view('Admin_Module/adminStickers',  ['data' => $data,  'data1' => $data1]);
			} else {
				redirect('login');
			}
		}
        
        function update(){
			$this->load->model('AdminStickers_model');
			$id = $this->input->post("sticker_id");
			$name = $this->input->post("name");
			$sticker_type = $this->input->post("sticker_type");
			$reorder = $this->input->post("reorder");
			$stocks = $this->input->post("stocks");
			$unitprice = $this->input->post("unitprice");
			$sup_id = $this->input->post("sup_company");
			$this->AdminStickers_model->activity_logs('admin', "Updated Sticker: '".$name."'");	
			$this->AdminStickers_model->update($id, $name, $sticker_type, $reorder, $stocks, $unitprice, $sup_id);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminStickers', 'refresh');
		}
        
         function insert()
		{
			$this->load->model('AdminStickers_model');
			$data = array(
				"sticker" =>$this->input->post("name"),
                "sticker_type" =>$this->input->post("sticker_type"),
                "unitPrice" =>$this->input->post("unitprice"),
				"sticker_reorder" =>$this->input->post("reorder"),
                "sticker_stock" =>$this->input->post("stocks"),
                "sup_id" =>$this->input->post("sup_company")
			);
			$sticker = $this->input->post("name");
            $sticker_type = $this->input->post("sticker_type");
			if($this->db->query("SELECT IF (EXISTS (SELECT * FROM sticker WHERE sticker = '".$sticker."' AND sticker_type = '".$sticker_type."'), 1,  0) AS result")->row()->result == 1){
					$this->session->set_flashdata('error', 'Sticker already exist');
					redirect('adminStickers');
				}else{
					$name = $this->input->post("name");
					$this->AdminStickers_model->activity_logs('admin', "Inserted Sticker: '".$name."'");	
					$data = $this->security->xss_clean($data);
					$this->AdminStickers_model->insert_data($data);
					$this->session->set_flashdata('error', 'Sticker added successfully');
					redirect('adminStickers', 'refresh');
				}
			
		}
        
        function activation(){
			
			$this->load->model('AdminStickers_model');
			$id = $this->input->post("deact_id");
			$deact = $this->db->query("SELECT * FROM sticker WHERE sticker_id = '".$id."'")->row()->sticker_activation;
			$name = $this->input->post("name");
			if ($deact == 1){
				$this->AdminStickers_model->activity_logs('admin', "Deactivated: '".$name."'");	
				$this->AdminStickers_model->activation($id);
				redirect('adminStickers');
			}else{	
				$this->AdminStickers_model->activity_logs('admin', "Activated: '".$name."'");	
				$this->AdminStickers_model->activation($id);
				redirect('adminStickers');
			}

		}

	}
?>