<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Mahasiswa');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer");
        } else {
            $this->cek_login();
        }
    }
    public function registrasi()
    {
        $this->load->view('layout/auth_header');
        $this->load->view('auth/registrasi');
        $this->load->view('layout/auth_footer');
    }

    public function validasi_regis(){
        if ($this->session->userdata('email')) {
            redirect('Admin');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim',
        [
            'required' => 'Username Wajib di isi']);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim',
        [
            'required' => 'Nama Wajib di isi']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi']);
        
        
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('layout/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('layout/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'role' => "User"];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akunmu telah berhasil terdaftar, Silahkan Login! </div>');
            redirect('auth');
        }
    }
    public function cek_login()
    {

        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($pass, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'Admin') {
                    redirect('Admin');
                } else {
                    redirect('User');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar! </div>');
            redirect('auth');
        }
    }

    // public function cek_login()
    // {
    //     $email = $this->input->post('email');
    //     $pass = $this->input->post('password');
    //     $user = $this->db->get_where('user', ['email' => $email])->row_array();


    //     if ($user) {
    //         if (password_verify($pass, $user['password'])) {
    //             $data = [
    //                 'email' => $user['email'],
    //                 'role' => $user['role'],
    //                 'id' => $user['id']
    //             ];

    //             $this->session->set_userdata($data);

    //             if ($user['role'] == "Admin") {
    //                 redirect('Admin');
    //             } else {
    //                 redirect('User');
    //             }
    //         } else {
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger" 
    //             role="alert">Password Salah!</div>');
    //             redirect("auth");
    //         }
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger" 
    //         role="alert">Email Belum Terdaftar! </div>');

    //         redirect("auth");
    //     }
    // }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout! </div>');
        redirect('Auth');
    }
}
