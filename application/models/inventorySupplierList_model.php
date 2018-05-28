<?php 
  class inventorySupplierList_model extends CI_model {
  
  
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
  
  
  function retrieveSupplier(){
 $query = $this->db->query('SELECT supplier.sup_id as supp_id,  sup_company, raw_coffee, concat(sup_fname," ",sup_lname) as "contact_personnel", sup_position, sup_contact , sup_email FROM supplier join raw_coffee on raw_id = sup_productID');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
  }
  
  
  
  
  
  


?>
