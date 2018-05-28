<?php

	class InventoryStickers extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryStickers_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$data['reorder'] = $this->notification_model->reorder();
				$data["sticker"] = $this->InventoryStickers_Model->retrieveSticker();
				$this->load->view('Inventory_Module/inventoryStickers', $data);
			} else {
				redirect('login');
			}
		}

		function update($id){
             
            
            $data = array(
                        'sticker_id'         => $this->input->post("stckrid"),
                        'sticker_stock'  => $this->input->post("physcount"),
                        'sticker_physcount'  => $this->input->post("physcount"),
                        'sticker_discrepancy'=> $this->input->post("discrepancy"),
                        'sticker_remarks'    => $this->input->post("remarks"),
                        'inventory_date'    => $this->input->post("date"),
                    );              
                
        
            $this->InventoryStickers_Model->update($data , $id);    
        	
        	$this->InventoryStickers_Model->activity_logs('inventory', "Record Physical Count under Stickers Invetory Stocks ");

        	$this->InventoryStickers_Model->walkin_sales(1, $id);
        	$this->InventoryStickers_Model->client_coffreturn(1, $id);  
        	$this->InventoryStickers_Model->contracted_po(1, $id);
        	$this->InventoryStickers_Model->company_returns(1, $id);  
        	$this->InventoryStickers_Model->supp_po_ordered(1, $id);   
            
            redirect('inventoryStickers');
        }  

	}

?>