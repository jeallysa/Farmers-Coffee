<?php 

class Receivable_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getReceivable(){
		$query=$this->db->query("SELECT * from client_delivery NATURAL JOIN contracted_client WHERE payment_remarks = 'unpaid' OR payment_remarks = 'partially paid'");
		return $query->result();
	}
}

?>