<?php

class Admin_Inventory_Report_Model extends CI_Model {
    
    public function get_coffeein(){
		$count = $this->db->count_all_results('raw_coffee');
        $qcount = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee WHERE raw_activation = 1;");
		$query_append = "SELECT  a.* FROM
                            (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.po_supplier as po_no, f.sup_company as supplier";

		foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type, raw_discrepancy FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity + '".$row2->raw_discrepancy."'
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}

		$query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid
    JOIN inv_transact c ON b.trans_id = c.trans_id
    JOIN supp_po d ON c.po_supplier = d.supp_po_id
    JOIN supplier f ON d.supp_id = f.sup_id GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)=month(now()) GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.client_returnID, 'Client Return' as supplier";

        foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee, raw_discrepancy FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity + '".$row2->raw_discrepancy."'
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)=month(now()) GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.walkin_return, 'Walk-In Return' as supplier";

        foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type, raw_discrepancy FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity + '".$row2->raw_discrepancy."'
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)=month(now()) GROUP BY a.main_id;";

		$query = $this->db->query($query_append);
		return $query;

	}
    
    public function get_coffeeinWithP($sdf){
		$count = $this->db->count_all_results('raw_coffee');
        $qcount = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee WHERE raw_activation = 1;");
		$query_append = "SELECT a.* FROM
                            (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.po_supplier as po_no, f.sup_company as supplier";

		foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type, raw_discrepancy  FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity + '".$row2->raw_discrepancy."'
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}

		$query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid
    JOIN inv_transact c ON b.trans_id = c.trans_id
    JOIN supp_po d ON c.po_supplier = d.supp_po_id
    JOIN supplier f ON d.supp_id = f.sup_id GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)='".$sdf."' GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.client_returnID, 'Client Return' as supplier";

        foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type, raw_discrepancy  FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity + '".$row2->raw_discrepancy."'
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)='".$sdf."' GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.walkin_return, 'Walk-In Return' as supplier";

        foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type, raw_discrepancy  FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity + '".$row2->raw_discrepancy."'
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)='".$sdf."' GROUP BY a.main_id;";

		$query = $this->db->query($query_append);
		return $query;

	}
    
    public function get_coffeeout(){
		$count = $this->db->count_all_results('raw_coffee');
		$qcount = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee WHERE raw_activation = 1;");
		$query_append = "SELECT a.* FROM
                            (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.po_client as dr_no, e.client_company as client";

		 foreach ($qcount->result() AS $row){

			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id GROUP BY c.trans_id) a WHERE type = 'OUT' and month(transact_date)=month(now()) GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.sales_inv AS po_no, 'Walk-in' AS client";
        
         foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id GROUP BY c.trans_id) a WHERE type = 'OUT' AND MONTH(transact_date)=month(now()) GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.company_returnID, 'Company Return' as client";
        
         foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN company_returns d ON c.company_returnID = d.company_returnID GROUP BY c.trans_id) a WHERE type = 'OUT' AND MONTH(transact_date)=month(now()) GROUP BY a.main_id "  ;

		$query = $this->db->query($query_append);
		return $query;

	}
    
    public function get_coffeeoutWithP($sdf){
				$count = $this->db->count_all_results('raw_coffee');
				$qcount = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee WHERE raw_activation = 1;");
		$query_append = "SELECT a.* FROM
                            (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.po_client as dr_no, e.client_company as client";

		 foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id GROUP BY c.trans_id) a WHERE type = 'OUT' and month(transact_date)='".$sdf."' GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.sales_inv AS po_no, 'Walk-in' AS client";
        
         foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity
								        ELSE 0
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id GROUP BY c.trans_id) a WHERE type = 'OUT' AND MONTH(transact_date)='".$sdf."' GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.company_returnID, 'Company Return' as client";
        
         foreach ($qcount->result() AS $row){
			$new_query = $this->db->query("SELECT raw_id, raw_coffee AS type FROM raw_coffee WHERE raw_activation = 1 AND raw_coffee = '".$row->raw_coffee."'");
			$query_append .= ", '' ";
			foreach($new_query->result() AS $row2){
				$query_append .= "+ SUM(CASE
								        WHEN b.raw_coffeeid = '". $row2->raw_id ."' THEN b.quantity
								        ELSE 0
								        
								    END)";
			}
			$query_append .=  " AS '". $row->raw_coffee ."' ";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN company_returns d ON c.company_returnID = d.company_returnID GROUP BY c.trans_id) a WHERE type = 'OUT' AND MONTH(transact_date)='".$sdf."' GROUP BY a.main_id "  ;

		$query = $this->db->query($query_append);
		return $query;

	}
}

?>