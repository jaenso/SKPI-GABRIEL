<?php

class akademik_m extends CI_Model
{
  public function getKHSAdmin()
  {
    $this->db->select('*');
    $this->db->from('tbl_khs khs');
    $this->db->join('tbl_mahasiswa mhs', 'khs.nim = mhs.nim');
    return $this->db->get()->result();
  }

  public function getKHS($username)
  {
    $this->db->select('*');
    $this->db->from('tbl_khs');
    $this->db->where('nim', $username);
    return $this->db->get()->result();
  }

  public function getMBKMAdmin()
  {
    $this->db->select('*');
    $this->db->from('tbl_mbkm mbkm');
    $this->db->join('tbl_mahasiswa mhs', 'mbkm.nim = mhs.nim');
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

  public function tambahNilai($tambah)
  {
    $this->db->insert('tbl_penilaian', $tambah);
  }

  public function getKHSByIdAdmin($id)
  {
    $this->db->select('*')
      ->from('tbl_khs khs')
      ->join('tbl_mahasiswa mhs', 'khs.nim = mhs.nim')
      ->where('khs.id_khs', $id);
    return $this->db->get()->row_array();
  }

  public function getNilaiByIdAdmin($id)
  {
    $this->db->select('*')
      ->from('tbl_penilaian pl')
      ->join('tbl_khs khs', 'khs.id_khs = pl.id_khs')
      ->join('tbl_mahasiswa mhs', 'pl.nim = mhs.nim')
      ->where('pl.id_khs', $id);
    return $this->db->get()->row_array();
  }

  public function getNilaiAdmin($id)
  {
    $this->db->select('*')
      ->from('tbl_penilaian pl')
      ->join('tbl_khs khs', 'khs.id_khs = pl.id_khs')
      ->join('tbl_mahasiswa mhs', 'pl.nim = mhs.nim')
      ->where('pl.id_khs', $id);
    return $this->db->get()->result();
  }

  public function getKHSById($id)
  {
    $this->db->select('*')
      ->from('tbl_khs khs')
      ->join('tbl_mahasiswa mhs', 'khs.nim = mhs.nim')
      ->where('khs.id_khs', $id);
    return $this->db->get()->row_array();
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

  public function getMBKMByIdAdmin($id)
  {
    $this->db->select('*');
    $this->db->from('tbl_mbkm mbkm');
    $this->db->join('tbl_mahasiswa mhs', 'mbkm.nim = mhs.nim');
    $this->db->where('mbkm.id_mbkm', $id);
    return $this->db->get()->row_array();
  }

  public function getMBKMById($id)
  {
    return $this->db->get_where('tbl_mbkm', ['id_mbkm' => $id])->row_array();
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

  public function updateKeterangan()
  {
    $data = array('keterangan' => 'Submit');
    $this->db->update('tbl_penilaian', $data);
  }
}
