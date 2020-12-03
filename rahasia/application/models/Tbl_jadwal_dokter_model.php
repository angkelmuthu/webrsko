<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_jadwal_dokter_model extends CI_Model
{

    public $table = 'tbl_jadwal_dokter';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,tahun,bulan,id_poli,senin,selasa,rabu,kamis,jumat,sabtu,minggu');
        $this->datatables->from('tbl_jadwal_dokter');
        //add this line for join
        //$this->datatables->join('table2', 'tbl_jadwal_dokter.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('tbl_jadwal_dokter/read/$1'),'<i class="fal fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-info btn-sm waves-effect waves-themed'))." 
            ".anchor(site_url('tbl_jadwal_dokter/update/$1'),'<i class="fal fa-pencil" aria-hidden="true"></i>', array('class' => 'btn btn-warning btn-sm waves-effect waves-themed'))." 
                ".anchor(site_url('tbl_jadwal_dokter/delete/$1'),'<i class="fal fa-trash" aria-hidden="true"></i>','class="btn btn-danger btn-sm waves-effect waves-themed" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('bulan', $q);
	$this->db->or_like('id_poli', $q);
	$this->db->or_like('senin', $q);
	$this->db->or_like('selasa', $q);
	$this->db->or_like('rabu', $q);
	$this->db->or_like('kamis', $q);
	$this->db->or_like('jumat', $q);
	$this->db->or_like('sabtu', $q);
	$this->db->or_like('minggu', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('bulan', $q);
	$this->db->or_like('id_poli', $q);
	$this->db->or_like('senin', $q);
	$this->db->or_like('selasa', $q);
	$this->db->or_like('rabu', $q);
	$this->db->or_like('kamis', $q);
	$this->db->or_like('jumat', $q);
	$this->db->or_like('sabtu', $q);
	$this->db->or_like('minggu', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Tbl_jadwal_dokter_model.php */
/* Location: ./application/models/Tbl_jadwal_dokter_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-12-02 05:42:00 */
/* http://harviacode.com */