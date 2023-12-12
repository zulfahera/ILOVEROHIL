<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NilaiUSR extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_model');
        $this->load->model('User_model');
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['nilai'] = $this->Nilai_model->get();
        $data['userN'] = $this->Nilai_model->getByUser();
        // $data['userN'] = $this->Nilai_model->getUser();
        $this->load->view("layout/header", $data);
        $this->load->view("user/vw_nilai_mhs", $data);
        $this->load->view("layout/footer", $data);
    }

    public function get()
    {
        $this->db->select('n.*,r.nama as nama');
        $this->db->from('nilai n');
        $this->db->join('user r', 'n.id_user = r.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Nilai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['mhs'] = $this->Mahasiswa_model->get();
        // $this->form_validation->set_rules('id_mhs', 'Nama Mahasiswa', 'required', [
        //     'required' => 'Nama Mahasiswa Wajib di isi'
        // ]);
        $this->form_validation->set_rules('val_nama', 'Validasi Nama', 'required', [
            'required' => 'Validasi Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('ipk', 'Indeks Presentase Komulatif (IPK)', 'required', [
            'required' => 'IPK Wajib di isi'
        ]);
        $this->form_validation->set_rules('semester', 'Semester', 'required|integer', [
            'required' => 'Semester Wajib di isi'
        ]);
        // $this->form_validation->set_rules('bukti', 'Bukti', 'required', [
        //     'required' => 'Bukti Wajib di isi'
        // ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("user/vw_tambah_nilai", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                // 'id_mhs' => $this->input->post('id_mhs'),
                'id_user' => $this->input->post('id_user'),
                'val_nama' => $this->input->post('val_nama'),
                'ipk' => $this->input->post('ipk'),
                'semester' => $this->input->post('semester'),
            ];

            // if (!empty($_FILES['bukti']['name'])) {
            //     $image = $this->do_upload();
            //     $data['bukti'] = $image;
            // }
            $upload_image = $_FILES['bukti']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/nilai/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('bukti')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('bukti', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Nilai_model->insert($data,$upload_image);
            $this->session->set_flashdata('message', '<div class="m-alert m-alert--outline m-alert--outline-2x alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button> Data Nilai berhasil di Tambah
        </div>');
            redirect('NilaiUSR');
        }
    }
}
