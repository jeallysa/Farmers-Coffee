<?php

	class InventoryBlends extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryBlends_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				
				$data["blend"] = $this->InventoryBlends_Model->retrieveBlends();
				$data['reorder'] = $this->notification_model->reorder();
				$this->load->view('Inventory_Module/inventoryBlends', $data);
			} else {
				redirect('login');
			}
		}

		function update($id){
            
            $data = array(
                        'blend_id'         => $this->input->post("blndid"),
                        'blend_qty'        => $this->input->post("physcount") ,
                        'blend_physcount'  => $this->input->post("physcount"),
                        'blend_discrepancy'=> $this->input->post("discrepancy"),
                        'blend_remarks'    => $this->input->post("remarks"),
                        'inventory_date'    => $this->input->post("date"),
                    );              
                
        
            $this->InventoryBlends_Model->update($data , $id); 

        	$this->InventoryBlends_Model->activity_logs('inventory', "Record Physical Count under Coffee Blends Inventory Stocks ");
        	
        	$this->InventoryBlends_Model->walkin_sales(1, $id);
        	$this->InventoryBlends_Model->client_coffreturn(1, $id);  
        	$this->InventoryBlends_Model->contracted_po(1, $id);  
        
            
            redirect('inventoryBlends');
        }  

	}

?>