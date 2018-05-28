<?php 
  class inventoryPOAdd_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
      
  public function querySelectedType($item_name, $sup_id){
    $arrayTable = array("raw_coffee","sticker","packaging","machine");
    $arrayOn = array("raw_coffee","sticker","package_type","brewer");
    $arrayType = array("raw_type","sticker_type","package_size","brewer_type");

    for($table = 0 ; $table <= 3 ; $table++){          
      $retrieveDetails ="SELECT ".$arrayType[$table]." as type , category FROM ".$arrayTable[$table]." where ".$arrayOn[$table]." = '".$item_name."' AND sup_id =".$sup_id; 
      $query = $this->db->query($retrieveDetails);
      if ($query->num_rows() > 0) {
        return $query->result();                   
      }
    }
  }   
      
  public function querySelectedAmount($item_name, $sup_id , $item_type){
    $arrayTable = array("raw_coffee","sticker","packaging","machine");
    $arrayOn = array("raw_coffee","sticker","package_type","brewer");
    $arrayType = array("raw_type","sticker_type","package_size","brewer_type");

    for($table = 0 ; $table <= 3 ; $table++){            
      $retrieveDetails ="SELECT unitPrice , category FROM ".$arrayTable[$table]." where ".$arrayOn[$table] ." = '".$item_name."' and ".$arrayType[$table] ." = '".$item_type."' AND sup_id =".$sup_id; 
      $query = $this->db->query($retrieveDetails);
      if ($query->num_rows() > 0) {
        return $query->row();      // im expecting only 1 row
      }
    }
  } 
   
      
      public function checkReorder($item_name , $item_type , $qty , $sup_id){
        $currentStock = 0;
          
             $arrayTable = array("raw_coffee","sticker","packaging","machine");
             $arrayOn = array("raw_coffee","sticker","package_type","brewer");
             $arrayType = array("raw_type","sticker_type","package_size","brewer_type");
          
            $arrayStock   = array("raw_stock"  ,"sticker_stock"  ,"package_stock"  ,"mach_stocks");
            $arrayReorder = array("raw_reorder","sticker_reorder","package_reorder","mach_reorder");
            
          
          
        for($i = 0 ; $i < 4 ; $i++){
                          
        $retrieveDetails ="SELECT ".$arrayStock[$i]." as stock, ".$arrayReorder[$i]." as reorder FROM ".$arrayTable[$i]." where ".$arrayOn[$i] ." = '".$item_name."' and ".$arrayType[$i] ." = '".$item_type."' AND sup_id =".$sup_id; 
             $query = $this->db->query($retrieveDetails); 
                      
                   if ($query->num_rows() > 0) {
            $thisOne =  1;
                       $result=$query->row();
                       
                       $x = $result->stock;
                       $y = $result->reorder;
                       $total = $x + $qty;
                       
                       if($total <= $y){
                           $status = "0";
                           $arrayStocks = array("stocks" => $x,
                                                "reorder" => $y,
                                                "status" => $status);
                           
                          // return $thisOne;      // im expecting only 1 row
                           return $arrayStocks;
                       }else{
                           $status = "1";
                           $arrayStocks = array("stocks" =>$x,
                                                "reorder" =>$y,
                                                "status" => $status);
                           
                          // return $thisOne;      // im expecting only 1 row
                           return $arrayStocks;
                     
                       }
        
                    }
                   
               }
         }  
      
      
      
      
     public function checkIfExisting($item_name , $item_type){
        $currentStock = 0;
         $username = $this->session->userdata('username');  
       
          
        for($i = 0 ; $i < 4 ; $i++){
                          
        $retrieveDetails ="select * from supp_temp_po_order where item_name ='".$item_name."' and type ='".$item_type."' and username ='".$username."'"; 
             $query = $this->db->query($retrieveDetails); 
                      
               if ($query->num_rows() > 0) {
                           $status = "0";
                           
                       return $status;
                   
                  }else{
                           $status = "1";
                           
                      return $status;
                     
                  }
        
                    
         }
 } 
      
      
      
      
      
      
      
      
      public function removeOrder($item){
          $this->db->where('idsupp_temp_po_order', $item);
          $this->db->delete('supp_temp_po_order');
      }
      
      
      
    
  function displayOrderedTemp(){
       $username = $this->session->userdata('username');
    $query = $this->db->query('SELECT * FROM supp_temp_po_order where username="'.$username.'" order by idsupp_temp_po_order desc');      
    if($query->num_rows() > 0){
      return $query-> result();
    }else{
      return NULL;
    }
  }  
          
  function sumOfTemp(){
    $query = $this->db->query(' SELECT  sum(qty) as tQty , sum(amount) as subTotal FROM supp_temp_po_order ');      
    if($query->num_rows() > 0){
      return $query-> result();
    }else{
      return NULL;
    }
  }     
            
      
  function sumTotal(){
    $username = $this->session->userdata('username');
    $query1 = $this->db->query('SELECT trucking_fee FROM supp_temp_po where username = "'.$username.'"'); 
    $query2 = $this->db->query('SELECT sum(amount) as amount FROM supp_temp_po_order where username = "'.$username.'"'); 
      if($query1->num_rows() > 0){
      $trucking = $query1->row();
      $amount   =$query2->row();
      
      $tfee  =  $trucking->trucking_fee;
      $amount = $amount->amount;
      
      $total = $tfee + $amount;
      
          return $total;    //passing this value to the view.
      }else{
          
      return null;
        
    }
  }
      
  function checkIfTempIsEmpty(){
      
    $username = $this->session->userdata('username');
      
    $query = $this->db->query('select *  from supp_temp_po left join supplier on supp_name = sup_company where username = "'.$username.'"');      
    if($query->num_rows() > 0){
        
        
      return $query->row();
    }else{
      return NULL;
    }
  }
      
      
      
      
      
      
  //function emptyTemp($dataInsert){                
 //   $this->db->empty_table("supp_temp_po"); 
