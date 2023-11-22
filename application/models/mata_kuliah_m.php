<?php

class mata_kuliah_m extends CI_Model
{
    public function getMatkulAdmin()
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');
        $this->db->group_by('semester');
        $this->db->order_by('semester', 'ASC');
        return $this->db->get()->result();
    }

    public function getPenilaian($id_khs, $nim)
    {
        $this->db->select('*');
        $this->db->from('tbl_penilaian pl');
        $this->db->join('tbl_matkul mk', 'pl.id_matkul = mk.id_matkul');
        $this->db->join('tbl_mahasiswa mhs', 'mhs.nim = pl.nim');
        $this->db->join('tbl_khs khs', 'khs.id_khs = pl.id_khs');
        $this->db->where('pl.nim', $nim);
        $this->db->where('pl.id_khs', $id_khs);

        return $this->db->get()->result();
    }

    public function getPenilaianSubmit($id_khs, $nim)
    {
        $this->db->select('*');
        $this->db->from('tbl_penilaian pl');
        $this->db->join('tbl_matkul mk', 'pl.id_matkul = mk.id_matkul');
        $this->db->join('tbl_mahasiswa mhs', 'mhs.nim = pl.nim');
        $this->db->join('tbl_khs khs', 'khs.id_khs = pl.id_khs');
        $this->db->where('pl.nim', $nim);
        $this->db->where('pl.id_khs', $id_khs);
        $this->db->where('pl.keterangan', 'Submit');

        return $this->db->get()->result();
    }

    public function getMatkulByIdAdmin($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');
        $this->db->where('id_matkul', $id);
        return $this->db->get()->row_array();
    }

    public function tambahMatkul($data)
    {
        $this->db->insert('tbl_matkul', $data);
    }

    public function EditMatkul($id, $edit)
    {
        $this->db->where('id_matkul', $id);
        $this->db->update('tbl_matkul', $edit);
    }

    public function hapusMatkul($id)
    {
        $this->db->delete('tbl_matkul', ['id_matkul' => $id]);
    }
}
