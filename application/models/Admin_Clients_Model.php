<?php

class Admin_Clients_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT client_id, client_company, client_fname, client_lname, CONCAT(client_fname, ' ', client_lname) AS contact_personnel, client_position, client_email, client_address, client_contact, client_type,client_activation FROM contracted_client");
		return $query;
	}

	function update($id, $comp_name, $cli_type, $l_name, $f_name, $address, $email, $cell_no){
		$data = array(
	        'client_company' => $comp_name,
	        'client_type' => $cli_type,
	        'client_lname' => $l_name,
	        'client_fname' => $f_name,
	        'client_address' => $address,
	        'client_email' => $email,
	        'client_contact' => $cell_no	        
		);

		$this->db->where('client_id', $id);
		$this->db->update('contracted_client', $data);
	}
    
    function activation($id){
		$this->db->query("UPDATE contracted_client SET client_activation = IF(client_activation=1, 0, 1) WHERE client_id = ".$id."");
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