<?php

class skpi_m extends CI_Model
{
    public function getSKPI()
    {
        $this->db->select('*');
        $this->db->from('tbl_skpi');
        return $this->db->get()->result();
    }

    public function tambahSKPI($tambah)
    {
        $this->db->insert('tbl_skpi', $tambah);
    }

    public function getSKPIById($id)
    {
        return $this->db->get_where('tbl_skpi', ['id_skpi' => $id])->row_array();;
    }

    public function EditSKPI($id, $edit)
    {
        $this->db->where('id_skpi', $id);
        $this->db->update('tbl_skpi', $edit);
    }

    public function hapusSKPI($id)
    {
        $this->db->delete('tbl_skpi', ['id_skpi' => $id]);
    }
}
