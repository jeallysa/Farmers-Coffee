<?php

class Changepassword_Model extends CI_model
{
	function __construct()
	{ 
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}
	function getUserid($username){
        $query = $this->db->query("SELECT user_no from jhcs.user where username ='".$username."';");
        foreach ($query ->result() as $row) {
        	return $query->row()->user_no;
        }
	}

	function getUsers($username){
		$query = $this->db->query("SELECT * FROM user WHERE username = '".$username."'");
		return $query;
	}

	function getCurrPassword($userid){
		$query = $this->db->where(['user_no' => $userid])
							->get('user');
		if ($query->num_rows() < 2) {
			return $query->row();
		} 
	}

	function updateUsername($u_name, $userid){
		$data = array(
			'username' => $u_name
		);
		return $this->db->where('user_no', $userid)
		->update('user', $data);
	}

	function updatePassword($new_password, $userid ){
		$data = array(
			'password' => $new_password
		);
		return $this->db->where('user_no', $userid)
		->update('user', $data);
	}

}