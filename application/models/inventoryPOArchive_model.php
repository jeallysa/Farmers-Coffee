<?php 
  class inventoryPOArchive_model extends CI_model {
  
  
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
  
  
  function retrieveArchive(){
      $query = $this->db->query('SELECT * FROM supp_po join supplier on supp_id = sup_id where delivery_stat = 0 and payment_stat = 0 and archive = 0 and delete_archive = 0');
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }
      
      
  
   function archive($supp_po_id){    
        $data = array(
                                 'archive' => 1
                                        );
    
                           $this->db->where('supp_po_id', $supp_po_id);
                           $this->db->update('supp_po', $data);    
      
         
       
        }  
      
      
      
      function delete($supp_po_id){    
        $data = array(
                                 'delete_archive' => 1
                                        );
    
                           $this->db->where('supp_po_id', $supp_po_id);
                           $this->db->update('supp_po', $data);    
      
         
       
        }   
      
      
      
  }
?>
