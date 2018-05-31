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

        function update(){
            $stck_idv         = $this->input->post("stckid");
            $stck_stockv      = $this->input->post("physcount");
            $stck_physcountv  = $this->input->post("physcount");
            $stck_discrepancyv= $this->input->post("discrepancy");
            $stck_remarksv    = $this->input->post("remarks");
            $inventory_datev    = $this->input->post("date");
            $name               = $this->input->post("stck_name");
            
            
    if ($_POST){        
       for ($i = 0; $i < count($this->input->post("stckid")); $i++){

             if((!empty($stck_physcountv[$i]) )){   
              
                $data = array(
                    'sticker_id'             => $stck_idv[$i],
                    'sticker_stock'          => $stck_stockv[$i],
                    'sticker_physcount'      => $stck_physcountv[$i],
                    'sticker_discrepancy'    => $stck_discrepancyv[$i],
                    'sticker_remarks'        => $stck_remarksv[$i],
                    'inventory_date'         => $inventory_datev[$i],

                );

            $this->InventoryStickers_Model->update($data , $stck_idv[$i]);    
            
            $this->InventoryStickers_Model->activity_logs('inventory', "Record Physical Count under Stickers Invetory Stocks ");

            $this->InventoryStickers_Model->walkin_sales(1, $stck_idv[$i]);
            $this->InventoryStickers_Model->client_coffreturn(1, $stck_idv[$i]);  
            $this->InventoryStickers_Model->contracted_po(1, $stck_idv[$i]);
            $this->InventoryStickers_Model->company_returns(1, $stck_idv[$i]);  
            $this->InventoryStickers_Model->supp_po_ordered(1, $stck_idv[$i]); 
        
       
        }
    }
 }        
       redirect('inventoryStickers');                  
           

    }

	}

?>