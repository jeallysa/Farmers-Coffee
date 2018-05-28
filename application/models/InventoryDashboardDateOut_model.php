<?php

class InventoryDashboardDateOut_model extends CI_Model {
    
    function get_rawcoffeestock(){
        
        $query = $this->db->query('Select SUM(raw_stock) as "rawstock" from raw_coffee');
        return $query->result();
    }
    function get_packagingstock(){
        
        $query = $this->db->query('SELECT SUM(package_stock) as "packstock" FROM packaging');
        return $query->result();
    }
    function get_stickerstock(){
        
        $query = $this->db->query('SELECT SUM(sticker_stock) as "stickerstock" FROM sticker');
        return $query->result();
    }
    function get_machinestock(){
        
        $query = $this->db->query('SELECT SUM(mach_stocks) as "machinestock" FROM machine');
        return $query->result();
    }
    
}

?>