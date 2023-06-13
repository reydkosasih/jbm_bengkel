<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_controller
{
  public function __construct()
  {
    #untuk validasi form aktif
    parent::__construct();
    if ($this->session->userdata('username') === false) {
      redirect('auth');
    }
    $this->load->library('form_validation');
  }

  public function index()
  {
    #biar ga asal logout
    if ($this->session->userdata('username')) {
      redirect('user/idlepage');
    }

    #halaman login utama
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Admin - JBM';
      $this->load->view('auth/vlogin', $data);
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
    // $user = $this->db->get_where('tbl_user', ['password' => $password])->row_array();

    if ($user) {
      # user ada
      if ($user['is_active'] == 1) {
        # akun sudah aktif cek password
        if (password_verify($password, $user['password'])) {
          # pass benar
          $data = [
            'username' => $user['username'],
            'role_id' => $user['role_id'],
          ];
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('admin');
          } elseif ($user['role_id'] == 2) {
            redirect('landing');
          } else {
            redirect('laporan/transaksi_owner');
          }
        } else {
          # salah password
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login failed! Wrong password! </div>');
          redirect('auth');
        }
      } else {
        # akun belum aktif
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login failed! Account is not activated. Please confirm administrator to activate. </div>');
        redirect('auth');
      }
    } else {
      # user ga terdaftar
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login failed! Account not available. Please check again your information. </div>');
      redirect('auth');
    }
  }

  public function register()
  {
    #biar ga asal logout
    if ($this->session->userdata('username')) {
      // redirect('user/idlepage');
      redirect('admin');
    }

    #registrasi user
    $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required|trim');
    $this->form_validation->set_rules('nickname', 'nickname', 'required|trim');
    $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tbl_user.username]', [
      'is_unique' => 'This username has already registered!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tbl_user.email]', [
      'is_unique' => 'This email has already registered!'
    ]);
    $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
      'matches' => 'Password not match! Please try again.',
      'min_length' => 'Password minimum 6 character.'
    ]);

    $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|matches[password1]');


    if ($this->form_validation->run() == false) {
      $data['title'] = 'Registrasi Akun - JBM';
      $this->load->view('auth/vregister', $data);
    } else {
      $data = [
        'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
        'nickname' => htmlspecialchars($this->input->post('nickname', true)),
        'username' => htmlspecialchars($this->input->post('username', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
        'image' => 'default.jpg',
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];

      $this->db->insert('tbl_user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Account has successfully created!</div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    #logout sesi user
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out! </div>');
    redirect('auth');
  }

  public function blocked()
  {
    $this->load->view('auth/blocked');
  }
}
