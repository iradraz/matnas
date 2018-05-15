<?php

class Templates extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function landing() {
        $data = "";
        $this->login_page($data);
    }

    function login_page($data) {
        $this->load->view('login_page', $data);
    }

    function show_admin() {
        $data = "";
        $this->admin($data);
    }

    function admin($data) {
        $this->load->view('admin', $data);
    }

}
