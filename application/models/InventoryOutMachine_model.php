<?php

class InventoryOutMachine_model extends CI_Model {
    
    function get_machineout(){
        
        $query = $this->db->query('Select * from machine_out NATURAL JOIN contracted_client');
        return $query->result();
    }
    
}

?>