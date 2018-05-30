<?php

	class InventoryMachines extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryMachines_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
				$data["machine"] = $this->InventoryMachines_Model->retrieveMachine();
				$this->load->view('Inventory_Module/inventoryMachines', $data);
			} else {
				redirect('login');
			}
		}

		function update(){
			$mach_idv         = $this->input->post("machid");
            $mach_stockv      = $this->input->post("physcount");
            $mach_physcountv  = $this->input->post("physcount");
            $mach_discrepancyv= $this->input->post("discrepancy");
            $mach_remarksv    = $this->input->post("remarks");
            $inventory_datev    = $this->input->post("date");
            $name               = $this->input->post("mach_name");
            $type               = $this->input->post("mach_type");  
            
            
    if ($_POST){        
       for ($i = 0; $i < count($this->input->post("machid")); $i++){

			 if((!empty($mach_physcountv[$i]) )){   
              
                $data = array(
                	'mach_id'             => $mach_idv[$i],
                    'mach_stocks'          => $mach_stockv[$i],
                    'mach_physcount'      => $mach_physcountv[$i],
                    'mach_discrepancy'    => $mach_discrepancyv[$i],
                    'mach_remarks'        => $mach_remarksv[$i],
                    'inventory_date'     => $inventory_datev[$i],

                );

            $this->InventoryMachines_Model->update($data , $mach_idv[$i]);    
        	
        	$this->InventoryMachines_Model->activity_logs('inventory', "Record Physical Count under Machine Inventory Stocks ");

        	$this->InventoryMachines_Model->machine_out(1, $mach_idv[$i]);
        	$this->InventoryMachines_Model->client_machreturn(1, $mach_idv[$i]);
        	$this->InventoryMachines_Model->company_returns(1, $mach_idv[$i]);  
        	$this->InventoryMachines_Model->supp_po_ordered(1, $mach_idv[$i]);      
        
       
        }
    }
 }        
       redirect('inventoryMachines');                  
           

	} 


	}

?>