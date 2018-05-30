<?php

class InventoryStocks_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}
    
    function retrieveCoffee(){
      $query = $this->db->query("SELECT * FROM raw_coffee NATURAL JOIN supplier WHERE raw_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else{
          return NULL;
      }
  }


  function update($data,$raw_idv){
              
    $this->db->where('raw_id', $raw_idv ); 
    $this->db->update('raw_coffee', $data);    
   
        
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

  function supp_po_ordered($status, $name, $type){
        $data = array(
            'inv_stat' => $status
        );
        $this->db->where('item', $name); 
        $this->db->where('type', $type); 
        $this->db->update('supp_po_ordered', $data);
  }  
  function company_returns($status, $name, $type){

        $data = array(
            'inv_stat' => $status
        );
        
        $this->db->query("UPDATE company_returns INNER JOIN supp_po_ordered ON company_returns.sup_returnItem = supp_po_ordered.supp_po_ordered_id SET company_returns.inv_stat ='1' WHERE item ='".$name."' AND type = '".$type."'");
  }  
  function trans_raw($status, $id){
        $data = array(
            'inv_stat' => $status
        );
        $this->db->where('raw_coffeeid', $id); 
        $this->db->update('trans_raw', $data);
  }  
}
      
      
?>
