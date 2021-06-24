<?php
class Ajax extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ajax_model');
    }

    function index()
    {
        $this->load->view('ajax_view');
    }

    function insert()
    {
        $data = $this->ajax_model->insert_user();
        echo json_encode($data);
    }

    function select()
    {
        $data = $this->ajax_model->select_user();
        echo json_encode($data);
    }
}
