<?php

class InventoryOutRawCoffee_model extends CI_Model {
    
    
    public function get_coffeeoutwalkin(){
        
        $query = $this->db->query("SELECT walkin_id, walkin_date, blend, package_type, package_size, walkin_qty FROM walkin_sales JOIN coffee_blend on walkin_sales.blend_id = coffee_blend.blend_id JOIN packaging on coffee_blend.package_id = packaging.package_id");
        return $query->result();
    }
     public function get_coffeeoutcontracted(){
        
        $query = $this->db->query("SELECT client_dr, client_deliverDate, client_company, blend, package_type, package_size, contractPO_qty, sticker, client_receive FROM contracted_po JOIN client_delivery on contracted_po.contractPO_id = client_delivery.contractPO_id JOIN contracted_client on client_delivery.client_id = contracted_client.client_id JOIN coffee_blend on contracted_po.blend_id = coffee_blend.blend_id JOIN packaging on coffee_blend.package_id = packaging.package_id join sticker on coffee_blend.sticker_id = sticker.sticker_id where delivery_stat='delivered'");
        return $query->result();
    }
    public function get_machineout(){
        
        $query = $this->db->query('Select * from machine_out NATURAL JOIN contracted_client NATURAL JOIN machine');
        return $query->result();
    }
    
}

?>