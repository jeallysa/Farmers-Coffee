<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddAccounts_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){ 
		echo "Sample function";
	}

	function add_data($u_lname, $u_fname, $u_type, $u_address, $u_email, $u_contact, $username){
		$data = array(
			'u_lname' => $u_lname,
			'u_fname' => $u_fname,
            'u_type' => $u_type,
			'u_address' => $u_address,
            'u_email' => $u_email,
			'u_contact' => $u_contact,
            'username' => $username
		);
		
		$this->db->insert('user', $data);
		
		
		echo "<script>alert('You have inserted a new user!');
		window.location.href='" . base_url() . "adminAccounts';
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
?>