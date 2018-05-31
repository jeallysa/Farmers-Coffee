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

		function update(){
			$blend_idv         = $this->input->post("blendid");
            $blend_stockv      = $this->input->post("physcount");
            $blend_physcountv  = $this->input->post("physcount");
            $blend_discrepancyv= $this->input->post("discrepancy");
            $blend_remarksv    = $this->input->post("remarks");
            $inventory_datev    = $this->input->post("date");
            $name               = $this->input->post("blend_name");
            
            
    if ($_POST){        
       for ($i = 0; $i < count($this->input->post("blendid")); $i++){

			 if((!empty($blend_physcountv[$i]) )){   
              
                $data = array(
                	'blend_id'             => $blend_idv[$i],
                    'blend_qty'            => $blend_stockv[$i],
                    'blend_physcount'      => $blend_physcountv[$i],
                    'blend_discrepancy'    => $blend_discrepancyv[$i],
                    'blend_remarks'        => $blend_remarksv[$i],
                    'inventory_date'       => $inventory_datev[$i],

                );

            $this->InventoryBlends_Model->update($data , $blend_idv[$i]); 

        	$this->InventoryBlends_Model->activity_logs('inventory', "Record Physical Count under Coffee Blends Inventory Stocks ");
        	
        	$this->InventoryBlends_Model->walkin_sales(1, $blend_idv[$i]);
        	$this->InventoryBlends_Model->client_coffreturn(1, $blend_idv[$i]);  
        	$this->InventoryBlends_Model->contracted_po(1, $blend_idv[$i]); 
        
       
        }
    }
 }        
       redirect('inventoryBlends');                  
           

	} 

	}

?>