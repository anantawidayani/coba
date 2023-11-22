<?php
class M_login extends CI_Model
{
  public function login($post)
  {
    $this->db->select('*');
    $this->db->from('user');
    // $this->db->from('pemilih');
    $this->db->where('username', $post['username']);
    // $this->db->where('level', $post['level']);
    $this->db->where('password', sha1($post['password']));

    $data = $this->db->get();
    return $data;


  }
  
  public function pemilih($post)
  {
    $this->db->select('*');
    $this->db->from('pemilih');
    // $this->db->from('pemilih');
    $this->db->where('username', $post['username']);
    // $this->db->where('level', $post['level']);
    $this->db->where('password', sha1($post['password']));

    $data = $this->db->get();
    return $data;


  }
  
}

?>