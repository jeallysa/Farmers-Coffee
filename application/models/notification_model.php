<?php 
  class notification_model extends CI_model {
  
  
  function _construct(){
   
     parent::_construnct();
  }
  
      
      
function reorder(){
    
    $arrayTable = array('raw_coffee','packaging','sticker','machine');
    
    $arrayName = array('raw_coffee','package_type','sticker','brewer');
    
    $arrayType = array('raw_type','package_size','sticker_type','brewer_type');
  
    $arrayStock = array('raw_stock','package_stock','sticker_stock','mach_stocks');
    
    $arrayreorder = array('raw_reorder','package_reorder','sticker_reorder','mach_reorder');

    $arrayItemAct = array('raw_activation','pack_activation','sticker_activation','mach_activation');


    
for($i = 0 ; $i <= 3 ; $i++){    
    
    $query = $this->db->query("select ".$arrayName[$i]." as name, ".$arrayType[$i]." as type ,sup_company as supplier, ".$arrayStock[$i]." as stock, ".$arrayreorder[$i]." as reorder ,category from ".$arrayTable[$i]." join supplier using(sup_id) where sup_activation = 1 and ".$arrayStock[$i]." <= ".$arrayreorder[$i]. " and ".$arrayItemAct[$i]." = 1" );
    
    if($query->num_rows() > 0){
          $result[$i] =  $query->result();
      }else
           $result[$i] =  NULL; 
    
  } return $result;
    
}
      
      
      
      
}
 
?>
