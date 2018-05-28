<?php

	class InventoryPackaging extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryPackaging_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
				$data["packaging"] = $this->InventoryPackaging_Model->retrievePackaging();
				$this->load->view('Inventory_Module/inventoryPackaging', $data);
			} else {
				redirect('login');
			}
		}

		function update($id){
             
            
            $data = array(
                        'package_id'         => $this->input->post("pckgid"),
                        'package_stock'  => $this->input->post("physcount"),
                        'package_physcount'  => $this->input->post("physcount"),
                        'package_discrepancy'=> $this->input->post("discrepancy"),
                        'package_remarks'    => $this->input->post("remarks"),
                        'inventory_date'    => $this->input->post("date"),
                    );              
                
        
            $this->InventoryPackaging_Model->update($data , $id);    
        	
        	$this->InventoryPackaging_Model->activity_logs('inventory', "Record Physical Count under Packaging Inventory Stocks ");

        	$this->InventoryPackaging_Model->walkin_sales(1, $id);
        	$this->InventoryPackaging_Model->client_coffreturn(1, $id);  
        	$this->InventoryPackaging_Model->contracted_po(1, $id);
        	$this->InventoryPackaging_Model->company_returns(1, $id);  
        	$this->InventoryPackaging_Model->supp_po_ordered(1, $id);  
            
            redirect('inventoryPackaging');
        }  

	}

?>