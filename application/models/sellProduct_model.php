<?php 

class sellProduct_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getSoldCoffee(){
		$query=$this->db->query("SELECT * FROM walkin_sales a JOIN coffee_blend b ON a.blend_id = b.blend_id JOIN packaging c ON b.package_id = c.package_id LEFT OUTER JOIN client_coffreturn d ON d.walkinPo_id = a.walkin_id");
		return $query->result();
	}

	Public function getSoldMachine(){
		$query2=$this->db->query("SELECT *, machine.mach_id, machine_out.mach_serial, contracted_client.client_id FROM machine_out NATURAL JOIN contracted_client NATURAL JOIN machine WHERE status = 'sold'");
		return $query2->result();
	}

	Public function getBlends(){
		$query3=$this->db->query("SELECT * FROM coffee_blend NATURAL JOIN packaging where blend_activation = 1 AND pack_activation = 1");
		return $query3->result();
	}

	Public function getMachine(){
		$query4=$this->db->query("SELECT * FROM machine where mach_activation = 1");
		return $query4->result();
	}

	public function getClient(){
		$query5=$this->db->query("SELECT * FROM contracted_client where client_activation = '1'");
		return $query5->result();
	}



	function record_data($date, $quantity, $blend_id){
		$query = $this->db->query('SELECT c.percentage, c.raw_id, d.package_id, d.package_size, b.sticker_id FROM coffee_blend b JOIN proportions c JOIN packaging d ON b.blend_id = c.blend_id AND b.package_id = d.package_id WHERE c.blend_id ='.$blend_id.';');		
		$data = array(
			'walkin_date' => $date,
			'walkin_qty' => $quantity,
			'blend_id' => $blend_id
		);

		$this->db->insert('walkin_sales', $data);
		$inserted_id = $this->db->insert_id();

		$pack_id = $query->row()->package_id;
		$stick_id = $query->row()->sticker_id;
		$this->db->query("UPDATE packaging SET package_stock = package_stock - ".$quantity." WHERE package_id =".$pack_id.";");
		$this->db->query('UPDATE sticker SET sticker_stock = sticker_stock - '.$quantity.' WHERE sticker_id ='.$stick_id.';'); 
		$data_trans = array(
					'transact_date' => $date,
					'sales_inv' => $inserted_id,
		        	'type' => "OUT"
		);
		$this->db->insert('inv_transact', $data_trans);
		$trans_id = $this->db->insert_id();
		
		foreach ($query->result() as $row)
		{

		        $raw_guide = $row->raw_id;
		        $percentage = $row->percentage;
		        $package = $row->package_size;
		        $this->db->query('UPDATE raw_coffee SET raw_stock = raw_stock - '.$quantity*($package*($percentage * 0.01)).' WHERE raw_id ='.$raw_guide.';'); 
		        
		        $data_for = array(
		        	'trans_id' => $trans_id,
		        	'raw_coffeeid' => $raw_guide,
		        	'quantity' => $quantity*($package*($percentage * 0.01))
		        );
		        $this->db->insert('trans_raw', $data_for);
		        
		            
		}

		$data_pack = array(
		        	'trans_id' => $trans_id,
		        	'package_id' => $pack_id,
		        	'quantity' => $quantity
		);
		$data_stick = array(
				'trans_id' => $trans_id,
		        	'sticker_id' => $stick_id,
		        	'quantity' => $quantity
		);
		$this->db->insert('trans_pack', $data_pack);
		$this->db->insert('trans_stick', $data_stick);
		$this->db->query('INSERT INTO trans_mach (trans_id) VALUES ('.$trans_id.')');

		
	}

	function add_data($data7){ 
		$this->db->insert('machine_out', $data7);
	}

	function insert_dataA($dataA){ 
		$this->db->insert('client_machreturn', $dataA);
	}
	function updateA($return, $id){
		$data2 = array(
	        'remarks' => $return
		);

		$this->db->where('mach_salesID', $id);
		$this->db->update('machine_out', $data2);
	}

	function add_machine_stock($mach_retQty, $mach_id){
		$this->db->query("UPDATE machine SET mach_stocks = mach_stocks + ".$mach_retQty." WHERE mach_id = '".$mach_id."';");
	}

	function minus_machine($minusMach, $ma_id){
		$this->db->query("UPDATE machine SET mach_stocks = mach_stocks - ".$minusMach." WHERE mach_id = '".$ma_id."';");
	}

	function minus_machine_rent($mach_retQty, $mach_id){
		$this->db->query("UPDATE machine SET mach_stocks = mach_stocks + ".$mach_retQty." WHERE mach_id = '".$mach_id."';");
	}

	function insert_coffeereturn($coffeeblend_return){ 
		$this->db->insert('client_coffreturn', $coffeeblend_return);
	}

	function update_coffeereturn($return, $id, $blend_returnedQty){
		$data2 = array(
	        'coff_remark' => $return,
	        'walkin_returns' => $blend_returnedQty
		);

		$this->db->where('walkin_id', $id);
		$this->db->update('walkin_sales', $data2);
	}

	function add_blend_stock($blend_returnedQty, $blend_id){
		$this->db->query("UPDATE coffee_blend SET blend_qty = blend_qty + ".$blend_returnedQty." WHERE blend_id = '".$blend_id."';");
	}

	function getBlend($id){
		$query = $this->db->query("SELECT * FROM coffee_blend JOIN packaging ON coffee_blend.package_id = packaging.package_id where blend_activation = 1 AND pack_activation = 1 AND blend_id = $id");
		return $query->row();
	}
	function getMachinebyId($id){
		$query = $this->db->query("SELECT * from machine WHERE mach_id='$id'");
		return $query->row();
	}
	function getClientbyId($id){
		$query = $this->db->query("SELECT * from contracted_client WHERE client_id='$id'");
		return $query->row();
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

		function multipleOrderMachine($data)
		{
			for($x = 0; $x < count($data); $x++){
                $mach_id = $data[$x]['mach_id'];
                $quantity = $data[$x]['quantity'];

                    $this->db->query("UPDATE machine SET mach_stocks = mach_stocks - ".$quantity." WHERE mach_id = '".$mach_id."';");
                    $this->db->query("UPDATE machine_out SET mach_qty = mach_qty + ".$quantity." WHERE mach_id = '".$mach_id."';");
                    $orders[] = array(
                        'mach_id' => $data[$x]['mach_id'],
                        'mach_serial' => $data[$x]['serial'],
                        'date' => $data[$x]['dateOfPO'],
                        'mach_qty' => $data[$x]['quantity'],
                        'client_id' => $data[$x]['client_id'],
						'status' => 'sold'
                    );
                
			}

			try{

				for($x = 0; $x<count($data);$x++){
					$this->db->insert("machine_out", $orders[$x]);
				}

				return 'success';

			}
			catch (MySQLException $e) {
				$e->getMessage();
			}
			catch (Exception $e) {
				$e->getMessage();
			}
		}
		

}

?>