<?php 
  class inventoryPOUnpaidDelivery_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construct();
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
      
      
      
      
      
         function insertReturns($data, $date_ret, $supp_po_id, $ret_quan){             
           $this->db->insert("company_returns" , $data);
           $id = $this->db->insert_id();
           $inv_trans = array(
              'transact_date' => $date_ret,
              'company_returnID' => $id,
              'type' => 'OUT'

           );
           $this->db->insert('inv_transact', $inv_trans);
           $trans_id = $this->db->insert_id();
           // $pack_size = $this->db->query("SELECT a.blend, b.package_id, b.package_type, b.package_size FROM coffee_blend a JOIN packaging b ON a.package_id = b.package_id WHERE a.blend_type = 'Client' AND a.blend_id = '".$blend_id."';")->row()->package_size;
           // $props = $this->db->query("SELECT c.raw_id, c.raw_coffee, b.percentage FROM coffee_blend a JOIN proportions b ON a.blend_id = b.blend_id JOIN raw_coffee c ON b.raw_id = c.raw_id WHERE a.blend_id = '".$blend_id."' AND b.percentage > 0");
           $supp_po = $this->db->query("SELECT * FROM supp_po_ordered WHERE supp_po_ordered_id = '".$supp_po_id."';");
           $item = $supp_po->row()->item;
           $type = $supp_po->row()->type;
           $raw_check = $this->db->query("SELECT IF(EXISTS(SELECT * FROM raw_coffee WHERE raw_coffee = '".$item."' AND raw_type = '".$type."' AND raw_activation = 1), 1, 0) AS raw_check;")->row()->raw_check;
           $pack_check = $this->db->query("SELECT IF(EXISTS(SELECT * FROM packaging WHERE package_type = '".$item."' AND package_size = '".$type."' AND pack_activation = 1), 1, 0) AS pack_check;")->row()->pack_check;
           $mach_check = $this->db->query("SELECT IF(EXISTS(SELECT * FROM machine WHERE brewer = '".$item."' AND brewer_type = '".$type."' AND mach_activation = 1), 1, 0) AS mach_check;")->row()->mach_check;
           $stick_check = $this->db->query("SELECT IF(EXISTS(SELECT * FROM sticker WHERE sticker = '".$item."' AND sticker_type = '".$type."' AND sticker_activation = 1), 1, 0) AS stick_check;")->row()->stick_check;
           // var_dump($raw_check);
           // var_dump($pack_check);
           // var_dump($mach_check);
           // var_dump($stick_check);

           if ($raw_check == 1){
              $sel_raw = $this->db->query("SELECT * FROM raw_coffee WHERE raw_coffee = '".$item."' AND raw_type = '".$type."'");
              $sel_raw_id = $sel_raw->row()->raw_id;
              $trans_raw = array(
                    'trans_id' => $trans_id,
                    'raw_coffeeid' => $sel_raw_id,
                    'quantity' => $ret_quan * 1000
              );
              $this->db->insert('trans_raw', $trans_raw);
              $this->db->query("UPDATE raw_coffee SET raw_stock = raw_stock - ".$ret_quan." WHERE raw_coffee = '".$item."' AND raw_type = '".$type."';");
           }else if ($pack_check == 1){
              $sel_pack = $this->db->query("SELECT * FROM packaging WHERE package_type = '".$item."' AND package_size = '".$type."'");
              $sel_pack_id = $sel_pack->row()->package_id;
              $trans_pack = array(
                    'trans_id' => $trans_id,
                    'package_id' => $sel_raw_id,
                    'quantity' => $ret_quan
              );
              $this->db->insert('trans_pack', $trans_pack);
              $this->db->query("UPDATE packaging SET package_stock = package_stock - ".$ret_quan." WHERE package_type = '".$item."' AND package_size = '".$type."';");
           }else if ($mach_check == 1){
              $sel_mach = $this->db->query("SELECT * FROM machine WHERE brewer = '".$item."' AND brewer_type = '".$type."'");
              $sel_mach_id = $sel_mach->row()->package_id;
              $trans_mach = array(
                    'trans_id' => $trans_id,
                    'mach_id' => $sel_mach_id,
                    'quantity' => $ret_quan
              );
              $this->db->insert('trans_mach', $trans_mach);
           }else if ($stick_check == 1){
              $sel_stick = $this->db->query("SELECT * FROM sticker WHERE sticker = '".$item."' AND sticker_type = '".$type."'");
              $sel_stick_id = $sel_stick->row()->sticker_id;
              $trans_stick = array(
                    'trans_id' => $trans_id,
                    'sticker_id' => $sel_stick_id,
                    'quantity' => $ret_quan
              );
              $this->db->insert('trans_stick', $trans_stick);
           }

           // foreach($props->result() AS $row){
           //      $percentage = $row->percentage;
           //      $trans_raw = array(
           //          'trans_id' => $trans_id,
           //          'raw_coffeeid' => $row->raw_id,
           //          'quantity' => $ret_quan*($pack_size*($percentage*0.01))
           //      );
           //      $this->db->insert('trans_raw', $trans_raw);
           // }

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
                                               
                                        //$this->db->insert($arrayItem[$i] , $toUpdate);       
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
