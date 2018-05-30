<?php

class InventoryMachines_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function retrieveMachine(){
      $query = $this->db->query("SELECT * FROM jhcs.machine NATURAL JOIN supplier WHERE mach_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }


      function update($data, $mach_idv){
              
    $this->db->where('mach_id', $mach_idv ); 
    $this->db->update('machine', $data);    
   
        
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

  function machine_out($status, $id){
        
        $this->db->query("UPDATE machine_out INNER JOIN machine ON machine_out.mach_id = machine.mach_id SET machine_out.mach_stat ='".$status."' WHERE machine.mach_id ='".$id."'");
  }  
  function client_machreturn($status, $id){
       
        $this->db->query("UPDATE client_machreturn SET client_machreturn.mach_stat ='".$status."' WHERE client_machreturn.mach_id ='".$id."'");
  }
  function company_returns($status, $id){
        
        $this->db->query("UPDATE company_returns INNER JOIN supp_po_ordered ON company_returns.sup_returnItem = supp_po_ordered.supp_po_ordered_id INNER JOIN supp_po ON supp_po_ordered.supp_po_id = supp_po.supp_po_id INNER JOIN supplier ON supp_po.supp_id = supplier.sup_id INNER JOIN machine ON supp_po_ordered.item = machine.brewer SET company_returns.mach_stat ='".$status."' WHERE machine.mach_id ='".$id."'");
  }
  function supp_po_ordered($status, $id){

        $this->db->query("UPDATE supp_po_ordered INNER JOIN supp_delivery ON supp_po_ordered.supp_po_ordered_id = supp_delivery.supp_po_ordered_id INNER JOIN supp_po ON supp_po.supp_po_id = supp_po_ordered.supp_po_id INNER JOIN supplier ON supplier.sup_id = supp_po.supp_id INNER JOIN machine ON supp_po_ordered.item = machine.brewer SET supp_po_ordered.mach_stat ='".$status."' WHERE machine.mach_id ='".$id."'");

  }

}