<?php

class Roleholder_list extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function main() {
        $this->load->module('site_security');
        $this->site_security->_make_sure_is_admin();

        $data['view_module'] = "roleholder_list";
        $data['view_file'] = "main";
        $this->load->module('templates');
        $this->templates->admin($data);
    }

    function add() {
        $this->load->module('site_security');
        $this->site_security->_make_sure_is_admin();

        $data['view_module'] = "roleholder_list";
        $data['view_file'] = "add";
        $this->load->module('templates');
        $this->templates->admin($data);
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
