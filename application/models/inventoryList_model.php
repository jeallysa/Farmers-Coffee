<?php 
  class inventoryList_model extends CI_model {
  
  
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
  
  
  function retrieveCategory(){
      
     $query = $this->db->query('Select * from category');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
  }
  
  
  
  
  
  


?>
