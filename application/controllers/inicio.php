<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Inicio extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('header');
        $this->load->view('carousel');
        $this->load->view('inicio');
        $this->load->view('footer');
    }

    function llamado_a_ponencias() {
        $this->load->view('header');
        $this->load->view('llamado_a_ponencias');
        $this->load->view('footer');
    }

}
