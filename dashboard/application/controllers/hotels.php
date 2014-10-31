<?php

class Hotels extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_hotels', 'HOTELS');
        $this->load->model('model_branches', 'BRANCHES');
    }

    public function index() {
    	$data['title'] = "Hotels | Dashboard";
    	$data['cur'] = "hotels";

    	$data['hotels'] = $this->HOTELS->select();
        //var_dump($data['hotels']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('hotels');
        $this->load->view('templates/footer');
    }

    public function hotels_edit($id) {
    	$data['title'] = "Edit Hotels | Dashboard";
    	$data['cur'] = "hotels";
    	$data['hotel'] = $this->HOTELS->select(array('id' => $id))[0];
        $data['branches'] = $this->BRANCHES->select();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('hotels_edit');
        $this->load->view('templates/footer');
    }

    public function hotels_edit_do($id) {
    	
    }
}