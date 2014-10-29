<?php
/**
 * Created by PhpStorm.
 * User: LEEYOOL
 * Date: 10/20/14
 * Time: 2:11 PM
 */

class Home extends CI_Controller{
    function __construct() {
        parent::__construct();
//        $this->load->view('templates/header');
//        $this->load->view('home');
//        $this->load->view('templates/footer');
    }

    public function index() {
        $data['title'] = "Dashboard";
        $this->load->view('templates/header', $data);
        $this->load->view('login');
        $this->load->view('templates/footer');
    }
} 