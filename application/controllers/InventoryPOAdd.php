<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOAdd extends CI_Controller{
        
		function __construct(){
			parent::__construct();
             $this->load->model('inventoryPOAdd_model');
             $this->load->model('notification_model');
		}
		
 
        
        
        
		public function index(){ 
           
      //      $this->load->view('layout/header');
           
            
            $data['suppliers'] = $this->inventoryPOAdd_model ->retrieveSuppliers();
            $data['suppliersItem'] = $this->inventoryPOAdd_model ->retrieveItems();
            $data['truckingFee'] = $this->inventoryPOAdd_model->retrieveTruckingFee();
            $data['lastPO'] = $this->inventoryPOAdd_model->RetrieveLastPO();
            $data['tempExisting'] = $this->inventoryPOAdd_model->checkIfTempIsEmpty();
            $data['TempOrdered'] = $this->inventoryPOAdd_model->displayOrderedTemp();
            $data['sumOfTemp'] = $this->inventoryPOAdd_model->sumOfTemp();
            $data['sumTotal'] = $this->inventoryPOAdd_model->sumTotal();
            
            
            
            $data['reorder'] = $this->notification_model->reorder();
            
			$this->load->view('inventoryPOAdd', $data);
            
		}
        
        
        
        
        
     public function get_selectItem_Type(){   
            //ajax part
        $item_name = $this->input->post('item_name');
        $sup_id = $this->input->post('sup_id');
        
        $results = $this->inventoryPOAdd_model->querySelectedType($item_name , $sup_id);
        
        if(count($results)>0){
            
            $pro_select_box = '';
            $pro_select_box .= '<option value="">Select Type</option>';
          
            
          foreach ($results as $result){
              
            if($result->category == 1){  
                
             $pro_select_box .=' <option value="'.$result->type.'">'.$result->type .'</option>';
             $category = 1;
                
            }else{
                
             $pro_select_box .=' <option value="'.$result->type.'">'.$result->type. '</option>';
             $category = 0;
                
            }
         }
             $array = array("category" => $category,
                             "type" => $pro_select_box);
            
            echo json_encode($array);
            
        }/*
         else{
       
              
              $pro_select_box = '<option value="">Select Type</option>';
              echo json_encode($pro_select_box);
          }  
          */
        
    }
      
        
        
    
             
    public function get_selectItem_amount(){          //ajax part
        $item_name = $this->input->post('itemName');
        $item_type = $this->input->post('itemType');
        
        $sup_id    = $this->input->post('sup_id');
        
        $result = $this->inventoryPOAdd_model->querySelectedAmount($item_name , $sup_id , $item_type );
        
        if(count($result)>0){
          
            echo json_encode($result);
        }
    }
    
        
        
        
                
    public function checkReorder(){          //ajax part
        $item_name = $this->input->post('itemName');
        $item_type = $this->input->post('itemType');
        $qty       = $this->input->post('qty');
        $sup_id    = $this->input->post('sup_id');
        
        
        $result   = $this->inventoryPOAdd_model->checkReorder($item_name , $item_type , $qty , $sup_id );
        //$result = $this->inventoryPOAdd_model->cc();
        if(count($result)>0){
          
            echo json_encode($result);
        }
    }     
        
        
        
     
     public function checkIfExisting(){          //ajax part
        $item_name = $this->input->post('itemName');
        $item_type = $this->input->post('itemType');
        
        $result   = $this->inventoryPOAdd_model->checkIfExisting($item_name , $item_type);
        
        if(count($result)>0){
          
            echo json_encode($result);
        }
    } 
        
        
        
        
        
        
       public function removeOrder($item){       
        $this->inventoryPOAdd_model->removeOrder($item);
         redirect(base_url('inventoryPOAdd'));
    } 
        
        
        
        
        
        
    
      public function delete_temp_po(){
        $username = $this->input->post("username");
        $this->inventoryPOAdd_model->delete_temp_po($username);
          
          
        redirect(base_url('inventoryPOAdd'));
        }
        
        
        
      public function resetOrder(){
        $this->inventoryPOAdd_model->resetOrder();
        redirect(base_url('inventoryPOAdd'));
        } 
        
  
      
              
//   $data['check']$this->inventoryPOAdd_model->checkIfTempIsEmpty();  //check if the tempPO has a existing chosen supplier.
 //        if(empty($data['check']))
                        
   
        
      public function insertOrder(){
  //Populate First The supplier supp_po.   
         
          
          
          
        $data['tempPO'] = $this->inventoryPOAdd_model->retrieveTemp();
       
        $totalAmountv = $this->input->post('totalAmount'); 
        //$totalAmountv = filter_var($totalAmount, FILTER_SANITIZE_NUMBER_FLOAT); 
          
        $totalAmount = str_replace(array(','), '' ,    $totalAmountv);
        $totalAmount = str_replace(array('Php '), '' , $totalAmount);
        
          $datax = array();
            
         $i=0;   
    if (!empty($data['tempPO'])){
          foreach($data['tempPO'] as $object){ //for a counter
             
             $datax[$i] = array(
                'supp_id' => $object->sup_id,
                'suppPO_date' => $object->date,
                'trucking_fee' => $object->trucking_fee,
                'supp_creditTerm' => $object->credit_term,
                'total_amount' =>$totalAmount,
            );
            $i++;
          }$this->inventoryPOAdd_model->insertPO($datax);
   //end           
               
   
   //get from data from view.       
       if ($_POST){   //---- FROM the Dynamic Insert
        $lastPO = $this->inventoryPOAdd_model->RetrieveLastPO(); //return  1 row from the temp_po. the last PO.
        $itemv=$this->input->post('item_name');
        $itemTypev = $this->input->post('type');
        $qtyv=$this->input->post('qty');
        $amountv=$this->input->post('amount');
		$categoryx=$this->input->post('category');
		   
		   
        $data = array();
		   

	
           
for ($i = 0; $i < count($this->input->post('item_name')); $i++){
			
        //$totalAmountv = filter_var($totalAmount, FILTER_SANITIZE_NUMBER_FLOAT); 
         $qtyT = str_replace(array(','), '' , $qtyv[$i]);
         $qtyT = str_replace(array('Php '), '' , $qtyT);
    
    
         $amountT = str_replace(array(','), '' , $amountv[$i]);
         $amountT = str_replace(array('Php '), '' , $amountT);
            
            
	if($categoryx[$i] == 1){
        
			$newQty = $qtyT * 1000;
				
            $data[$i] = array(
               
                'item' => $itemv[$i],
                'qty' => $newQty,
                'type' => $itemTypev[$i],
                'amount' => $amountT,
                'supp_po_id' =>$lastPO[0]->supp_po_id,
				'categoryx'  =>$categoryx[$i],
               
            );
			
	}else{
		
		$data[$i] = array(
               
                'item' => $itemv[$i],
                'qty' => $qtyT,
                'type' => $itemTypev[$i],
                'amount' => $amountT,
                'supp_po_id' =>$lastPO[0]->supp_po_id,
				'categoryx'  =>$categoryx[$i],
			);
		
	}
			
			
			
        }
           
        $this->inventoryPOAdd_model->insertOrder($data);
           
        //$this->inventoryPOAdd_model->delete_temp_po();
        //$this->inventoryPOAdd_model->delete_temp_po_order();
           
           
        $this->inventoryPOAdd_model->activity_logs('inventory', "Purchased Order ");
    }
         
       redirect(base_url('inventoryPOAdd'));   

    } /* else{
         
           $message = "Invalid Order";
           echo "<script type='text/javascript'>alert('$message');</script>";
         
          
           redirect(base_url('inventoryPOAdd'));
               
           }
        */
        redirect(base_url('inventoryPOAdd'));
    }
         

    
  
        
      public function insertTempOrder(){
          
          //"category"    => $this->input->post('category'
          
         $username = $this->input->post("username");
          
         $dataInsert = array("item_name" => $this->input->post('item'),
                             "qty"       => $this->input->post('qty'),
                             "type"      => $this->input->post('itemType'),
                             "unitPrice" => $this->input->post('unitPrice'),
                             "amount"    => $this->input->post('amount'),
                             "categoryx" => $this->input->post('category'),
                             "username" => $username,
                            );    
        
        $this->inventoryPOAdd_model->insertTempOrder($dataInsert);
          
        redirect(base_url('inventoryPOAdd'));
      }
        
        
        
             
     public function insertSupplierToTemp(){
         //Empty Temp then insert New
         $username = $this->input->post("username");
         $this->inventoryPOAdd_model->delete_temp_po($username);   
         
         
         $dataInsert = array("supp_name"    => $this->input->post("dropdown"),
                             "date"         => $this->input->post("date"),
                             "trucking_fee" => $this->input->post("truckingFee"),
                             "credit_term"  => $this->input->post("creditTerms"),
                             "username"      => $username,
                            );
         
         $this->inventoryPOAdd_model->insertChosenSupplier($dataInsert);
         
         
         
         
         redirect(base_url('inventoryPOAdd'));
     }   
          
        
        
        
        
        
    }
?>