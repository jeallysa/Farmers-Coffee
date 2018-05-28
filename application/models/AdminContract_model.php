<?php

class AdminContract_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data($id){
		$query = $this->db->query("SELECT 
    a.client_company,
    b.contract_id,
    b.date_started,
    b.date_expiration,
    c.blend,
    d.package_type,
    d.package_size,
    b.required_qty,
    e.brewer,
    f.mach_qty,
    f.mach_serial
FROM
    contract b
        LEFT JOIN
    contracted_client a ON b.client_id = a.client_id
        LEFT JOIN
    coffee_blend c ON b.blend_id = c.blend_id
        LEFT JOIN
    machine e ON b.mach_id = e.mach_id
        LEFT JOIN
    machine_out f ON b.mach_salesID = f.mach_salesID
WHERE
    a.client_id = '".$id."';");
		return $query;
	}

/*	function update($id, $date_started, $date_expiration, $contract_term, $contract_blend, $contract_size, $contract_bqty, $contract_machine, $contract_mqty, $contract_serial){
		$data = array(
	        'date_started' => $date_started,
	        'date_expiration' => $date_expiration,
	        'credit_term' => $contract_term,
	        'blend_id' => $contract_blend,
	        'package_id' => $contract_size,
	        'required_qty' => $contract_bqty,
	        'mach_id' => $contract_machine,
	        'mach_qty' => $contract_mqty,
	        'mach_serial' => $contract_serial

		);

		$this->db->where('contract_id', $id);
		$this->db->update('contract', $data);
	} */
}
?>