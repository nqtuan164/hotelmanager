<?php
	class model_hotels extends CI_Model {
	    function __construct() {
	        parent::__construct();

	    }

	    public function select($input = array()) {
    	$arr = array(
    			'num' => 10,
    			'offset' => 0,
    			'id' => false,
    			'name' => false,
    			'branchid' => false,
    			'activation' => 1,
    			'select' => 'h.id, h.name, h.address, h.branchid, h.note, b.name as branchname, h.activation, h.created_date, h.updated_date'
    		);

    	$input = array_merge($arr, $input);

    	$this->db->select($input['select']);
        $this->db->join('branches b', 'b.id = h.branchid');

    	if ($input['name'] != false) {
    		$search = $this->db->escape_like_str($input['name']);
    		$this->db->like($search);
    	}

    	if ($input['id'] != false) {
    		$this->db->where('h.id', $input['id']);
    	}

    	if($input['branchid']!= false){
    		$this->db->where('h.branchid', $input['branchid']);
    	}

    	if ($input['num'] == -1) {
    		$query = $this->db->get('hotels h' );
    	} else {
    		$query = $this->db->get('hotels h', $input['num'], $input['offset']);
    	}
    	
    	return $query->result_array();
    }
    public function insert($input) {
        unset($input['id']);

        $input['activation'] = 1;
        $input['created_date'] = date();
        $input['updated_date'] = date();

        $this->db->insert('hotels', $input);
        return $this->db->insert_id();
    }

    public function update($input) {
        $input['updated_date'] = date();

        $this->db->where('id', $input['id']);
        $this->db->update('hotels', $input);

        return $input['id'];
    }

    public function delete($input) {
        $input['updated_date'] = date();
        $input['activation'] = 0;
        
        $this->db->where('id', $input['id']);
        $this->db->update('hotels', $input);

        return $input['id'];
    }
    }
?>
