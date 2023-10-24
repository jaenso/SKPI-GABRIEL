<?php

class kegiatan_m extends CI_Model
{
    public function getKegiatan($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_kegiatan');
        $this->db->where('kategori', $data);
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
