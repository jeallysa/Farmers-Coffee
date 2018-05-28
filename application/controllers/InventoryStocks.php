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
             
            
            $data = array(
                        'raw_id'         => $this->input->post("rawid"),
                        'raw_stock'  => ($this->input->post("physcount") * 1000),
                        'raw_physcount'  => ($this->input->post("physcount") * 1000),
                        'raw_discrepancy'=> ($this->input->post("discrepancy") * 1000),
                        'raw_remarks'    => $this->input->post("remarks"),
                        'inventory_date'    => $this->input->post("date"),
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

?>