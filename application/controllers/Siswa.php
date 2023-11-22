<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_kandidat');
    $this->load->library('form_validation');
  }

	
	public function index()
	{
    $data ['kandidat'] = $this->M_kandidat->get_data();
		$this->load->view('siswa', $data);
	}
}
