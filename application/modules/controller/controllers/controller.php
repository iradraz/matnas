<?php

class Controller extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function get($order_by) {
        $this->load->model('mdl_controller');
        $query = $this->mdl_controller->get($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_controller');
        $query = $this->mdl_controller->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_controller');
        $query = $this->mdl_controller->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value);

    function _insert($data);

    function _update($id, $data);

    function _delete($id);

    function count_where($column, $value);

    function get_max();

    function _custom_query($mysql_query);
    
}
