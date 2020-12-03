<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelayanan extends CI_Model 
{
    public function all_pelayanan()
    {
        $query = $this->db->query("SELECT * FROM tbl_testimonial ORDER BY id ASC");
        return $query->result_array();
    }

    public function pelayanan_check($id) {
        $sql = 'SELECT * FROM tbl_testimonial WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->num_rows();
    }

    public function pelayanan_detail($id) {
        $sql = 'SELECT * FROM tbl_testimonial WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
}