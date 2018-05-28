<?php 

class AdminPackaging_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getPackaging(){
		$query=$this->db->query("SELECT supplier.sup_id, package_id, package_type, package_size, unitPrice, package_reorder, package_stock, sup_company, pack_activation FROM packaging JOIN supplier ON supplier.sup_id = packaging.package_id");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('packaging', $data);
	}
 
    function update($id, $type, $size, $unitprice, $reorder, $stocks, $sup_id){
		$data = array(
            'package_type' => $type,
            'package_size' => $size,
            'unitPrice' => $unitprice,
	        'package_reorder' => $reorder,
	        'package_stock' => $stocks,
	        'sup_id' => $sup_id,
		);

		$this->db->where('package_id', $id);
		$this->db->update('packaging', $data);
	}

	function activity_logs($module, $activity){
		$username = $this->session->userdata('username');
        $query = $this->db->query("SELECT user_no from jhcs.user where username ='".$username."';");
        foreach ($query ->result() as $row) {
        	$id = $row->user_no;
        }

        $data = array(
            'user_no' => $id,
            'timestamp' => date('Y\-m\-d\ H:i:s A'),
            'message' => $activity,
            'type' => $module
        );
        $this->db->insert('activitylogs', $data);
    }
    
    function activation($id){
		$this->db->query("UPDATE packaging SET pack_activation = IF(pack_activation=1, 0, 1) WHERE package_id = ".$id."");
	}
}
?>