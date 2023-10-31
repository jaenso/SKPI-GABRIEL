<?php
class mata_kuliah_m extends CI_Model
{
    public function getMataKuliah()
    {
        $query =
            $this->db->select('*')
            ->from('tbl_matkul')->order_by('semester', 'ASC')
            ->get();
        return $query->result();
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function tambahMatkul($data)
    {
        $this->db->insert('tbl_matkul', $data);
    }

    public function getMKById($id)
    {
        return $this->db->get_where('tbl_matkul', ['id_matkul' => $id])->row_array();;
    }

    public function editMatkul($id, $data)
    {
        $this->db->where('id_matkul', $id);
        $this->db->update('tbl_matkul', $data);
    }

    public function hapusMatkul($id)
    {
        $this->db->delete('tbl_matkul', ['id_matkul' => $id]);
    }

    public function insertNilai($data)
    {
        $this->db->insert('tbl_nilai', $data);
    }
}
