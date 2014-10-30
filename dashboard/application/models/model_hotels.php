<?php
	class model_hotels extends CI_Model {
	    function __construct() {
	        parent::__construct();

	    }

	    public function select(input = array()) {
    	$arr = array(
    			'num' => 10,
    			'offset' => 0
    			'id' => false,
    			'name' => false,
    			'brachid' => false,
    			'activation' => 1,
    			'select' => 'id, name, adress, brachid, note'
    		);

    	$input = array_merge($arr, $input);

    	$this->db->select($input['select']);

    	if ($input['name'] != false) {
    		$search = $this->db->escape_like_str($input['name']);
    		$this->db->like($search);
    	}

    	if ($input['id'] != false) {
    		$this->db->where('id', $input['id']);
    	}

    	if($input['brachid']!= false){
    		$this->db->where('brachid', $input['brachid']);
    	}

    	if ($input['num'] == -1) {
    		$query = $this->db->get('hotels');
    	} else {
    		$query = $this->db->get('hotels', $input['num'], $input['offset']);
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
