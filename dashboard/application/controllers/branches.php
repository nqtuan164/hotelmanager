<?php
/**
 * Created by PhpStorm.
 * User: LEEYOOL
 * Date: 10/21/14
 * Time: 5:08 PM
 */

class Branches extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_branches', 'BRANCHES');
    }

    public function index() {
    	$data['title'] = "Branches | Dashboard";
    	$data['cur'] = "branches";

    	$data['branches'] = $this->BRANCHES->select();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav');
        $this->load->view('branches');
        $this->load->view('templates/footer');
    }
}