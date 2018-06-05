<?php

class Roleholder_list extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function main() {

        $this->load->module('site_security');
        $this->site_security->_make_sure_is_admin();

        $data['query'] = $this->get('roleholder_id');
        $data['view_module'] = "roleholder_list";
        $data['view_file'] = "main";
        $this->load->module('templates');
        $this->templates->admin($data);
    }

    function adduser() {
        $this->load->module('site_security');
        $this->site_security->_make_sure_is_admin();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('roles', 'invalid role', 'in_list[site_manager,chief_head,coordinator,instructor]');

        if ($this->form_validation->run() == FALSE) {
            $data['view_module'] = "roleholder_list";
            $data['view_file'] = "add";
            $this->load->module('templates');
            $this->templates->admin($data);
        } else {

            // database manipulation add goes here
            $data = array(
                'roleholder_firstname' => $this->input->post('first_name'),
                'roleholder_lastname' => $this->input->post('last_name'),
                'roleholder_role' => $this->input->post('role')
            );
            // adding $data to database 
            $this->load->module('roleholder_list');
            $this->roleholder_list->_insert($data);

            $data['view_module'] = "roleholder_list";
            $data['view_file'] = "add";
            $this->load->module('templates');
            $this->templates->admin($data);
        }
    }

    function add() {
        $this->load->module('site_security');
        $this->site_security->_make_sure_is_admin();

        $data['first_name'] = $this->input->post('first_name');

        $data['last_name'] = $this->input->post('last_name');
        $data['role'] = $this->input->post('role');

        $data['view_module'] = "roleholder_list";
        $data['view_file'] = "add";
        $this->load->module('templates');
        $this->templates->admin($data);
    }
    function manageuser(){
        echo "hello";
        die();
    }

    function deleteuser() {
        $delete_id = $this->uri->segment(3);
        if (is_numeric($delete_id)) {
            $this->_deleteuser($delete_id);
        } else {
            echo "fail... redirecting....";
            die();
        }
        redirect('/roleholder_list/main');
    }

    function _deleteuser($delete_id) {
        //security_test goes here
        $this->_delete($delete_id);
    }

    function get($order_by) {
        $this->load->model('mdl_roleholder_list');
        $query = $this->mdl_roleholder_list->get($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_roleholder_list');
        $query = $this->mdl_roleholder_list->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_roleholder_list');
        $query = $this->mdl_roleholder_list->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_roleholder_list');
        $query = $this->mdl_roleholder_list->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data) {
        $this->load->model('mdl_roleholder_list');
        $this->mdl_roleholder_list->_insert($data);
    }

    function _update($id, $data) {
        $this->load->model('mdl_roleholder_list');
        $this->mdl_roleholder_list->_update($id, $data);
    }

    function _delete($id) {
        $this->load->model('mdl_roleholder_list');
        $this->mdl_roleholder_list->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('mdl_roleholder_list');
        $count = $this->mdl_roleholder_list->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_roleholder_list');
        $max_id = $this->mdl_roleholder_list->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_roleholder_list');
        $query = $this->mdl_roleholder_list->_custom_query($mysql_query);
        return $query;
    }

}
