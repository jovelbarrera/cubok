<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('header');
        $this->load->view('upload');
        $this->load->view('footer');
    }

}
