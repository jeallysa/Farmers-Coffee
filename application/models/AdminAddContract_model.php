<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminAddContract_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}
    
    function getBlend(){
		$query = $this->db->query("SELECT blend_id, blend FROM coffee_blend");
		return $query->result();	
	}
     function getMachine(){
		$query = $this->db->query("SELECT mach_id, brewer FROM jhcs.machine;");
		return $query->result();	
	}	
    
     function getName(){
		$query = $this->db->query("SELECT client_id, client_company FROM jhcs.contracted_client;");
		return $query->result();	
	}

	 function insert_data($data){ 
	 	$this->db->insert('contract', $data);
		
         
         echo "<script>alert('You have inserted a new contract!');
		window.location.href='" . base_url() . "adminClients';
		</script>";
	}
	/**
	 function insert_data($data){ 
		$this->db->insert('contract', $data);

         
         echo "<script>alert('You have inserted a new contract!');
		window.location.href='" . base_url() . "adminClients';
		</script>";
	}
	*/
}