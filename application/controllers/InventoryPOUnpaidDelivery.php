<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOUnpaidDelivery extends CI_Controller{
        
		function __construct(){
			parent::__construct();
            
            $this->load->model('inventoryPOUnpaidDelivery_model');
            $this->load->model('notification_model');
            
		}
		
		public function index(){ 
       //     $this->load->view('layout/header');
            
            
            $data['unpaid'] = $this->inventoryPOUnpaidDelivery_model->retrieveUnpaid();
            $data['total'] = $this->inventoryPOUnpaidDelivery_model->getTotalAmount();
            
             $data['reorder'] = $this->notification_model->reorder();
            
            
			$this->load->view('inventoryPOUnpaidDelivery',$data);
		}
        
        
        
            
    public function ajaxTotal(){          //ajax part
        $poId = $this->input->post('poId');
       
        $result = $this->inventoryPOUnpaidDelivery_model->ajaxTotal($poId);
        
        if(count($result)>0){
        
                     
            
      
            echo json_encode($result);
        }
          
    }

        
        
        
        
                 
     public function get_itemList(){    
        $dr = $this->input->post('drList');
        $supp_po_id = $this->input->post('supp_po_id'); 
        
        $results = $this->inventoryPOUnpaidDelivery_model->get_itemList($dr,$supp_po_id);
        
        if(count($results)>0){
            $pro_select_box = '';
            $pro_select_box .= '<option value="">Select Item</option>';
            
          foreach ($results as $object) {  
             $pro_select_box .=' <option value="'.$object->supp_po_ordered_id.'">'.$object->item. " " .$object->type.'</option>';
         }
            echo json_encode($pro_select_box);
            
        }
        
    }  
        
        
        
        
        
        
    public function get_max(){  
        
        $poNo = $this->input->post('poNo');
        $item = $this->input->post('item');
        $drNo = $this->input->post('drNo');
        
           
        
        $result = $this->inventoryPOUnpaidDelivery_model->get_maxModel($poNo , $item, $drNo);
        
         if(count($result) > 0){
 
          
          echo json_encode($result);
         }
        
      
    }    
        
        
        
        
        public function insertReturn(){
             $category = $this->input->post('category');
             $returnQty = $this->input->post('returnQty');
            if($category == 1){
          
                  $data = array(      "poNo"               => $this->input->post('poNo'),
                                      "drNo"               => $this->input->post('drList'),
                                      "sup_returnDate"     => $this->input->post('date'),
                                      "sup_returnItem"     => $this->input->post('item'),
                                      "sup_returnRemarks"  => $this->input->post('remarks'),
                                      "sup_returnQty"      => $returnQty * 1000,
                                      "categoryr"          => $category,
                                     );   
            }else{
                
                 $data = array(      "poNo"                => $this->input->post('poNo'),
                                      "drNo"               => $this->input->post('drList'),
                                      "sup_returnDate"     => $this->input->post('date'),
                                      "sup_returnItem"     => $this->input->post('item'),
                                      "sup_returnRemarks"  => $this->input->post('remarks'),
                                      "sup_returnQty"      => $returnQty,
                                      "categoryr"          => $category, 
                                     );   
                
                
                
                
            }
        
         $this->inventoryPOUnpaidDelivery_model->insertReturns($data);
          
         $this->inventoryPOUnpaidDelivery_model->updateStocks($data);  
          
          
          
          
          
        redirect(base_url('inventoryPOUnpaidDelivery'));
      }   
        
        
        
        
        
        
        
        
        
        
        
         public function insertPartialPayment($temp){
         $supp_po_id = $temp;
         $data = array(   "supp_po_id" => $temp,
                          "date"       => $this->input->post("date"),
                          "amount"     => $this->input->post("amount"),
                          "bank"       => $this->input->post("bank"),
                       );
             
        $data2 = array("amount"     => $this->input->post("amount"),
                       );
             
             
         $this->inventoryPOUnpaidDelivery_model->insertPayment($data);
         $this->inventoryPOUnpaidDelivery_model->updatePOPayment($data2 , $supp_po_id);
        $this->inventoryPOUnpaidDelivery_model->activity_logs('inventory', "Record Partial Payment ");

             
         redirect(base_url('inventoryPOUnpaidDelivery'));
     }     
        
        
        
        
        public function insertFullPayment($temp){
         $remaining = $this->inventoryPOUnpaidDelivery_model->getRemaining($temp); //get the remaining balance and used it as the amount to be inserted
         $supp_po_id = $temp;
         
         $data = array(   "supp_po_id" => $temp,
                          "date"       => $this->input->post("date"),
                          "amount"     => $remaining,
                          "bank"       => $this->input->post("bank"),
                       );
             
        $data2 = array("amount"     => $remaining,
                       );
             
             
         $this->inventoryPOUnpaidDelivery_model->insertPayment($data);
         $this->inventoryPOUnpaidDelivery_model->updatePOPayment($data2 , $supp_po_id);
        $this->inventoryPOUnpaidDelivery_model->activity_logs('inventory', "Record Full Payment ");

             
         redirect(base_url('inventoryPOUnpaidDelivery'));
     }     
        
        
        
        
        

	}

?>