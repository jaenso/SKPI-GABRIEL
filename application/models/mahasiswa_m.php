<?php

class mahasiswa_m extends CI_Model
{
    public function getNamaDanNIM()
    {
        $query = $this->db->select('nama, nim')->from('tbl_mahasiswa')->get();
        return $query->result();
    }

    public function getMahasiswaOffline($status)
    {
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa mhs');
        $this->db->join('user usr', 'mhs.nim = usr.username');
        $this->db->where('usr.validasi', $status);
        return $this->db->get()->result();
    }


    public function getMahasiswa()
    {
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa mhs');
        $this->db->join('user usr', 'mhs.nim = usr.username');
        return $this->db->get()->result();
    }

    public function getMahasiswaByAdmin($username)
    {
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa mhs');
        $this->db->join('user usr', 'mhs.nim = usr.username');
        $this->db->where('usr.username', $username);
        return $this->db->get()->row_array();
    }

    public function getMahasiswaByUsername($username)
    {
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa');
        $this->db->where('nim', $username);
        return $this->db->get()->row_array();
    }

    public function tambahMahasiswa($data)
    {
        $this->db->insert('tbl_mahasiswa', $data);
    }

    public function EditMahasiswa($username, $edit)
    {
        $this->db->where('nim', $username);
        $this->db->update('tbl_mahasiswa', $edit);
    }
}
