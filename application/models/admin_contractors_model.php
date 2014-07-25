<?php

class Admin_contractors_model extends CI_Model {

     public function __construct()
    {
        $this->load->database();
    }

    /**
     * Store the new item into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function store_contrators($data) {
        $insert = $this->db->insert('contractor', $data);
        return $insert;
    }
/**
    * Count the number of rows
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_contrators($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('contractors');
		if($search_string){
			$this->db->like('name', $search_string);
		}
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('id', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }
    /**
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_contractor_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('contractor');
		$this->db->where('id', $id);
		$query = $this->db->get();
		
                return $query->result_array(); 
    }    

 /**
    * Fetch projects data from the database
    * possibility to mix search, filter and order
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
    public function get_contractors()
    {
	    
		$this->db->select('*');
		$this->db->from('contractor');
		$query = $this->db->get();

                return $query->result_array(); 	
    }
    
    public function update_contractors($id,$data_to_store){
        
        	$this->db->where('id', $id);
		$this->db->update('contractor', $data_to_store);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
       
    }
    /**
    * Delete manufacturer
    * @param int $id - manufacture id
    * @return boolean
    */
   public function delete_contrator($id){
		$this->db->where('id', $id);
		$this->db->delete('contractor'); 
	}

}

