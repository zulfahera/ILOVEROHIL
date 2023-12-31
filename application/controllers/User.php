<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Informasi_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myuser'] = $this->Informasi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("dashboard/dashboard", $data);
        $this->load->view("layout/footer", $data);
    }
}
