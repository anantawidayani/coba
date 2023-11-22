<?php
class M_kandidat extends CI_Model
{
  public function get_data()
  {
    return $this->db->get('kandidat')->result_array();
  }
  public function tambahkandidat()
  {
    $data = [

      'nama_ketos' => $this->input->post('nama_ketos', true),
      'nama_waketos' => $this->input->post('nama_waketos', true),
      'image' => $this->input->post('image', true),
      'visi' => $this->input->post('visi', true),
      'misi' => $this->input->post('misi', true)
    ];
    $this->db->insert('kandidat', $data);

  }
  public function getkandidatById($id)
  {
    return $this->db->get_where('kandidat', ['id_kandidat' => $id])->row_array();
  }
  public function editkandidat()
  {
    $data = [
      'nama_ketos' => $this->input->post('nama_ketos', true),
      'nama_waketos' => $this->input->post('nama_waketos', true),
      'image' => $this->input->post('image', true),
      'visi' => $this->input->post('visi', true),
      'misi' => $this->input->post('misi', true)
    ];
    $this->db->where('id_kandidat', $this->input->post('id_kandidat'));
    $this->db->update('kandidat', $data);
  }
//   public function getId($id){
//     $query = "SELECT * FROM hasil as h
//             JOIN kandidat as k ON k.id_kandidat = h.id_kandidat
//             JOIN pemilih as p ON p.id_pemilih = h.id_pemilih
//             WHERE `id_hasil` = $id";
//     return $this->db->query($query)->row_array();
// }

}
?>