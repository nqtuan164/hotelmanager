<?php
/**
 * Created by PhpStorm.
 * User: LEEYOOL
 * Date: 10/21/14
 * Time: 5:08 PM
 */

class Account extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function login() {
        $data['title'] = "Sign in";
        $this->load->view('templates/header', $data);
        $this->load->view('login');
        $this->load->view('templates/footer');
    }

    public function do_login() {
        echo $this->input->post('txt_username');
        if ($this->input->post('btn_login') == true) {
            echo $this->input->post('txt_username');
            echo "input";
        }

        if (isset($_POST['btn_login'])) {
            echo "kaka";
        }
    }
}