<?php

use Parse\ParseClient;
//use Parse\ParseObject;
use Parse\ParseQuery;

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        ParseClient::initialize('QRTKWPeHWwe6EqL7GXybi6R0kV4Vqj8XLSeXii18', '4u2nyYR7pPrhXrdbXWHcd7BXDofOtNzren8Gmy7P', 'nnGHkZqeFJaQE3oNmvnw60Zq8bYZePcnVta290tt');
    }

    function index() {
//        $testObject = ParseObject::create("TestObject");
//        $testObject->set("foo", "bar");
//        $testObject->save();
        $query = new ParseQuery("Event");

        try {
            $eventData = $query->get("2yHLWDUlv3");
            $event = array(
                'title' => $eventData->get("title"),
                'category' => $eventData->get("category"),
                'detail' => $eventData->get("detail"),
            );
        } catch (ParseException $ex) {
            $event = array('excepcion' => $ex);
        }

        $this->load->view('header');
        $this->load->view('home', $event);
        $this->load->view('footer');
    }

}
