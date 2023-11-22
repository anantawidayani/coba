<?php
class M_pemilih extends CI_Model
{
  public function get_data()
  {
    return $this->db->get('pemilih')->result_array();
  }
  public function tambahpemilih()
  {
    $data = [

      'username' => $this->input->post('username', true),
      'nama' => $this->input->post('nama', true),
      'password' => $this->input->post('password', true),
      'nisn' => $this->input->post('nisn', true),
      'alamat' => $this->input->post('alamat', true)
    ];
    $this->db->insert('pemilih', $data);

  }
  public function getpemilihById($id)
  {
    return $this->db->get_where('pemilih', ['id_pemilih' => $id])->row_array();
  }
  public function editpemilih()
  {
    $data = [
      'username' => $this->input->post('username', true),
      'nama' => $this->input->post('nama', true),
      'password' => $this->input->post('password', true),
      'nisn' => $this->input->post('nisn', true),
      'alamat' => $this->input->post('alamat', true)
    ];
    $this->db->where('id_pemilih', $this->input->post('id_pemilih'));
    $this->db->update('pemilih', $data);
  }

}
?>