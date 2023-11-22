<?php
class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_login');
    $this->load->library('form_validation');
  }
  public function index()
  {
    // admin_already_login();
    $this->load->view('login');
  }
  public function process()
  {
    $post = $this->input->post(null, true);
    if (isset($post['login'])) {
      $data = $this->M_login->login($post);
      if ($data->num_rows() > 0) {
        $row = $data->row();
        $params = [
          'id_user' => $row->id_user,
          'username' => $row->username,
          'level' => $row->level

        ];
        $this->session->set_userdata($params);
        if ($params['level'] == 1) {
          redirect('pemilih');
        } else {
          redirect('kandidat');
        }
      } else {
        echo " <script> alert('sorry, username atau password tidak sesuai!');
        window.location = '" . base_url('login') . "'; 
        </script> ";
      }
    }
  }
  public function logout()
  {
    $params = ['id_user'];
    $this->session->unset_userdata($params);
    redirect('login');
  }
}
?>