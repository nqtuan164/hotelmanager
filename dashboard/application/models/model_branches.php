<?php
/**
 * Created by PhpStorm.
 * User: LEEYOOL
 * Date: 10/21/14
 * Time: 3:46 PM
 */

class model_branches extends CI_Model {
    function __construct() {
        parent::__construct();

    }

    public function select($input = array()) {
    	$arr = array(
    			'num' => 10,
    			'offset' => 0,
    			'id' => false,
    			'name' => false,
    			'activation' => 1,
    			'select' => 'id, name, activation, note, created_date, updated_date'
    		);

    	$input = array_merge($arr, $input);

        //var_dump($input);

    	$this->db->select($input['select']);

    	if ($input['name'] != false) {
    		$search = $this->db->escape_like_str($input['name']);
    		$this->db->like($search);
    	}

    	if ($input['id'] != false) {
    		$this->db->where('id', $input['id']);
    	}

    	if ($input['num'] == -1) {
    		$query = $this->db->get('branches');
    	} else {
    		$query = $this->db->get('branches', $input['num'], $input['offset']);
    	}
    	
    	return $query->result_array();
    }

    public function insert($input) {
    	unset($input['id']);

    	$input['activation'] = 1;
    	$input['created_date'] = date();
    	$input['updated_date'] = date();

    	$this->db->insert('branches', $input);
    	return $this->db->insert_id();
    }

    public function update($input) {
    	$input['updated_date'] = date();

    	$this->db->where('id', $input['id']);
    	$this->db->update('branches', $input);

    	return $input['id'];
    }

    public function delete($input) {
    	$input['updated_date'] = date();
    	$input['activation'] = 0;
    	
    	$this->db->where('id', $input['id']);
    	$this->db->update('branches', $input);

    	return $input['id'];
    }
} 