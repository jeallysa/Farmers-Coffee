<?php

class Admin_Blends_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	} 

	function fetch_data_eb(){
		$qcount = $this->db->query('SELECT * FROM raw_coffee');
		$query_append = "SELECT c.blend_id AS main_id, c.blend_type AS type, c.blend AS blend, c.blend_activation,";

		foreach ($qcount->result() as $row){
			$query_append .= " SUM(CASE
							        WHEN b.raw_id = '". $row->raw_id ."' THEN b.percentage
							        ELSE NULL
							    END) AS per".$row->raw_id.",";
		}
		$query_append .= " d.package_size, d.package_type, c.package_id, c.sticker_id AS sticker, c.blend_price, c.blend_qty FROM raw_coffee a JOIN proportions b JOIN coffee_blend c JOIN packaging d ON a.raw_id = b.raw_id AND b.blend_id = c.blend_id AND c.package_id = d.package_id WHERE c.blend_type = 'Existing' AND a.raw_activation = 1 GROUP BY c.blend_id;";





		$query = $this->db->query($query_append);
		return $query;

	}

	function edit_page($id){
		$qcount = $this->db->query('SELECT * FROM raw_coffee');
		$query_append = "SELECT c.blend_id AS main_id, c.blend_type AS type, c.blend AS blend, c.package_id AS package_id, c.sticker_id AS sticker, ";

		foreach($qcount->result() as $row){
			$query_append .= " SUM(CASE
							        WHEN b.raw_id = '". $row->raw_id ."' THEN b.percentage
							        ELSE NULL
							    END) AS per".$row->raw_id.",";
		}
		$query_append .= " d.package_size, d.package_type, c.blend_price, c.blend_qty FROM raw_coffee a JOIN proportions b JOIN coffee_blend c JOIN packaging d ON a.raw_id = b.raw_id AND b.blend_id = c.blend_id AND c.package_id = d.package_id WHERE c.blend_id='".$id."' AND a.raw_activation = 1 GROUP BY c.blend_id;";


		$query = $this->db->query($query_append);
		return $query;

	}

	function edit_pageClient($id){
		$qcount = $this->db->query('SELECT * FROM raw_coffee');
		$query_append = "SELECT a.blend_id AS main_id, a.client_id, b.client_company, c.sticker_id AS sticker, c.blend AS blend, a.package_id, d.package_type, d.package_size, c.blend_price, ";

		foreach($qcount->result() as $row){
			$query_append .= " SUM(CASE
							        WHEN f.raw_id = '". $row->raw_id ."' THEN e.percentage
							        ELSE NULL
							    END) AS per".$row->raw_id.",";
		}
		$query_append .= " FROM contract a JOIN contracted_client b ON a.client_id =  b.client_id LEFT JOIN coffee_blend c ON a.blend_id = c.blend_id LEFT JOIN packaging d ON c.package_id = d.package_id JOIN proportions e ON c.blend_id = e.blend_id JOIN raw_coffee f ON e.raw_id = f.raw_id GROUP BY a.blend_id, a.client_id, a.package_id;";


		$query = $this->db->query($query_append);
		return $query;

	}

	
	function fetch_data_cb(){
		$qcount = $this->db->query('SELECT * FROM raw_coffee');
		$query_append = "SELECT c.blend_id AS main_id, c.blend_type AS type, c.blend AS blend, c.blend_activation,";

		foreach ($qcount->result() as $row){
			$query_append .= " SUM(CASE
							        WHEN b.raw_id = '". $row->raw_id ."' THEN b.percentage
							        ELSE NULL
							    END) AS per".$row->raw_id.",";
		}
		$query_append .= " d.package_size AS size, d.package_type AS package, c.package_id, c.sticker_id AS sticker, c.blend_price, c.blend_qty FROM raw_coffee a JOIN proportions b JOIN coffee_blend c JOIN packaging d ON a.raw_id = b.raw_id AND b.blend_id = c.blend_id AND c.package_id = d.package_id WHERE c.blend_type = 'Client' AND a.raw_activation = 1 GROUP BY c.blend_id";

		$query = $this->db->query($query_append);
		return $query;

	}

	function activation($id){
		$this->db->query("UPDATE coffee_blend SET blend_activation = IF(blend_activation=1, 0, 1) WHERE blend_id = ".$id."");
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
