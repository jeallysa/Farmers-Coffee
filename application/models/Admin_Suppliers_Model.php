<?php

class Admin_Suppliers_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT sup_id, sup_company, sup_fname, sup_lname, CONCAT(sup_fname, ' ', sup_lname) AS contact_personnel, sup_position, sup_address, sup_email, sup_contact,  sup_activation, date_reg FROM supplier");
		return $query;
	}

	function update($id, $sup_company, $sup_address, $sup_email, $sup_contact, $sup_position, $sup_fname, $sup_lname, $date_reg){
		$data = array(

			'sup_company' => $sup_company,
	        'sup_address' => $sup_address,
	        'sup_email' => $sup_email,
	        'sup_contact' => $sup_contact,
	        'sup_position' => $sup_position,
	        'sup_fname' => $sup_fname,
	        'sup_lname' => $sup_lname,
	        'date_reg' => $date_reg

		);

		$this->db->where('sup_id', $id);
		$this->db->update('supplier', $data);
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
		$this->db->query("UPDATE supplier SET sup_activation = IF(sup_activation=1, 0, 1) WHERE sup_id = ".$id."");
	}

}