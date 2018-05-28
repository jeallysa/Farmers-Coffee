<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOOrder extends CI_Controller{
        
        
		function __construct(){
			parent::__construct();
            
            $this->load->model('inventoryPOOrder_model');
            $this->load->model('notification_model');
            $this->load->helper('date');
		}
		
        
        
        
        
		public function index(){ 
       //    $this->load->view('layout/header');
            
            $data['order'] = $this->inventoryPOOrder_model ->retrieveOrder();
            $data['user'] = $this->inventoryPOOrder_model ->retrieveUsers();
            
            
            $data['reorder'] = $this->notification_model->reorder();
            
            
			$this->load->view('inventoryPOOrder' , $data);
		}
        
        
        
        
        
    public function archive(){
        $supp_po_id = $this->input->post('supp_po_id');
        $date       = $this->input->post('date');
        
        $this->inventoryPOOrder_model->archive($supp_po_id , $date);
          
          
        redirect(base_url('inventoryPOOrder'));
      }    
        
        
        
        
        
        
        
        
        
        
        
        
   
    public function insertPartial($temp){
           
        $DRNO=$this->input->post('DRNO');
        $itemIdv=$this->input->post('itemId');
        $itemNamev=$this->input->post('item');
        $itemTypev=$this->input->post('itemType');
        $yield_weightv=$this->input->post('yield_weight');
        $yieldsv = $this->input->post('yield');
        $receivedv = $this->input->post('received');    
        $datev=$this->input->post('date');
        $receivedByv=$this->input->post('receivedBy');
        $supp_po_id = $temp;
        $category = $this->input->post('category');
	    
            
       
  if ($_POST)  {
	 
        $lastTrans = $this->inventoryPOOrder_model->getLastTrans();
	    $newTrans = $lastTrans->trans_id;
	    $new = $newTrans+1;
      
        $lastInvTrans = $this->inventoryPOOrder_model->getLastInvTrans();
	    $newInvTrans = $lastInvTrans->trans_id;
	    $newTrans = $newInvTrans+1;
	    
       $inv_transact = array(
                    'transact_date' => $datev,
                    'po_supplier' => $temp,
                    'type' => "IN",
                  

                );
      $transact_id = $this->inventoryPOOrder_model->insertInvTransact($inv_transact);
	  
 for ($i = 0; $i < count($this->input->post('itemId')); $i++){
     
                                                                                                                    
 if($category[$i] == 1){ 
     
     
	       $lastTrans = $this->inventoryPOOrder_model->getLastTrans();
	       $raw_id = $this->input->post('raw_id');
	 
           if((!empty($receivedv[$i]) && !empty($yield_weightv[$i]) )){   
              
                                   //Data used for mapping 
			   
			   
                $data3 = array(
                    "drNo"=>$DRNO,
                    "itemId"=>$itemIdv[$i],
                    "item" => $itemNamev[$i],
                    "itemType" => $itemTypev[$i],
                    "supp_po_ordered_id" => $itemIdv[$i],
                    "yield_weight" => ($yield_weightv[$i] * 1000),
                    'received' => ($receivedv[$i] * 1000),
                    "date_received" => $datev,
                    "received_by" =>$receivedByv,
                    "supp_po_id"    => $temp,
                );
            
              
              
                               //Data to be inserted in the Delivery table
                $data = array(
                    'drNo'=>$DRNO,
                    'supp_po_ordered_id' => $itemIdv[$i],
                    'yield_weight' => ($yield_weightv[$i] * 1000),
                    'yields' => (($receivedv[$i] - $yield_weightv[$i]) * 1000),
                    'received' => ($receivedv[$i] * 1000),
                    'date_received' => $datev,
                    'received_by' =>$receivedByv,
                    'supp_po_id'    => $temp,

                );
			   
			   
			   
		        $trans_raw = array(
                    'trans_id' => $transact_id,
                    'raw_coffeeid' => $raw_id[$i],
                    'quantity' => $yield_weightv[$i] * 1000,
                  

                );
               
                
               
               
        $this->inventoryPOOrder_model->insertORDER($data);
			   
	    $this->inventoryPOOrder_model->insertTrans($trans_raw);
      
        $this->inventoryPOOrder_model->updateStock($data3, $supp_po_id); 
              
        $this->inventoryPOOrder_model->updateSuppPoOrderReceived($data3, $supp_po_id);       
          
        $this->inventoryPOOrder_model->updateOrderStatus($data3, $supp_po_id); //updating the status first before refreshing.      
              
        $this->inventoryPOOrder_model->activity_logs('inventory', "Record Partial Delivery ");
        }
  
 }  else{
     
     
     if((!empty($receivedv[$i]))){   
                        
         
         
         //Data used for mapping 
                $data3 = array(
                    "drNo"=>$DRNO,
                    "itemId"=>$itemIdv[$i],
                    "item" => $itemNamev[$i],
                    "itemType" => $itemTypev[$i],
                    "supp_po_ordered_id" => $itemIdv[$i],
                    "yield_weight" => $receivedv[$i],
                    'received' => $receivedv[$i],
                    "date_received" => $datev,
                    "received_by" =>$receivedByv,
                    "supp_po_id"    => $temp,
                );
            
              
              
                               //Data to be inserted in the Delivery table
                $data = array(
                    'drNo'=>$DRNO,
                    'supp_po_ordered_id' => $itemIdv[$i],
                    'yield_weight' => $receivedv[$i],
                    'yields' => " ",
                    'received' =>$receivedv[$i],
                    'date_received' => $datev,
                    'received_by' =>$receivedByv,
                    'supp_po_id'    => $temp,

                );
               
               
        $this->inventoryPOOrder_model->insertORDER($data);
      
        $this->inventoryPOOrder_model->updateStock($data3, $supp_po_id); 
              
        $this->inventoryPOOrder_model->updateSuppPoOrderReceived($data3, $supp_po_id);       
          
        $this->inventoryPOOrder_model->updateOrderStatus($data3, $supp_po_id); //updating the status first before refreshing.      
              
        $this->inventoryPOOrder_model->activity_logs('inventory', "Record Partial Delivery ");
        }
     
 }
      
     
      
}
      
	}
           redirect(base_url('inventoryPOOrder'));
 }
        
    
        
        
        
        
   //--------------------------------------------        FULL    
        
        
        /*  currently not using Full 
    
  public function insertFull($temp){
        $DRNO=$this->input->post('DRNO');   
        $itemIdv=$this->input->post('itemId');
        $itemNamev=$this->input->post('item');
        $fullRemaining = $this->input->post('fullRemaining');       // using the quantity to be inserted in the received. because its full delivery. 
        $itemTypev=$this->input->post('itemType');
        $yield_weightv=$this->input->post('yield_weight');
        $yieldsv = $this->input->post('yield');
        $datev=$this->input->post('date');
        $receivedByv=$this->input->post('receivedBy');
        $supp_po_id = $temp;
            
  
            
 if ($_POST)  {
            

                      
        for ($i = 0; $i < count($this->input->post('itemId')); $i++){
       
                                     //Date used for mapping 
              $data3[$i] = array(
                                    "drNo"=>$DRNO,
                                    "itemId"=>$itemIdv[$i],
                                    "item" => $itemNamev[$i],
                                    "itemType" => $itemTypev[$i],
                                    "supp_po_ordered_id" => $itemIdv[$i],
                                    "yield_weight" => $yield_weightv[$i],
                                    "received" => $fullRemaining[$i], 
                                    "date_received" => $datev,
                                    "received_by" =>$receivedByv,
                                    "supp_po_id"    => $temp,
            );
            
                             $data2[$i] = array('supp_po_ordered_id' => $itemIdv[$i],  //To map what product in a particular PO
                                 );
              
            
                                          //Data to be inserted in the Delivery table
                             $data[$i] = array(
                                    'drNo'=>$DRNO,
                                    'supp_po_ordered_id' => $itemIdv[$i],
                                    'yield_weight' => $yield_weightv[$i],
                                    'yields' => $yieldsv[$i],
                                    'received' => $fullRemaining[$i], 
                                    'date_received' => $datev,
                                    'received_by' =>$receivedByv,
                                    'supp_po_id'    => $temp,
        
                                 );
                               
                             
                           
    }
        $this->inventoryPOOrder_model->insertORDER($data);
   
        $this->inventoryPOOrder_model->updateStockFull($data3, $supp_po_id); 
          
        $this->inventoryPOOrder_model->updateOrderStatusFull($data2, $supp_po_id); //updating the status first before refreshing.  

        $this->inventoryPOOrder_model->activity_logs('inventory', "Record Full Delivery ");
          
         
            
    }
            
            redirect(base_url('inventoryPOOrder'));
    }
        */
        
        
        
        
}
?>