<?php

class mahasiswa_m extends CI_Model
{
    public function getMahasiswaByUsername($username)
    {
        $this->db->select('m.*, u.*');
        $this->db->from('tbl_mahasiswa m');
        $this->db->join('user u', 'm.nim = u.username', 'inner');
        $this->db->where('u.username', $username);
        return $this->db->get()->row_array();
    }

    public function tambahMahasiswa($data)
    {
        $this->db->insert('tbl_mahasiswa', $data);
    }
}
