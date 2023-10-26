<?php

class akun_m extends CI_Model
{
    public function tambahAkun($tambah_data)
    {
        $this->db->insert('user', $tambah_data);
    }
}
