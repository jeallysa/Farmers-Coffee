<?php 

class AdminProductInventory_model extends CI_MODEL
{
	
	function __construct() 
	{
		parent::__construct();
	}
    
    public function security(){
        $username = $this->session->sess_destroy('username');
        if (!empty($username)) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }

	function getProducts(){
		$query=$this->db->query("SELECT sup_id, sup_company, raw_id, raw_coffee, raw_type, raw_reorder, sup_company, raw_stock, unitPrice, raw_activation FROM raw_coffee NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('raw_coffee', $data);
	}

	function update($id, $name, $raw_type, $reorder, $stocks, $price, $sup_id){
		$data = array(
	        'raw_coffee' => $name,
	        'raw_type' => $raw_type,
	        'raw_reorder' => $reorder,
	        'raw_stock' => $stocks,
	        'unitPrice' => $price,
	        'sup_id' => $sup_id
		);

		$this->db->where('raw_id', $id);
		$this->db->update('raw_coffee', $data);
	}

	function activation($id){
		$this->db->query("UPDATE raw_coffee SET raw_activation = IF(raw_activation=1, 0, 1) WHERE raw_id = ".$id."");
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


}
?>