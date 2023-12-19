<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ListTamu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('M_hotel');
    }

    function index()
    {
        $data['data']= $this->M_hotel->getTamu();
        $this->load->view('view_list', $data);
    }
}
