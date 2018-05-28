<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddClient_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function add_data($client, $address, $cpfname, $cplname, $position, $email, $tel_number, $cli_type){
		$data = array(
			'client_company' => $client,
			'client_address' => $address,
			'client_fname' => $cpfname,
			'client_lname' => $cplname,
			'client_position' => $position,
			'client_email' => $email,
			'client_contact' => $tel_number,
			'client_type' => $cli_type,
			'client_activation' => '1'

		);
		
		$this->db->insert('contracted_client', $data);
		
		
		echo "<script>alert('You have inserted a new client!');
		window.location.href='" . base_url() . "adminClients';
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