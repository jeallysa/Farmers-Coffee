<?php

class InventoryStickers_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function retrieveSticker(){
      $query = $this->db->query("SELECT * FROM jhcs.sticker INNER JOIN supplier ON sticker.sup_id = supplier.sup_id WHERE sticker_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }

	function update($data, $id){
              
    $this->db->where('sticker_id', $id ); 
    $this->db->update('sticker', $data);    
   
        
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

        $this->db->query("UPDATE walkin_sales INNER JOIN coffee_blend ON coffee_blend.blend_id = walkin_sales.blend_id INNER JOIN sticker ON sticker.sticker_id = coffee_blend.sticker_id SET walkin_sales.stckr_stat ='".$status."' WHERE sticker.sticker_id ='".$id."'");
  }  
  function client_coffreturn($status, $id){
        
        $this->db->query("UPDATE client_coffreturn INNER JOIN client_delivery ON client_coffreturn.client_deliveryID = client_delivery.client_deliveryID INNER JOIN contracted_client ON client_delivery.client_id = contracted_client.client_id INNER JOIN contracted_po ON client_delivery.contractPO_id = contracted_po.contractPO_id INNER JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id INNER JOIN sticker ON coffee_blend.sticker_id = sticker.sticker_id SET client_coffreturn.stckr_stat ='".$status."' WHERE sticker.sticker_id ='".$id."'");
  }  
  function contracted_po($status, $id){
       
        $this->db->query("UPDATE contracted_po INNER JOIN contracted_client ON contracted_po.client_id = contracted_client.client_id INNER JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id INNER JOIN sticker ON coffee_blend.sticker_id = sticker.sticker_id SET contracted_po.stckr_stat ='".$status."' WHERE sticker.sticker_id ='".$id."'");
  }
  function company_returns($status, $id){
        
        $this->db->query("UPDATE company_returns INNER JOIN supp_po_ordered ON company_returns.sup_returnItem = supp_po_ordered.supp_po_ordered_id INNER JOIN supp_po ON supp_po_ordered.supp_po_id = supp_po.supp_po_id INNER JOIN supplier ON supp_po.supp_id = supplier.sup_id INNER JOIN sticker ON supp_po_ordered.item = sticker.sticker SET company_returns.stckr_stat ='".$status."' WHERE sticker.sticker_id ='".$id."'");
  }
  function supp_po_ordered($status, $id){

        $this->db->query("UPDATE supp_po_ordered INNER JOIN supp_delivery ON supp_po_ordered.supp_po_ordered_id = supp_delivery.supp_po_ordered_id INNER JOIN supp_po ON supp_po.supp_po_id = supp_po_ordered.supp_po_id INNER JOIN supplier ON supplier.sup_id = supp_po.supp_id INNER JOIN sticker ON sticker.sticker = supp_po_ordered.item SET supp_po_ordered.stckr_stat ='".$status."' WHERE sticker.sticker_id ='".$id."'");

  }

}
