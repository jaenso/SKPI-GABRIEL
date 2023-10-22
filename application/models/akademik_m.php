<?php

class akademik_m extends CI_Model
{
  public function getNilai()
  {
    $this->db->select('*');
    $this->db->from('tbl_nilai');
    return $this->db->get()->result();
  }

  public function getMBKM()
  {
    $this->db->select('*');
    $this->db->from('tbl_mbkm');
    return $this->db->get()->result();
  }

  public function tambahNilai($tambah)
  {
    $this->db->insert('tbl_nilai', $tambah);
  }

  public function tambahMBKM($tambah)
  {
    $this->db->insert('tbl_mbkm', $tambah);
  }

  public function hapusNilai($id)
  {
    $this->db->delete('tbl_nilai', ['id_nilai' => $id]);
  }

  public function getNilaiById($id)
  {
    return $this->db->get_where('tbl_nilai', ['id_nilai' => $id])->row_array();;
  }

  public function ubahNilai($id, $edit)
  {
    $this->db->where('id_nilai', $id);
    $this->db->update('tbl_nilai', $edit);
  }
}
