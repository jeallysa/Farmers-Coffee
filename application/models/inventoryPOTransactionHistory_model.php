<?php 
  class inventoryPOTransactionHistory_model extends CI_model {
  
  
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
  
  
  function retrieveTransactions(){
      $query = $this->db->query('SELECT * FROM supp_po join supplier on supp_id = sup_id where delivery_stat = 1 and payment_stat = 1');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
  }
  
  
  
  
  
  


?>
