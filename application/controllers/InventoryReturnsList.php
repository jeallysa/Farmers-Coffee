<?php

	class InventoryReturnsList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('InventoryReturnsList_Model');
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$reorder = $this->notification_model->reorder();
				$data1['get_companyreturns'] = $this->InventoryReturnsList_Model->get_companyreturns();
				$data2['get_clientcoffeereturns'] = $this->InventoryReturnsList_Model->get_clientcoffeereturns();
				$data3['get_clientmachinereturns'] = $this->InventoryReturnsList_Model->get_clientmachinereturns();
				$data4['get_suppliers'] = $this->InventoryReturnsList_Model->get_suppliers();
				$data5['get_coffee'] = $this->InventoryReturnsList_Model->get_coffee();
                $data6['get_coffee_walkin_return'] = $this->InventoryReturnsList_Model->get_coffee_walkin_return();
                
                
                
                $poList = $this->InventoryReturnsList_Model->get_PO();
                
                
                
                
             
                
                
				$this->load->view('Inventory_Module/inventoryReturnsList', ["poList" => $poList , "reorder" => $reorder, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5, 'data6' => $data6] );
			} else {
				redirect('login');
			}

			
		}

        
        
        
           
     public function get_itemList(){    
        $po = $this->input->post('poList');
        
        $results = $this->InventoryReturnsList_Model->get_PoList($po);
        
        if(count($results)>0){
            $pro_select_box = '';
            $pro_select_box .= '<option value="">Select Item</option>';
            
          foreach ($results as $object) {  
             $pro_select_box .=' <option value="'.$object->supp_po_ordered_id.'">'.$object->item. " " .$object->type.'</option>';
         }
            echo json_encode($pro_select_box);
            
        }/*
         else{
       
              
              $pro_select_box = '<option value="">Select Type</option>';
              echo json_encode($pro_select_box);
          }  
          */
        
    }
      
    
       public function get_max(){    
        $item = $this->input->post('itemList');
        $poNo = $this->input->post('poNo');   
           
        
        $result = $this->InventoryReturnsList_Model->get_maxModel($item, $poNo);
        
     
          
            echo json_encode($result);
            
        
      
    }     
        
        
        
        
              
      public function insertReturn(){
        
          
         $data = array(      "poNo" => $this->input->post('poList'),
                             "sup_returnDate"  => $this->input->post('date'),
                             "sup_returnItem"      => $this->input->post('item'),
                             "sup_returnRemarks" => $this->input->post('remarks'),
                             "drNo"    => $this->input->post('drNo'),
                             "sup_returnQty" => $this->input->post('returnQty'),
                            );    
        
        $this->InventoryReturnsList_Model->insertReturns($data);
          
         $this->InventoryReturnsList_Model->updateStocks($data);  
          
          
          
          
          
        redirect(base_url('inventoryReturnsList'));
      }
        
        
        
        
       public function resolveIssue($supp_po_id){ //$returnId,$returnItem,$supp_po_id,$qty
           
        $data = array(       "return_dr"        => $this->input->post('return_dr'),
			                 "return_date"        => $this->input->post('return_date'),
			                 "returnId"        => $this->input->post('returnId'),
                             "returnItem"     => $this->input->post('returnItem'),
                             "supp_po_id"     => $this->input->post('supp_po_id'),
                             "qty"            => $this->input->post('qty'),
                        
                            );       
           
           
        //$tempReturnId = $returnId;
       // $tempItem     = $returnItem;
      //  $tempPoId     = $supp_po_id;
       // $tempQty      = $qty;
            
        $this->InventoryReturnsList_Model->resolveIssue($data,$supp_po_id);

             
        redirect(base_url('inventoryReturnsList'));
     }   
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        


	}

?>