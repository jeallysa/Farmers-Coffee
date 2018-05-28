<?php

class Admin_SalesReport_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT *, client_delivery.client_dr, client_delivery.payment_remarks, client_delivery.client_deliveryID FROM contracted_po JOIN client_delivery ON contracted_po.contractPO_id = client_delivery.contractPO_id JOIN contracted_client ON client_delivery.client_id = contracted_client.client_id JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id  JOIN packaging ON coffee_blend.package_id = packaging.package_id");
		return $query;

	}

}