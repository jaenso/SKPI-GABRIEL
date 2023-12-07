<?php

class kegiatan_m extends CI_Model
{
    public function countKegiatan($kategori, $nim)
    {
        $this->db->select('COUNT(*) as count');
        $this->db->from('tbl_kegiatan');
        $this->db->where('kategori', $kategori);
        $this->db->where('nim', $nim);
        $query = $this->db->get();
        return $query->row()->count;
    }

    public function getKegiatanAdmin($kategori)
    {
        $this->db->select('*');
        $this->db->from('tbl_kegiatan kgt');
        $this->db->join('tbl_mahasiswa mhs', 'kgt.nim = mhs.nim');
        $this->db->where('kategori', $kategori);
        return $this->db->get()->result();
    }

    public function getKegiatan($kategori, $nim)
    {
        $this->db->select('*');
        $this->db->from('tbl_kegiatan');
        $this->db->where('kategori', $kategori);
        $this->db->where('nim', $nim);
        return $this->db->get()->result();
    }

    public function getKegiatanValid($kategori, $nim)
    {
        $this->db->select('*');
        $this->db->from('tbl_kegiatan');
        $this->db->where('kategori', $kategori);
        $this->db->where('nim', $nim);
        $this->db->where('validasi', 'VALID');
        return $this->db->get()->result();
    }

    public function tambahKegiatan($tambah)
    {
        $this->db->insert('tbl_kegiatan', $tambah);
    }

    public function hapusKegiatan($id)
    {
        $this->db->delete('tbl_kegiatan', ['id_kegiatan' => $id]);
    }

    public function getKegiatanByIdAdmin($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_kegiatan kgt');
        $this->db->join('tbl_mahasiswa mhs', 'kgt.nim = mhs.nim');
        $this->db->where('kgt.id_kegiatan', $id);
        return $this->db->get()->row_array();
    }

    public function getKegiatanById($id)
    {
        return $this->db->get_where('tbl_kegiatan', ['id_kegiatan' => $id])->row_array();;
    }

    public function ubahKegiatan($id, $edit)
    {
        $this->db->where('id_kegiatan', $id);
        $this->db->update('tbl_kegiatan', $edit);
    }
}
