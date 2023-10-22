<?php

class kegiatan_m extends CI_Model
{
    public function getKegiatan($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_keikutsertaan');
        $this->db->where('kategori', $data);
        return $this->db->get()->result();
    }

    public function tambahKegiatan($tambah)
    {
        $this->db->insert('tbl_keikutsertaan', $tambah);
    }

    public function hapusKegiatan($id)
    {
        $this->db->delete('tbl_keikutsertaan', ['id_nilai' => $id]);
    }

    public function getKegiatanById($id)
    {
        return $this->db->get_where('tbl_keikutsertaan', ['id_nilai' => $id])->row_array();;
    }

    public function ubahKegiatan($id, $edit)
    {
        $this->db->where('id_nilai', $id);
        $this->db->update('tbl_keikutsertaan', $edit);
    }
}
