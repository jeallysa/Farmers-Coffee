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

		function update(){
			$pck_idv         = $this->input->post("pckid");
            $pck_stockv      = $this->input->post("physcount");
            $pck_physcountv  = $this->input->post("physcount");
            $pck_discrepancyv= $this->input->post("discrepancy");
            $pck_remarksv    = $this->input->post("remarks");
            $inventory_datev    = $this->input->post("date");
            $name               = $this->input->post("pck_name");
            $type               = $this->input->post("pck_type");  
            
            
    if ($_POST){        
       for ($i = 0; $i < count($this->input->post("pckid")); $i++){

			 if((!empty($pck_physcountv[$i]) )){   
              
                $data = array(
                	'package_id'             => $pck_idv[$i],
                    'package_stock'          => $pck_stockv[$i],
                    'package_physcount'      => $pck_physcountv[$i],
                    'package_discrepancy'    => $pck_discrepancyv[$i],
                    'package_remarks'        => $pck_remarksv[$i],
                    'inventory_date'     => $inventory_datev[$i],

                );

            $this->InventoryPackaging_Model->update($data , $pck_idv[$i]);    
        	
        	$this->InventoryPackaging_Model->activity_logs('inventory', "Record Physical Count under Packaging Inventory Stocks ");

        	$this->InventoryPackaging_Model->walkin_sales(1,  $pck_idv[$i]);
        	$this->InventoryPackaging_Model->client_coffreturn(1,  $pck_idv[$i]);  
        	$this->InventoryPackaging_Model->contracted_po(1,  $pck_idv[$i]);
        	$this->InventoryPackaging_Model->company_returns(1,  $pck_idv[$i]);  
        	$this->InventoryPackaging_Model->supp_po_ordered(1,  $pck_idv[$i]);  
        
       
        }
    }
 }        
       redirect('inventoryPackaging');                  
           

	}

	}

?>