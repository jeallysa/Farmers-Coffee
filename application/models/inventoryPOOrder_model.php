<?php 
  class inventoryPOOrder_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  
  
//  function retrieveCustomer(){
//      $query = $this->db->query('SELECT * from Customer');
      
//      if($query->num_rows() > 0){
//          return $query-> result();
//      }else
//          return NULL;
//   }
  
  
  function retrieveOrder(){
      $query = $this->db->query('SELECT * FROM supp_po join supplier on supp_id = sup_id where (delivery_stat) = 0 and archive = 1');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
	   
	  
	  
    function getLastTrans(){
      $query = $this->db->query('SELECT trans_id FROM trans_raw order by 1 desc limit 1');
            
      if($query->num_rows() > 0){
          return $query->row();
      }else
          return NULL;
  }  
	  
    function getLastInvTrans(){
      $query = $this->db->query('SELECT trans_id FROM inv_transact order by 1 desc limit 1');
            
      if($query->num_rows() > 0){
          return $query->row();
      }else
          return NULL;
  } 
	  
  function retrieveUsers(){
   
    $query = $this->db->query('SELECT * FROM user where u_activation = "1" ');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }    
      
   function retrieveRawStock(){
    $query = $this->db->query('SELECT * FROM raw_coffee ');  
          if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  } 
      

      

      
      
      
      
function insertORDER($data){
    
        $object = $data;
    
        $dataInsert = array(
                                 'partial_stat' => 1,        
                                        );
    
        
        $this->db->where('supp_po_id', $object['supp_po_id'] ); 
        $this->db->update("supp_po" , $dataInsert);                   //once there is a delivery with the PO it will activate the partial stat.
    
    
        $this->db->insert("supp_delivery" , $data);        
     
    
    
     
         
  }  
          
   
function insertTrans($data){
         
      $this->db->insert("trans_raw" , $data);        
         
  }    
	  
function insertInvTransact($data){
         
      $this->db->insert("inv_transact" , $data);
      return $this->db->insert_id();        
         
  }	  
      
      
      
   function archive($supp_po_id,$date){    
        $data = array(
                                 'archive' => 0,
                                 'date_archived' => $date
                                        );
    
                           $this->db->where('supp_po_id', $supp_po_id);
                           $this->db->update('supp_po', $data);    
      
         
       
        }     
      
      
     
      
      
function updateStock($data3, $supp_po_id){
          
  
      $arrayTable = array("raw_coffee","sticker","packaging","machine");  
         $arrayNameOfItem = array("raw_coffee","sticker","package_type","brewer");  
           $arrayTypeOfItem = array("raw_type","sticker_type", "package_size" , "brewer_type");   
                $stockColumn= array("raw_stock","sticker_stock","package_stock","mach_stocks");
  
     
    $query  = $this->db->query('SELECT supp_id FROM supp_po where supp_po_id='.$supp_po_id);
              $res = $query->row();
               
   
     $i=0;
       
$object = $data3;
//foreach($data3 as $key => $object){
      
    
$loc = 0;                                  //QUERY THE REMAINING STOCK EACH ITEM-TYPE
 for($i = 0 ; $i <= 3 ; $i++){      
   $query = $this->db->query("SELECT sum(".$stockColumn[$i].") as sumx FROM ".$arrayTable[$i]. " where ". $arrayNameOfItem[$i]." LIKE '%".$object['item']."%' and ". $arrayTypeOfItem[$i]." LIKE '%".$object['itemType']."%' and sup_id = ".$res->supp_id);     
      
     if($query->num_rows() > 0){
         $whatStock = $i; //using the I to know which Table
         $whatTable = $i; //using the I to know which Table
        
         $stockCount = $query-> row(); 
         $newStock[$loc] = $stockCount->sumx + $object['yield_weight'];
 
         $data = array($stockColumn[$whatStock] => $newStock[$loc] );  //passing the value of the new Stock
            
         $loc++; 
        }
     
     
     
     $where = array( $arrayNameOfItem[$i] =>$object['item'] , $arrayTypeOfItem[$i] =>$object['itemType'] , 'sup_id' => $res->supp_id ,''); // multiple where
     $this->db->where($where);  //used the where here
     $this->db->update($arrayTable[$i], $data);   
     
            }
                
    //     }
      
   
}
      
      
        
function updateSuppPoOrderReceived($data3, $supp_po_id){
    
          
//foreach($data3 as $key => $object){ 
$object = $data3;
  
$loc = 0;
   $query = $this->db->query("SELECT received FROM supp_po_ordered where  supp_po_ordered_id = '".$object['itemId']."' and  item = '".$object['item']."' and type = '".$object['itemType']."' and supp_po_id = ".$supp_po_id);     
      
     if($query->num_rows() > 0){
        
         $receiveCount = $query->row(); 
         
         $newReceiveCount[$loc] = $receiveCount->received + $object['received'];
 
         $data = array('received' => $newReceiveCount[$loc] );  //passing the value of the receive
            
         $loc++; 
        }
     
     
     
     $where = array( 'supp_po_ordered_id' =>$object['itemId'] );
     $this->db->where($where);  //used the where here
     $this->db->update('supp_po_ordered', $data);   
     
  
     
    //    }
                
    }
      
    
function updateOrderStatus($data3, $supp_po_id){
 

//foreach($data3 as $key => $object){ 
    $object = $data3;
 $loc = 0;
   $query = $this->db->query("SELECT * FROM supp_po_ordered where supp_po_ordered_id = '".$object['itemId']."' and supp_po_id = ".$supp_po_id." and qty = received");     
      
     if($query->num_rows() > 0){
          $toBeUpdated= $query->row(); 
         
          $updateThis[$loc] = $toBeUpdated->supp_po_ordered_id ;
 
        
          $data =array(
                'delivery_stat' => 1
                         );
         
         
         $where = array( 'supp_po_ordered_id' =>$updateThis[$loc] );
         $this->db->where($where);  //used the where here
         $this->db->update('supp_po_ordered', $data);  
         
       $loc++;   
        
        
    }
         
         
// }
     
     
    
//just for looking if there is still some orders on a certain PO left.  if none then set the PO delivery_status to 1   
//test if there is a remaining order on a PO - an item found end loop by setting it to 4 to terminate..  but if nothing found set the delivery stat of PO to 1 so it appears on Unpaid.
      
      $query = $this->db->query('SELECT * FROM supp_po_ordered  where supp_PO_id = '. $supp_po_id. ' and supp_po_ordered.delivery_stat = 0');
           if($query->num_rows() > 0){
               
               //Do nothing- it has still some orders left.
               
           }else{
               // no orders left-  update PO delivery to 1.
                            $data =array(
                                 'delivery_stat' => 1
                                        );
    
                           $this->db->where('supp_po_id', $supp_po_id);
                           $this->db->update('supp_po', $data);
          
        }
  }       
      
      
      
      
      
      
      
      
//---------------------------------FULL---------------------------------------------------------------------//
      
      
      
      
      
      
      
      function updateOrderStatusFull($data2, $supp_po_id){
        
    
     foreach($data2 as $object ){
            
            $data =array(
                'delivery_stat' => 1
                         );
             
                  $this->db->where('supp_po_ordered_id', $object['supp_po_ordered_id']);
                  $this->db->update('supp_po_ordered', $data); 
     }

    
    
    
//just for looking if there is still some orders on a certain PO left.  if none then set the PO delivery_status to 1   
//test if there is a remaining order on a PO - an item found end loop by setting it to 4 to terminate..  but if nothing found set the delivery stat of PO to 1 so it appears on Unpaid.
      
      $query = $this->db->query('SELECT * FROM supp_po_ordered  where supp_PO_id = '. $supp_po_id. ' and supp_po_ordered.delivery_stat = 0');
           if($query->num_rows() > 0){
               
               //Do nothing- it has still some orders left.
               
           }else{
               // no orders left-  update PO delivery to 1.
                            $data =array(
                                 'delivery_stat' => 1
                                        );
    
                           $this->db->where('supp_po_id', $supp_po_id);
                           $this->db->update('supp_po', $data);
          
        }
  } 
          

      
      
   function updateStockFull($data3, $supp_po_id){
          
  
      $arrayTable = array("raw_coffee","sticker","packaging","machine");  
       $arrayNameOfItem = array("raw_coffee","sticker","package_type","brewer");  
         $arrayTypeOfItem = array("raw_type","sticker_type", "package_size" , "brewer_type");   
                $stockColumn= array("raw_stock","sticker_stock","package_stock","mach_stocks");
  
     
    $query  = $this->db->query('SELECT supp_id FROM supp_po where supp_po_id='.$supp_po_id);
              $res = $query->row();
               
   
     $i=0;
       
  foreach($data3 as $key => $object){
      
    
      
$loc = 0;                                  //QUERY THE REMAINING STOCK PER OF EACH ITEM-TYPE
 for($i = 0 ; $i <= 3 ; $i++){      
   $query = $this->db->query("SELECT sum(".$stockColumn[$i].") as sumx FROM ".$arrayTable[$i]. " where ". $arrayNameOfItem[$i]." LIKE '%".$object['item']."%' and ". $arrayTypeOfItem[$i]." LIKE '%".$object['itemType']."%' and sup_id = ".$res->supp_id);     
      
     if($query->num_rows() > 0){
         $whatStock = $i; //using the I to know which Table
         $whatTable = $i; //using the I to know which Table
        
         $stockCount = $query-> row(); 
         $newStock[$loc] = $stockCount->sumx + $object['yield_weight'];
 
         $data = array($stockColumn[$whatStock] => $newStock[$loc] );  //passing the value of the new Stock
            
         $loc++; 
        }
     
     
     
     $where = array( $arrayNameOfItem[$i] =>$object['item'] , $arrayTypeOfItem[$i] =>$object['itemType'] , 'sup_id' => $res->supp_id ,''); // multiple where
     $this->db->where($where);  //used the where here
     $this->db->update($arrayTable[$i], $data);   
     
            }
                
         }
      
   
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
