<?php

class skpi_m extends CI_Model
{
    public function getSKPIAdmin()
    {
        $this->db->select('*');
        $this->db->from('tbl_skpi skpi');
        $this->db->join('tbl_mahasiswa mhs', 'skpi.nim = mhs.nim');
        return $this->db->get()->result();
    }

    public function getSKPI($nim)
    {
        $this->db->select('*');
        $this->db->from('tbl_skpi');
        $this->db->where('nim', $nim);
        return $this->db->get()->result();
    }

    public function tambahSKPI($tambah)
    {
        $this->db->insert('tbl_skpi', $tambah);
    }

    public function getSKPIByIdAdmin($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_skpi skpi');
        $this->db->join('tbl_mahasiswa mhs', 'skpi.nim = mhs.nim');
        $this->db->where('skpi.id_skpi', $id);
        return $this->db->get()->row_array();
    }

    public function getSKPIById($id)
    {
        return $this->db->get_where('tbl_skpi', ['id_skpi' => $id])->row_array();;
    }

    public function TambahFileSKPI($nim, $tambah)
    {
        $this->db->where('nim', $nim);
        $this->db->update('tbl_skpi', $tambah);
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
