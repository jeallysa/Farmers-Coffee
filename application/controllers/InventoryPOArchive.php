<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOArchive extends CI_Controller{
        
        
		function __construct(){
			parent::__construct();
            
            $this->load->model('inventoryPOArchive_model');
            $this->load->model('notification_model');
            $this->load->helper('date');
		}
		
        
        
        
        
		public function index(){ 
       
            
            $data['order'] = $this->inventoryPOArchive_model->retrieveArchive();
            $data['reorder'] = $this->notification_model->reorder();
			$this->load->view('inventoryPOArchive' , $data);
		}
        
        
        
        
        
    public function archive(){
         $supp_po_id = $this->input->post('supp_po_id');
         $this->inventoryPOArchive_model->archive($supp_po_id);
          
          
        redirect(base_url('inventoryPOArchive'));
      }    
        
        
     
        
}
?>