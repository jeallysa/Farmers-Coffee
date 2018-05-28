<?php

class InventoryInventoryReportOut_model extends CI_Model {
    
    function get_inventoryout(){
		$count = $this->db->count_all_results('raw_coffee');
		$query_append = "SELECT a.* FROM
							(SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.dr_client as dr_no";

		for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffout".$i."";
		}
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id GROUP BY c.trans_id) a WHERE type = 'OUT' and month(transact_date)=month(now()) GROUP BY a.main_id ;";

		$query = $this->db->query($query_append);
		return $query;

	}
    public function get_machineout(){
        
        $query = $this->db->query("Select * from machine_out NATURAL JOIN contracted_client NATURAL JOIN machine");
        return $query->result();
    }
    
}

?>