<?php

class SalesDashboard_model extends CI_model
{
	function __construct()
	{ 
		parent::__construct();
	}


	function getSales(){
		$query = $this->db->query("SELECT SUM(client_balance) FROM client_delivery ");
		return $query->result();
	}
	function getCollections(){
		$query = $this->db->query("SELECT * FROM client_delivery WHERE payment_remarks='paid'");
		return $query->result();
	}
	function getReceivables(){
		$query = $this->db->query("SELECT * FROM client_delivery WHERE payment_remarks='unpaid'");
		return $query->result();
	}
	
	function getContracted(){
		$query = $this->db->query("SELECT * FROM contracted_client WHERE client_activation='1'");
		return $query->result();
	}
	function UpdateSeen($id, $unseen){
		
		$data = array(
			'seen' => $unseen
		);
		$this->db->where('client_id', $id);
		$this->db->update('contract', $data);
	}
	function mayNotif($id, $meron){
		$data = array(
			'seen' => $meron
		);
		$this->db->where('client_id', $id);
		$this->db->update('contract', $data);
	}
	

}
