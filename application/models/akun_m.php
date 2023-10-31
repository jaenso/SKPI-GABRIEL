<?php

class akun_m extends CI_Model
{
    public function tambahAkun($data)
    {
        $this->db->insert('user', $data);
    }

    public function editAktivasi($id, $data)
    {
        $this->db->where('username', $id);
        $this->db->update('user', $data);
    }

    public function countAkun($role)
    {
        $this->db->select('COUNT(*) as count');
        $this->db->from('user');
        $this->db->where('id_role', $role);
        $query = $this->db->get();
        return $query->row()->count;
    }

    public function countMahasiswaOffline($role, $status)
    {
        $this->db->select('COUNT(*) as count');
        $this->db->from('user');
        $this->db->where('id_role', $role);
        $this->db->where('validasi', $status);
        $query = $this->db->get();
        return $query->row()->count;
    }
}
