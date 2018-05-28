<?php 

class AdminMachines_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getMachines(){
		$query=$this->db->query("SELECT sup_id, mach_id, brewer, brewer_type, unitPrice, mach_reorder, sup_company, mach_stocks, mach_activation FROM machine NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('machine', $data);
	}

	function update($id, $brewer, $type, $price, $reorder, $stock_level, $sup_id){
		$data = array(
	        'brewer' => $brewer,
	        'brewer_type' => $type,
	        'unitPrice' => $price,
	        'mach_reorder' => $reorder,
	        'mach_stocks' => $stock_level,
	        'sup_id' => $sup_id	        
		);

		$this->db->where('mach_id', $id);
		$this->db->update('machine', $data);
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
		$this->db->query("UPDATE machine SET mach_activation = IF(mach_activation=1, 0, 1) WHERE mach_id = ".$id."");
	}
}
?>