<?php

class mahasiswa_m extends CI_Model
{
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
