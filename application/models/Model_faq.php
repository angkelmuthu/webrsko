<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_faq extends CI_Model 
{
    public function all_faq()
    {
        $query = $this->db->query("SELECT * FROM tbl_feature ORDER BY id ASC");
        return $query->result_array();
    }
}