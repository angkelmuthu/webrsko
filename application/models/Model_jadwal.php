<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_jadwal extends CI_Model
{
    public function all_jadwal()
    {
        $tahun = date('Y');
        $bulan = date('m');
        $query = $this->db->query("SELECT * FROM tbl_jadwal_dokter where tahun=" . $tahun . " and bulan=" . $bulan . "");
        return $query->result_array();
    }

    // public function jadwal_check($id)
    // {
    //     $sql = 'SELECT * FROM tbl_jadwal WHERE id=?';
    //     $query = $this->db->query($sql, array($id));
    //     return $query->num_rows();
    // }

    // public function jadwal_detail($id)
    // {
    //     $sql = 'SELECT * FROM tbl_jadwal WHERE id=?';
    //     $query = $this->db->query($sql, array($id));
    //     return $query->first_row('array');
    // }
}
