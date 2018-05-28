<?php

class Sales_model extends CI_MODEL
{

	function __construct()
	{
		parent::__construct();
	}

	Public function getSales(){
		$query=$this->db->query("SELECT *, client_delivery.client_dr, client_delivery.payment_remarks, client_delivery.client_deliveryID FROM contracted_po JOIN client_delivery ON contracted_po.contractPO_id = client_delivery.contractPO_id JOIN contracted_client ON client_delivery.client_id = contracted_client.client_id JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id  JOIN packaging ON coffee_blend.package_id = packaging.package_id");
		return $query->result();
	}

	Public function getSoldCoffee(){
		$query=$this->db->query("SELECT * FROM walkin_sales a JOIN coffee_blend b ON a.blend_id = b.blend_id JOIN packaging c ON b.package_id = c.package_id LEFT OUTER JOIN client_coffreturn ON client_coffreturn.client_deliveryID = a.walkin_id");
		return $query->result();
	}

		Public function getSoldMachine(){
		$query2=$this->db->query("SELECT *, machine.mach_id, machine_out.mach_serial, contracted_client.client_id FROM machine_out NATURAL JOIN contracted_client NATURAL JOIN machine WHERE status = 'sold'");
		return $query2->result();
	}

}

?>
