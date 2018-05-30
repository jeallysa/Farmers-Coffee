<?php

	class InventoryStocks extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryStocks_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
                $data['coffee'] = $this->InventoryStocks_Model ->retrieveCoffee();
				$this->load->view('Inventory_Module/inventoryStocks', $data);
			} else {
				redirect('login');
			}
		}

		function update($id){
			$raw_idv         = $this->input->post("rawid");
            $raw_stockv  = $this->input->post("physcount");
            $raw_physcountv  = $this->input->post("physcount");
            $raw_discrepancyv= $this->input->post("discrepancy");
            $raw_remarksv    = $this->input->post("remarks");
            $inventory_datev    = $this->input->post("date");

			for ($i = 0; $i < count($this->input->post("rawid")); $i++){

			if((!empty($raw_physcountv[$i]) )){   
              
         
                               //Data to be inserted
                $data = array(
                	'raw_id'         => $raw_idv[$i],
                    'raw_stock'  => ($raw_stockv[$i] * 1000),
                    'raw_physcount'  => ($raw_physcountv[$i] * 1000),
                    'raw_discrepancy'=> ($raw_discrepancyv[$i] * 1000),
                    'raw_remarks'    => $raw_remarksv[$i],
                    'inventory_date'    => $inventory_datev[$i],

                );
			   
               
                
               
               
        $this->InventoryStocks_Model->update($data , $id);

        $this->InventoryStocks_Model->activity_logs('inventory', "Record Physical Count under Raw Coffee Stocks ");

        $name = $this->input->post("rawname");
        $type = $this->input->post("rawtype");
        	
        $this->InventoryStocks_Model->supp_po_ordered(1, $name, $type);
        $this->InventoryStocks_Model->company_returns(1, $name, $type);  
        $this->InventoryStocks_Model->trans_raw(1, $id);  
        
            
        redirect('inventorystocks');
        }
    }
                        
                
        
            
        }  

	}

?>