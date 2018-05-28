<?php 
  class inventoryPOUnpaidDelivery_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  
  

 /* 
  function retrieveUnpaid(){
      $query = $this->db->query('SELECT * FROM  supp_po join supplier on supp_id = sup_id   where delivery_stat = 1 and payment_stat = 0');
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
	  */
   
	  
	  function retrieveUnpaid(){
      $query = $this->db->query('SELECT * FROM  supp_po join supplier on supp_id = sup_id   where (delivery_stat = 1 and payment_stat = 0) or (delivery_stat = 0 and partial_stat = 1)');
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
     
      
   function ajaxTotal($poId){
      $query = $this->db->query('SELECT * from supp_po where supp_po_id ='.$poId);
      if($query->num_rows() > 0){
          return $query->row();
      }else
          return NULL;
  }
      
      
 
         public function get_itemList($dr,$supp_po_id){
			$query = $this->db->query("select distinct supp_po_ordered.supp_po_ordered_id , item ,type  from supp_delivery join supp_po_ordered using(supp_po_ordered_id) where drNo = '".$dr."' and supp_delivery.supp_po_id = ".$supp_po_id);
			return $query->result();
			
		}  
      
      
      
      
      
      
      
      
      public function get_maxModel($poNo, $item, $drNo){
            
            
            $queryCheck = $this->db->query("SELECT * FROM company_returns where poNo = ".$poNo."  and sup_returnItem = ".$item." and drNo = '".$drNo."'");
            
$queryLimit = $this->db->query("SELECT sum(yield_weight) as yield_weight , categoryx FROM supp_delivery  join supp_po_ordered using(supp_po_ordered_id) where supp_delivery.supp_po_id  = ".$poNo." and supp_po_ordered_id =  ".$item." and drNo = '".$drNo."'");
            
            $queryDeduc = $this->db->query("SELECT sum(sup_returnQty)  max  FROM company_returns where poNo = ".$poNo."  and sup_returnItem = ".$item." and drNo = '".$drNo."'");
            
            
		 
   if($queryCheck->num_rows() > 0){
                    
                            $limit = $queryLimit->row();
                            $deduc = $queryDeduc->row();
                    
       
                    $limitT  =  $limit->yield_weight;
                    $category  = $limit->categoryx;
       
                    $deducT  = $deduc->max;
                    
                    $total = $limitT - $deducT;
       
       
       
                    $result = array("yield_weight"  => $total,
                                     "categoryx"    =>$category,
                                               );
        
                 
                    
                    return $result;
                    
    }else{
                    
  $query2 = $this->db->query("SELECT sum(yield_weight) as yield_weight , categoryx FROM supp_delivery  join supp_po_ordered using(supp_po_ordered_id) where supp_delivery.supp_po_id  = ".$poNo." and supp_po_ordered_id =  ".$item." and drNo = '".$drNo."'");
                if($query2->num_rows() > 0){
                                        
                               $result = $query2->row();
                             
                             
                              //$limit  = $result->yield_weight;
                              //$category = $result->categoryx;
                             
                             
                            // $maxOrder = array("limit" =>$limit,
                                               //"category" =>$category,
                                             // );
                             
                                return  $result;
                             
                              }
                }
        }
      
      
      
      
      
         function insertReturns($data){ 
                  
           $this->db->insert("company_returns" , $data);
           }  
      
      
      
      
                
           function updateStocks($data){ 
         
           $query1 = $this->db->query("SELECT * from supp_po_ordered where supp_po_ordered_id = ".$data['sup_returnItem']." and supp_po_id = ".$data['poNo']);
           $query2 = $this->db->query("SELECT * from supp_po where supp_po_id = ".$data['poNo']);        
                        
                        $result1= $query1->row();
                        $result2= $query2->row();
                        
                        $itemName = $result1->item;//result1['item'];  //
                        $itemType = $result1->type;//result1['type'];  //
                        
                        $sup_id = $result2->supp_id;// result2['supp_id']; //
               
               
               
             $arrayItem = array("raw_coffee","sticker","packaging","machine");
                   $arrayOn = array("raw_coffee","sticker","package_type","brewer");
                      $arrayType = array("raw_type","sticker_type","package_size","brewer_type");
                           $stockColumn= array("raw_stock","sticker_stock","package_stock","mach_stocks");
               
               
                         for($i= 0 ; $i <= 3 ; $i++){
                          
                     $retrieveDetails ="SELECT ".$stockColumn[$i]." as stock FROM ".$arrayItem[$i]." where ".$arrayOn[$i]." = '".$itemName."' and ".$arrayType[$i]." = '".$itemType."' and sup_id = ".$sup_id;  
               
                                       $query = $this->db->query($retrieveDetails);
                                           if ($query->num_rows() > 0) {
                                                  $tempResult = $query->row();
                                                  $stock = $tempResult->stock - $data['sup_returnQty'];
                                               
                                       $where = array( $arrayOn[$i] =>$itemName, $arrayType[$i] =>$itemType, 'sup_id' => $sup_id ); // multiple where
                                               
                                       $toUpdate =array( $stockColumn[$i] => $stock);        
                                               
                                       $this->db->where($where);  //used the where here
                                       $this->db->update($arrayItem[$i], $toUpdate);   
                                               
                                        $this->db->insert($arrayItem[$i] , $toUpdate);       
                                              }
                                            }
                      
                      
                      
                   
                
         
         }
      
      
      
      
      
      
      
      
    function getTotalAmount(){
      $query = $this->db->query('SELECT total_amount FROM supp_po');
      if($query->num_rows() > 0){
          return $query->result();
      }else
          return NULL;
  }  
     
      
   function getRemaining($supp_po_id){
      $query = $this->db->query("SELECT * FROM supp_po where supp_po_id =".$supp_po_id);
      if($query->num_rows() > 0){
          $result = $query->row();
           
          $total =      $result->total_amount;
          $oldPayment = $result->payment;
          
          $remaining = $total - $oldPayment;
         
          return $remaining;
      }else
          return NULL;
  }  
      
    function getTotal($supp_po_id){
      $query = $this->db->query("SELECT * FROM supp_po where supp_po_id =".$supp_po_id);
      if($query->num_rows() > 0){
          $result = $query->row();
           
          $total =      $result->total_amount;
        
          return $total;
      }else
          return NULL;
  }    
      
      
//Insert HERE  ----------------------------------    

    function insertPayment($data){
      $this->db->insert("supp_payment" , $data);
  
    }
      
    function updatePOPayment($data , $supp_po_id ){
      $query = $this->db->query("SELECT * FROM supp_po where supp_po_id =".$supp_po_id);
        if($query->num_rows() > 0){
           $result = $query->row();
           
           $oldPayment = $result->payment;
           $newPayment =  $oldPayment + $data['amount']; 
            
            
         $dataUpdate = array('payment' => $newPayment,
                     );     
               
         $this->db->where('supp_po_id', $supp_po_id); 
         $this->db->update('supp_po',  $dataUpdate);  
            
         //after updating check if it is already equal to the total   
            $queryCheckIfPaid = $this->db->query("SELECT * FROM supp_po where supp_po_id =".$supp_po_id);
                if($queryCheckIfPaid->num_rows() > 0){
                    $result = $queryCheckIfPaid->row();
                    
                    $total = $result->total_amount;
                    $payment =$result->payment;
                    
                    if($payment >= $total ){
                         $dataUpdate = array('payment_stat' => 1,
                                            );     
               
                          $this->db->where('supp_po_id', $supp_po_id); 
                          $this->db->update('supp_po',  $dataUpdate);  
                        
                    }
                }
            
               
      }else
          return NULL;
        
        
        
        
      }  
  
   
  function activity_logs($module, $activity){
    $username = $this->session->userdata('username');
        $query = $this->db->query("SELECT user_no from user where username ='".$username."';");
        foreach ($query ->result() as $row) {
          $id = $row->user_no;
        }

        $data = array(
            'user_no' => $id,
            'timestamp' => date('Y\-m\-d\ H:i:s A'),
            'message' => $activity,
            'type' => $module
        );
        $this->db->insert('activitylogs', $data);
  }  
      
      
      
      
    }

?>
