<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddSupplier_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function add_data($supplier, $address, $cpfname, $cplname, $position, $email, $tel_number, $date_reg){
		$data = array(
			'sup_company' => $supplier,
			'sup_address' => $address,
			'sup_fname' => $cpfname,
			'sup_lname' => $cplname,
			'sup_position' => $position,
			'sup_email' => $email,
			'sup_contact' => $tel_number,
			'date_reg' => $date_reg
		);
		
		$this->db->insert('supplier', $data);
		
		
		echo "<script>alert('You have inserted a new supplier!');
		window.location.href='" . base_url() . "adminSupplier';
		</script>";
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