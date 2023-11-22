<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Kandidat extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kandidat_model', 'kandidat');
    $this->load->library('form_validation');
  }
  public function kandidat()
  {
    $data['title'] = 'kandidat';
    $data['kandidat'] = $this->M_kandidat->get_data();


    $this->load->view('kandidat/kandidat', $data);
  }
  public function tambah()
  {
    $data['title'] = 'tambah data toko';
    $this->form_validation->set_rules('visi', 'visi', 'required');
    if ($this->form_validation->run() == FALSE) {


      $this->load->view('kandidat/tambah', $data);
    } else {
      $this->M_kandidat->tambahkandidat();
      redirect('kandidat');
    }
  }
  public function edit($id)
  {
    $data['title'] = 'edit data kandidat';
    $data['kandidat'] = $this->M_kandidat->getkandidatById($id);
    $this->form_validation->set_rules('kapasitas', 'kapasitas', 'required');

    if ($this->form_validation->run() == FALSE) {


      $this->load->view('kandidat/edit', $data);
    } else {
      $this->M_kandidat->editkandidat($id);
      redirect('kandidat');
    }
  }
  public function detail($id)
  {
    $data['title'] = 'detai data toko';
    $data['kandidat'] = $this->M_kandidat->getkandidatById($id);


    $this->load->view('kandidat/detail', $data);
  }
  public function getId($id){
    $query = "SELECT * FROM hasil as h
            JOIN kandidat as k ON k.id_kandidat = h.id_kandidat
            JOIN pemilih as p ON p.id_pemilih = h.id_pemilih
            WHERE `id_hasil` = $id";
    return $this->db->query($query)->row_array();
}

  // public function index()
  // {
  //   $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
  //   $data['kandidat'] = $this->db->get('kandidat')->result_array();
  //   $cek = $this->session->userdata('id_user');
  //   $hasil = $this->db->get_where('hasil', ['id_pemilih' => $cek]);
  //   $banyak = $hasil->num_rows();

  //   if ($banyak >= 1) {
  //     $this->session->set_flashdata('message', '<small class="text-danger" >Anda Telat Mengisi Data</small>');
  //     redirect('login');
  //   } else {
  //     $this->load->view('template/header');
  //     $this->load->view('kandidat/index', $data);
  //     $this->load->view('template/footer');

  //   }
  // }

  // public function detail($id)
  // {
  //   $data['kandidat'] = $this->kandidat->getId($id);

  //   $this->load->view('template/header');
  //   $this->load->view('kandidat/detail', $data);
  //   $this->load->view('template/footer');
  // }

  // public function pilih($id)
  // {
  //   $this->form_validation->set_rules('id_kandidat', 'Kandidat', 'required');
  //   $this->form_validation->set_rules('id_pemilih', 'Pemilih', 'required');

  //   $data['kandidat'] = $this->kandidat->getId($id);
  //   $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();


  //   if ($this->form_validation->run() == FALSE) {
  //     $this->load->view('template/header');
  //     $this->load->view('kandidat/pilih', $data);
  //     $this->load->view('template/footer');
  //   } else {
  //     $this->kandidat->pilih();
  //     redirect('hasil/selamat');
  //   }
  // }
}






?>