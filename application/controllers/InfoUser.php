<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InfoUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Informasi_model');
    }

    public function index()
    { 
        $data['judul'] = "Halaman informasi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['myuser'] = $this->Informasi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("user/vw_informasi", $data);
        $this->load->view("layout/footer", $data);
    }

    // public function view($id)
    // {
    //     $data['informasi'] = $this->Informasi_model->getById($id);
    //     $this->load->view('informasi_view', $data);
    // }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Informasi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['informasi'] = $this->Informasi_model->get();
        $this->form_validation->set_rules('universitas', 'Universitas', 'required', [
            'required' => 'Nama Universitas Wajib Di Isi'
        ]);
        $this->form_validation->set_rules('waktu', 'Waktu', 'required', [
            'required' => 'Batas Deadline Wajib di isi'
        ]);
        $this->form_validation->set_rules('kuota', 'Kuota', 'required|integer', [
            'required' => 'Kuota Beasiswa Wajib di isi',
            'integer' => 'Kuota harus Angka'
        ]);
        $this->form_validation->set_rules('syarat', 'Syarat', 'required', [
            'required' => 'Syarat Beasiswa Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("informasi/vw_tambah_informasi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'universitas' => $this->input->post('universitas'),
                'waktu' => $this->input->post('waktu'),
                'kuota' => $this->input->post('kuota'),
                'syarat' => $this->input->post('syarat'),
                ];
            $this->Informasi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="m-alert m-alert--outline m-alert--outline-2x alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            <strong>Yeay!!!</strong> Data Informasi berhasil ditambahkan.
        </div>');
            redirect('Informasi');
        }
    }

    public function hapus($id)
    {
        $this->Informasi_model->delete($id);
        $this->session->set_flashdata('message', '<div class="m-alert m-alert--outline m-alert--outline-2x alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button> Data Informasi Beasiswa berhasil di Hapus
        </div>');
        redirect('Informasi');
    }

    public function edit($idinformasi)
    {
        $data['judul'] = "Halaman Edit Informasi Beasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['informasi'] = $this->Informasi_model->get();
        $data['informasi'] = $this->Informasi_model->getById($idinformasi);
        $this->form_validation->set_rules('universitas', 'Universitas', 'required', [
            'required' => 'Nama Universitas Wajib Di Isi'
        ]);
        $this->form_validation->set_rules('waktu', 'Waktu', 'required', [
            'required' => 'Batas Deadline Wajib di isi'
        ]);
        $this->form_validation->set_rules('kuota', 'Kuota', 'required|integer', [
            'required' => 'Kuota Beasiswa Wajib di isi',
            'integer' => 'Kuota harus Angka'
        ]);
        $this->form_validation->set_rules('syarat', 'Syarat', 'required', [
            'required' => 'Syarat Beasiswa Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("informasi/vw_tambah_informasi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'universitas' => $this->input->post('universitas'),
                'waktu' => $this->input->post('waktu'),
                'kuota' => $this->input->post('kuota'),
                'syarat' => $this->input->post('syarat'),
                ];
            $this->Informasi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="m-alert m-alert--outline m-alert--outline-2x alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            <strong>Yeay!!!</strong> Data Informasi berhasil ditambahkan.
        </div>');
            redirect('Informasi');
        }
    }
}

    // Add other controller methods as needed (e.g., add, edit, delete)