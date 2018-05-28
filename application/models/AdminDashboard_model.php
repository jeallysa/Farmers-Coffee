<?php 

class AdminDashboard_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getSales(){
		$query=$this->db->query("SELECT client_dr, client_invoice, client_deliverDate, client_company, blend, package_type, package_size, blend_price, contractPO_qty, client_balance, client_type FROM client_delivery NATURAL JOIN contracted_po NATURAL JOIN contracted_client NATURAL JOIN coffee_blend NATURAL JOIN packaging");
		return $query->result();
	}
    
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
	function UpdateExpire($id, $unseen){
		
		$data = array(
			'seen_admin' => $meron
		);
		$this->db->where('client_id', $id);
		$this->db->update('contract', $data);
	}
	function UpdateSeen($id, $unseen){
		$data = array(
			'seen_admin' => $unseen
		);
		$this->db->where('client_id', $id);
		$this->db->update('contract', $data);
	}


    
}

?>