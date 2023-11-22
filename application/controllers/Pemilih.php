<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Pemilih extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pemilih');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'pemilih';
    $data['pemilih'] = $this->M_pemilih->get_data();


    $this->load->view('pemilih/pemilih', $data);
  }
  public function tambah()
  {
    $data['title'] = 'tambah data toko';
    $this->form_validation->set_rules('kapasitas', 'kapasitas', 'required');
    if ($this->form_validation->run() == FALSE) {


      $this->load->view('pemilih/tambah', $data);
    } else {
      $this->M_pemilih->tambahpemilih();
      redirect('pemilih');
    }
  }
  public function edit($id)
  {
    $data['title'] = 'edit data pemilih';
    $data['pemilih'] = $this->M_pemilih->getpemilihById($id);
    $this->form_validation->set_rules('kapasitas', 'kapasitas', 'required');

    if ($this->form_validation->run() == FALSE) {


      $this->load->view('pemilih/edit', $data);
    } else {
      $this->M_pemilih->editpemilih($id);
      redirect('pemilih');
    }
  }
  public function detail($id)
  {
    $data['title'] = 'detai data toko';
    $data['pemilih'] = $this->M_pemilih->getpemilihById($id);


    $this->load->view('pemilih/detail', $data);
  }
}




?>