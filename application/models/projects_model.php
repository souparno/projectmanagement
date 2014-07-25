<?php

class Projects_model extends CI_Model {

     public function __construct()
    {
        $this->load->database();
    }

    /**
     * Store the new item into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function store_project($data) {
        $insert = $this->db->insert('project_master', $data);
        return $insert;
    }
/**
    * Count the number of rows
    * @param int $search_string
    * @param int $order
    * @return int
    */
    function count_projects($search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('project_master');
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
    public function get_project_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('project_master');
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
    public function get_projects($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {
	    
		$this->db->select('*');
		$this->db->from('project_master');

		if($search_string){
			$this->db->like('name', $search_string);
		}
		$this->db->group_by('id');

		if($order){
			$this->db->order_by($order, $order_type);
		}else{
		    $this->db->order_by('id', $order_type);
		}

        if($limit_start && $limit_end){
          $this->db->limit($limit_start, $limit_end);	
        }

        if($limit_start != null){
          $this->db->limit($limit_start, $limit_end);    
        }
        
		$query = $this->db->get();
		
		return $query->result_array(); 	
    }
    
    public function update_projects($id,$data_to_store){
        
        	$this->db->where('id', $id);
		$this->db->update('project_master', $data_to_store);
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
   public function delete_project($id){
		$this->db->where('id', $id);
		$this->db->delete('project_master'); 
	}

}

