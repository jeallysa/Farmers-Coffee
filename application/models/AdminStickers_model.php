<?php 

class AdminStickers_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}
	 

	function getStickers(){
		$query=$this->db->query("SELECT sup_id, sticker_id, sticker, sticker_reorder, unitPrice, sup_company, sticker_stock, sticker_type, sticker_activation FROM sticker NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('sticker', $data);
	}

    function update($id, $name, $sticker_type, $reorder, $stocks, $unitprice, $sup_id){
		$data = array(
	        'sticker' => $name,
	        'sticker_type' => $sticker_type,
	        'sticker_reorder' => $reorder,
	        'sticker_stock' => $stocks,
	        'unitPrice' => $unitprice,
	        'sup_id' => $sup_id
		);

		$this->db->where('sticker_id', $id);
		$this->db->update('sticker', $data);
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
		$this->db->query("UPDATE sticker SET sticker_activation = IF(sticker_activation=1, 0, 1) WHERE sticker_id = ".$id."");
	}
}
?>