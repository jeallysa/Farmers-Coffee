<?php

class InventoryOutPackaging_model extends CI_Model {
    
    function get_packageout(){
        
        $query = $this->db->query('SELECT * FROM client_delivery NATURAL JOIN contracted_client;');
        return $query->result();
    }
    
}

?>