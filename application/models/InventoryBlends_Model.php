<?php

class InventoryBlends_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function retrieveBlends(){
      $query = $this->db->query("SELECT blend_id, blend, package_type, package_size, blend_qty, blend_physcount, blend_discrepancy, coffee_blend.inventory_date, blend_remarks ,coffee_blend.package_id FROM jhcs.coffee_blend INNER JOIN packaging ON coffee_blend.package_id = packaging.package_id WHERE blend_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }

  function update($data, $blend_idv){
              
    $this->db->where('blend_id', $blend_idv ); 
    $this->db->update('coffee_blend', $data);    
   
        
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

  function walkin_sales($status, $id){

        $this->db->query("UPDATE walkin_sales SET walkin_sales.inv_stat ='".$status."' WHERE walkin_sales.blend_id ='".$id."'");
  }  
  function client_coffreturn($status, $id){
        
        $this->db->query("UPDATE client_coffreturn INNER JOIN client_delivery ON client_coffreturn.client_deliveryID = client_delivery.client_deliveryID INNER JOIN contracted_client ON client_delivery.client_id = contracted_client.client_id INNER JOIN contracted_po ON client_delivery.contractPO_id = contracted_po.contractPO_id INNER JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id  SET client_coffreturn.inv_stat ='".$status."' WHERE coffee_blend.blend_id ='".$id."'");
  }  
  function contracted_po($status, $id){
        $data = array(
            'inv_stat' => $status
        );
        $this->db->where('blend_id', $id); 
        $this->db->update('contracted_po', $data);
  }  

}
?>