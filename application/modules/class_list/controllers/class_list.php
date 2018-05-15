<?php

class Class_list extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function create() {
        $this->load->module('site_security');
        $this->site_security->_make_sure_is_admin();
        
        $data['view_module'] = "class_list";
        $data['view_file'] = 'create';
        $this->load->module('templates');
        $this->templates->admin($data);
    }

    function manage() {
        $this->load->module('site_security');
        $this->site_security->_make_sure_is_admin();
        $data['view_module'] = "class_list";
        $data['view_file'] = 'manage';

        $this->load->module('templates');
        $this->templates->admin($data);
    }

    function get($order_by) {
        $this->load->model('mdl_class_list');
        $query = $this->mdl_class_list->get($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_class_list');
        $query = $this->mdl_class_list->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_class_list');
        $query = $this->mdl_class_list->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_class_list');
        $query = $this->mdl_class_list->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data) {
        $this->load->model('');
        $this->mdl_class_list->_insert($data);
    }

    function _update($id, $data) {
        $this->load->model('mdl_class_list');
        $this->mdl_class_list->_update($id, $data);
    }

    function _delete($id) {
        $this->load->model('mdl_class_list');
        $this->mdl_class_list->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('mdl_class_list');
        $count = $this->mdl_class_list->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_class_list');
        $max_id = $this->mdl_class_list->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_class_list');
        $query = $this->mdl_class_list->_custom_query($mysql_query);
        return $query;
    }

}
