<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_page_home_model extends CI_Model
{

    public $table = 'tbl_page_home';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,title,meta_keyword,meta_description,home_welcome_title,home_welcome_subtitle,home_welcome_text,home_welcome_video,home_welcome_pbar1_text,home_welcome_pbar1_value,home_welcome_pbar2_text,home_welcome_pbar2_value,home_welcome_pbar3_text,home_welcome_pbar3_value,home_welcome_pbar4_text,home_welcome_pbar4_value,home_welcome_pbar5_text,home_welcome_pbar5_value,home_welcome_status,home_welcome_video_bg,home_why_choose_title,home_why_choose_subtitle,home_why_choose_status,home_feature_title,home_feature_subtitle,home_feature_status,home_service_title,home_service_subtitle,home_service_status,counter_1_title,counter_1_value,counter_1_icon,counter_2_title,counter_2_value,counter_2_icon,counter_3_title,counter_3_value,counter_3_icon,counter_4_title,counter_4_value,counter_4_icon,counter_photo,counter_status,home_portfolio_title,home_portfolio_subtitle,home_portfolio_status,home_booking_form_title,home_booking_faq_title,home_booking_status,home_booking_photo,home_team_title,home_team_subtitle,home_team_status,home_ptable_title,home_ptable_subtitle,home_ptable_status,home_testimonial_title,home_testimonial_subtitle,home_testimonial_photo,home_testimonial_status,home_blog_title,home_blog_subtitle,home_blog_item,home_blog_status,home_cta_text,home_cta_button_text,home_cta_button_url');
        $this->datatables->from('tbl_page_home');
        //add this line for join
        //$this->datatables->join('table2', 'tbl_page_home.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('tbl_page_home/read/$1'),'<i class="fal fa-eye" aria-hidden="true"></i>', array('class' => 'btn btn-info btn-sm waves-effect waves-themed'))." 
            ".anchor(site_url('tbl_page_home/update/$1'),'<i class="fal fa-pencil" aria-hidden="true"></i>', array('class' => 'btn btn-warning btn-sm waves-effect waves-themed'))." 
                ".anchor(site_url('tbl_page_home/delete/$1'),'<i class="fal fa-trash" aria-hidden="true"></i>','class="btn btn-danger btn-sm waves-effect waves-themed" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
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
	$this->db->or_like('title', $q);
	$this->db->or_like('meta_keyword', $q);
	$this->db->or_like('meta_description', $q);
	$this->db->or_like('home_welcome_title', $q);
	$this->db->or_like('home_welcome_subtitle', $q);
	$this->db->or_like('home_welcome_text', $q);
	$this->db->or_like('home_welcome_video', $q);
	$this->db->or_like('home_welcome_pbar1_text', $q);
	$this->db->or_like('home_welcome_pbar1_value', $q);
	$this->db->or_like('home_welcome_pbar2_text', $q);
	$this->db->or_like('home_welcome_pbar2_value', $q);
	$this->db->or_like('home_welcome_pbar3_text', $q);
	$this->db->or_like('home_welcome_pbar3_value', $q);
	$this->db->or_like('home_welcome_pbar4_text', $q);
	$this->db->or_like('home_welcome_pbar4_value', $q);
	$this->db->or_like('home_welcome_pbar5_text', $q);
	$this->db->or_like('home_welcome_pbar5_value', $q);
	$this->db->or_like('home_welcome_status', $q);
	$this->db->or_like('home_welcome_video_bg', $q);
	$this->db->or_like('home_why_choose_title', $q);
	$this->db->or_like('home_why_choose_subtitle', $q);
	$this->db->or_like('home_why_choose_status', $q);
	$this->db->or_like('home_feature_title', $q);
	$this->db->or_like('home_feature_subtitle', $q);
	$this->db->or_like('home_feature_status', $q);
	$this->db->or_like('home_service_title', $q);
	$this->db->or_like('home_service_subtitle', $q);
	$this->db->or_like('home_service_status', $q);
	$this->db->or_like('counter_1_title', $q);
	$this->db->or_like('counter_1_value', $q);
	$this->db->or_like('counter_1_icon', $q);
	$this->db->or_like('counter_2_title', $q);
	$this->db->or_like('counter_2_value', $q);
	$this->db->or_like('counter_2_icon', $q);
	$this->db->or_like('counter_3_title', $q);
	$this->db->or_like('counter_3_value', $q);
	$this->db->or_like('counter_3_icon', $q);
	$this->db->or_like('counter_4_title', $q);
	$this->db->or_like('counter_4_value', $q);
	$this->db->or_like('counter_4_icon', $q);
	$this->db->or_like('counter_photo', $q);
	$this->db->or_like('counter_status', $q);
	$this->db->or_like('home_portfolio_title', $q);
	$this->db->or_like('home_portfolio_subtitle', $q);
	$this->db->or_like('home_portfolio_status', $q);
	$this->db->or_like('home_booking_form_title', $q);
	$this->db->or_like('home_booking_faq_title', $q);
	$this->db->or_like('home_booking_status', $q);
	$this->db->or_like('home_booking_photo', $q);
	$this->db->or_like('home_team_title', $q);
	$this->db->or_like('home_team_subtitle', $q);
	$this->db->or_like('home_team_status', $q);
	$this->db->or_like('home_ptable_title', $q);
	$this->db->or_like('home_ptable_subtitle', $q);
	$this->db->or_like('home_ptable_status', $q);
	$this->db->or_like('home_testimonial_title', $q);
	$this->db->or_like('home_testimonial_subtitle', $q);
	$this->db->or_like('home_testimonial_photo', $q);
	$this->db->or_like('home_testimonial_status', $q);
	$this->db->or_like('home_blog_title', $q);
	$this->db->or_like('home_blog_subtitle', $q);
	$this->db->or_like('home_blog_item', $q);
	$this->db->or_like('home_blog_status', $q);
	$this->db->or_like('home_cta_text', $q);
	$this->db->or_like('home_cta_button_text', $q);
	$this->db->or_like('home_cta_button_url', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('title', $q);
	$this->db->or_like('meta_keyword', $q);
	$this->db->or_like('meta_description', $q);
	$this->db->or_like('home_welcome_title', $q);
	$this->db->or_like('home_welcome_subtitle', $q);
	$this->db->or_like('home_welcome_text', $q);
	$this->db->or_like('home_welcome_video', $q);
	$this->db->or_like('home_welcome_pbar1_text', $q);
	$this->db->or_like('home_welcome_pbar1_value', $q);
	$this->db->or_like('home_welcome_pbar2_text', $q);
	$this->db->or_like('home_welcome_pbar2_value', $q);
	$this->db->or_like('home_welcome_pbar3_text', $q);
	$this->db->or_like('home_welcome_pbar3_value', $q);
	$this->db->or_like('home_welcome_pbar4_text', $q);
	$this->db->or_like('home_welcome_pbar4_value', $q);
	$this->db->or_like('home_welcome_pbar5_text', $q);
	$this->db->or_like('home_welcome_pbar5_value', $q);
	$this->db->or_like('home_welcome_status', $q);
	$this->db->or_like('home_welcome_video_bg', $q);
	$this->db->or_like('home_why_choose_title', $q);
	$this->db->or_like('home_why_choose_subtitle', $q);
	$this->db->or_like('home_why_choose_status', $q);
	$this->db->or_like('home_feature_title', $q);
	$this->db->or_like('home_feature_subtitle', $q);
	$this->db->or_like('home_feature_status', $q);
	$this->db->or_like('home_service_title', $q);
	$this->db->or_like('home_service_subtitle', $q);
	$this->db->or_like('home_service_status', $q);
	$this->db->or_like('counter_1_title', $q);
	$this->db->or_like('counter_1_value', $q);
	$this->db->or_like('counter_1_icon', $q);
	$this->db->or_like('counter_2_title', $q);
	$this->db->or_like('counter_2_value', $q);
	$this->db->or_like('counter_2_icon', $q);
	$this->db->or_like('counter_3_title', $q);
	$this->db->or_like('counter_3_value', $q);
	$this->db->or_like('counter_3_icon', $q);
	$this->db->or_like('counter_4_title', $q);
	$this->db->or_like('counter_4_value', $q);
	$this->db->or_like('counter_4_icon', $q);
	$this->db->or_like('counter_photo', $q);
	$this->db->or_like('counter_status', $q);
	$this->db->or_like('home_portfolio_title', $q);
	$this->db->or_like('home_portfolio_subtitle', $q);
	$this->db->or_like('home_portfolio_status', $q);
	$this->db->or_like('home_booking_form_title', $q);
	$this->db->or_like('home_booking_faq_title', $q);
	$this->db->or_like('home_booking_status', $q);
	$this->db->or_like('home_booking_photo', $q);
	$this->db->or_like('home_team_title', $q);
	$this->db->or_like('home_team_subtitle', $q);
	$this->db->or_like('home_team_status', $q);
	$this->db->or_like('home_ptable_title', $q);
	$this->db->or_like('home_ptable_subtitle', $q);
	$this->db->or_like('home_ptable_status', $q);
	$this->db->or_like('home_testimonial_title', $q);
	$this->db->or_like('home_testimonial_subtitle', $q);
	$this->db->or_like('home_testimonial_photo', $q);
	$this->db->or_like('home_testimonial_status', $q);
	$this->db->or_like('home_blog_title', $q);
	$this->db->or_like('home_blog_subtitle', $q);
	$this->db->or_like('home_blog_item', $q);
	$this->db->or_like('home_blog_status', $q);
	$this->db->or_like('home_cta_text', $q);
	$this->db->or_like('home_cta_button_text', $q);
	$this->db->or_like('home_cta_button_url', $q);
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

/* End of file Tbl_page_home_model.php */
/* Location: ./application/models/Tbl_page_home_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 04:44:50 */
/* http://harviacode.com */