<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_hasil', 'hasil');
    $this->load->model('M_kandidat', 'kandidat');

  }

  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    $data['hasil'] = $this->db->get('hasil')->result_array();
    $cek = $this->session->userdata('id_user');
    $hasil = $this->db->get_where('hasil', ['id_pemilih' => $cek]);
    $banyak = $hasil->num_rows();

    if ($banyak >= 1) {
      $this->session->set_flashdata('message', '<small class="text-danger" >Anda Telat Mengisi Data</small>');
      redirect('login');
    } else {

      $this->load->view('hasil/hasil', $data);


    }
  }

  public function detail($id)
  {
    $data['hasil'] = $this->hasil->getId($id);


    $this->load->view('hasil/detail', $data);

  }

  public function pilih($id)
  {
    $this->form_validation->set_rules('id_kandidat', 'kandidat', 'required');
    $this->form_validation->set_rules('id_pemilih', 'Pemilih', 'required');

    $data['hasil'] = $this->hasil->getId($id);
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


    if ($this->form_validation->run() == FALSE) {

      $this->load->view('hasil/pilih', $data);

    } else {
      $this->hasil->pilih();
      echo " <script> alert('terimakasiih telah berpatisipasi!');
        window.location = '" . base_url('login') . "'; 
        </script> ";
    }
  }
}