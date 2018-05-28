<?php 

/**
* 
*/
class Collections_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getCollections(){
		$query=$this->db->query("SELECT * FROM payment_contracted JOIN client_delivery ON payment_contracted.client_deliveryID = client_delivery.client_deliveryID NATURAL join contracted_po NATURAL JOIN contracted_client");
		return $query->result();
	}
}




 ?>