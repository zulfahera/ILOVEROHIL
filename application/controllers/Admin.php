<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Informasi_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Utama";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("dashboard/dashboard", $data);
        $this->load->view("layout/footer", $data);
    }

    public function data()
    {
        $data['judul'] = "Halaman Utama";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_data_admin", $data);;
        $this->load->view("layout/footer", $data);
    }
    public function informasi()
    {
        $data['judul'] = "Halaman informasi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myuser'] = $this->Informasi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_informasi_admin", $data);
        $this->load->view("layout/footer", $data);
    }

}
