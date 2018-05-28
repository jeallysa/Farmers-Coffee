<?php

class InventoryActivityLogs_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT timestamp, CONCAT(u_fname,' ', u_lname) AS name, message 
			FROM `jhcs`.`activitylogs` INNER JOIN jhcs.user ON activitylogs.user_no=user.user_no;");
		return $query;
	}

}
