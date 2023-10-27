<?php

class akademik_m extends CI_Model
{
  public function getKHS($username)
  {
    $this->db->select('*');
    $this->db->from('tbl_khs');
    $this->db->where('nim', $username);
    return $this->db->get()->result();
  }

  public function getMBKM($username)
  {
    $this->db->select('*');
    $this->db->from('tbl_mbkm');
    $this->db->where('nim', $username);
    return $this->db->get()->result();
  }

  public function tambahKHS($tambah)
  {
    $this->db->insert('tbl_khs', $tambah);
  }

  public function getKHSById($id)
  {
    return $this->db->get_where('tbl_khs', ['id_khs' => $id])->row_array();;
  }

  public function EditKHS($id, $edit)
  {
    $this->db->where('id_khs', $id);
    $this->db->update('tbl_khs', $edit);
  }

  public function hapusKHS($id)
  {
    $this->db->delete('tbl_khs', ['id_khs' => $id]);
  }

  public function tambahMBKM($tambah)
  {
    $this->db->insert('tbl_mbkm', $tambah);
  }

  public function getMBKMById($id)
  {
    return $this->db->get_where('tbl_mbkm', ['id_mbkm' => $id])->row_array();;
  }

  public function ubahMBKM($id, $edit)
  {
    $this->db->where('id_mbkm', $id);
    $this->db->update('tbl_mbkm', $edit);
  }

  public function hapusMBKM($id)
  {
    $this->db->delete('tbl_mbkm', ['id_mbkm' => $id]);
  }
}