//  }   
      
      
   //function cancelPO(){
    //$this->db->empty_table("supp_temp_po"); 
    //$this->db->empty_table("supp_temp_po_order"); 
  //}     
      
      
function delete_temp_po($username){
$this->db->where('username', $username);
$this->db->delete('supp_temp_po');   
   }
      
      
      
      
      
  function insertChosenSupplier($dataInsert){
      $this->db->insert("supp_temp_po" , $dataInsert);
  }
      
  function insertTempOrder($dataInsert){ 
    $this->db->insert("supp_temp_po_order" , $dataInsert);     
  }     
      
  function insertOrder($data){   
      $username = $this->session->userdata('username');
      
      
       $this->db->insert_batch("supp_po_ordered" , $data);
       
      
      $this->db->where('username', $username);
      $this->db->delete('supp_temp_po');
      
      
     $this->db->where('username', $username);
     $this->db->delete('supp_temp_po_order');
      
    //$this->db->empty_table("supp_temp_po"); 
    //$this->db->empty_table("supp_temp_po_order");
  }  
    
 
      
   public function resetOrder($item){
   $username = $this->session->userdata('username');
                                    
   $this->db->where('username', $username);
   $this->db->delete('supp_temp_po_order');   
 }

  function retrieveSuppliers(){
      
    $query = $this->db->query('SELECT * from supplier where sup_activation = 1 order by sup_company  asc');
          
    if($query->num_rows() > 0){
        return $query-> result();
    }else
        return NULL;
  }

  function retrieveItems(){
       $username = $this->session->userdata('username');
    $result = array("");
    for($i=0 ; $i <= 3 ; $i++){
      $array = array("raw_coffee","sticker","packaging","machine");
      $arrayName = array("raw_coffee","sticker","package_type","brewer"); 
      $arrayActivation = array("raw_activation","sticker_activation","pack_activation","mach_activation");
       
      $query = $this->db->query('SELECT distinct '. $arrayName[$i] .' , category from '. $array[$i] .' join supplier using(sup_id) join supp_temp_po on sup_company = supp_name where '. $arrayActivation[$i].' = 1  and username ="'.$username . '"order by 1 asc');      
      
      if($query->num_rows() > 0){
         $result[$i] =  $query->result();  
      }else {                                  
          $result[$i] =  NULL;           //for example index 1 doesnt exist it will just null. so that it is easier to map in the view POAdd. because index 1 returns null.
      } 
    } return $result;   
  }
      
  function retrieveTruckingFee(){
      $username = $this->session->userdata('username');
      
      $query = $this->db->query('SELECT * from supp_temp_po where username = "'.$username.'"');      
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
      
  function retrieveTemp(){
   // I think this should be moofied with Supplier is deactivated/
    $username = $this->session->userdata('username');
      
    $query = $this->db->query('select * from supp_temp_po join supplier on supp_name = sup_company where username = "'.$username.'"');      
    if($query->num_rows() > 0){
        return $query-> result();
    }else
        return NULL;
  }
      
      
      
      
  function insertPO($datax){
     $this->db->insert_batch("supp_po" , $datax);
  }   
      
   
      
  function RetrieveLastPO(){
      
    $query = $this->db->query("SELECT distinct  supp_po_id from supp_po order by 1 desc limit  1");
    if($query->num_rows() > 0){
        return $query->result();
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
