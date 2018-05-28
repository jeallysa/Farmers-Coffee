<?php

class UserProfile_model extends CI_model
{
	function __construct()
	{ 
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}
	function getUserid($username){
        $query = $this->db->query("SELECT user_no from jhcs.user where username = '".$username."';");
        foreach ($query ->result() as $row) {
        	return $row->user_no;
        }
	}
	function getLname(){
		$query=$this->db->query("SELECT u_lname FROM user");
		return $query->result();
	}

	function getfname(){
		$query=$this->db->query("SELECT u_fname FROM user");
		return $query->result();
	}

	function getProfile($username){
		$query=$this->db->query("SELECT u_lname, u_fname, u_email, u_contact, u_address FROM user  where username = '".$username."';");
		return $query->result();
	}

	function updateProfile($userid, $l_name, $f_name, $email, $contact, $address){
		$data = array(
			'u_lname' => $l_name,
			'u_fname' => $f_name,
			'u_email' => $email,
			'u_contact' => $contact,
			'u_address' => $address,
		);
		return $this->db->where('user_no', $userid)
		->update('user', $data);
	}


}