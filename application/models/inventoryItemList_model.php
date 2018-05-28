<?php 
  class inventoryItemList_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  

  
  
  function retrieveItems(){
      
       $arrayItem = array("raw_coffee","sticker","packaging","machine");
      
//  $i = 0;    
 $result = array("");
      
   for($i = 0 ; $i<=3 ; $i++){    
      $query = $this->db->query('SELECT * from '.$arrayItem[$i].' join supplier on '.$arrayItem[$i].'.sup_id = supplier.sup_id');
            
      if($query->num_rows() > 0){
              $result[$i] = $query->result();
               // return  $query->result();
          
      }else
               $result[$i] = null;
                 // return null;
      
  }return $result;
      
}
      
      
      
      
      
      
      
      
      
  }

?>
