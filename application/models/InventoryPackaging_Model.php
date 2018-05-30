<?php

class InventoryPackaging_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function retrievePackaging(){
      $query = $this->db->query("SELECT * FROM packaging JOIN supplier ON supplier.sup_id = packaging.sup_id WHERE pack_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }

	function update($data, $pck_idv){
              
    $this->db->where('package_id',  $pck_idv ); 
    $this->db->update('packaging', $data);    
   
        
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

        $this->db->query("UPDATE walkin_sales INNER JOIN coffee_blend ON coffee_blend.blend_id = walkin_sales.blend_id INNER JOIN packaging ON packaging.package_id = coffee_blend.package_id SET walkin_sales.pckng_stat ='".$status."' WHERE packaging.package_id ='".$id."'");
  }  
  function client_coffreturn($status, $id){
        
        $this->db->query("UPDATE client_coffreturn INNER JOIN client_delivery ON client_coffreturn.client_deliveryID = client_delivery.client_deliveryID INNER JOIN contracted_client ON client_delivery.client_id = contracted_client.client_id INNER JOIN contracted_po ON client_delivery.contractPO_id = contracted_po.contractPO_id INNER JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id INNER JOIN packaging ON coffee_blend.package_id = packaging.package_id SET client_coffreturn.pckng_stat ='".$status."' WHERE packaging.package_id ='".$id."'");
  }  
  function contracted_po($status, $id){
       
        $this->db->query("UPDATE contracted_po INNER JOIN contracted_client ON contracted_po.client_id = contracted_client.client_id INNER JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id INNER JOIN packaging ON coffee_blend.package_id = packaging.package_id SET contracted_po.pckng_stat ='".$status."' WHERE packaging.package_id ='".$id."'");
  }
  function company_returns($status, $id){
        
        $this->db->query("UPDATE company_returns INNER JOIN supp_po_ordered ON company_returns.sup_returnItem = supp_po_ordered.supp_po_ordered_id INNER JOIN packaging ON(supp_po_ordered.item = packaging.package_type AND supp_po_ordered.type = packaging.package_size) INNER JOIN supplier ON packaging.sup_id = supplier.sup_id SET company_returns.pckng_stat ='".$status."' WHERE packaging.package_id ='".$id."'");
  }
  function supp_po_ordered($status, $id){

        $this->db->query("UPDATE supp_po_ordered INNER JOIN supp_delivery ON supp_po_ordered.supp_po_ordered_id = supp_delivery.supp_po_ordered_id INNER JOIN supp_po ON supp_po.supp_po_id = supp_po_ordered.supp_po_id INNER JOIN supplier ON supplier.sup_id = supp_po.supp_id INNER JOIN packaging ON (supp_po_ordered.item = packaging.package_type AND supp_po_ordered.type = packaging.package_size) SET supp_po_ordered.pckng_stat ='".$status."' WHERE packaging.package_id ='".$id."'");

  }

}
