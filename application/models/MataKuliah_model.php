<?php
class MataKuliah_model extends CI_Model
{
    public function insertMataKuliah($data)
    {
        $this->db->insert('tbl_nilai', $data);
        return $this->db->insert_id();
    }
}
