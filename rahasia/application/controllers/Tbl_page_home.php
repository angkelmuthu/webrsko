<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Tbl_page_home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Tbl_page_home_model');
		$this->load->library('form_validation');
		$this->load->library('datatables');
	}

	public function index()
	{
		$this->template->load('template', 'tbl_page_home/tbl_page_home_list');
	}

	public function json()
	{
		header('Content-Type: application/json');
		echo $this->Tbl_page_home_model->json();
	}

	public function read($id)
	{
		$row = $this->Tbl_page_home_model->get_by_id($id);
		if ($row) {
			$data = array(
				'id' => $row->id,
				'title' => $row->title,
				'meta_keyword' => $row->meta_keyword,
				'meta_description' => $row->meta_description,
				'home_welcome_title' => $row->home_welcome_title,
				'home_welcome_subtitle' => $row->home_welcome_subtitle,
				'home_welcome_text' => $row->home_welcome_text,
				'home_welcome_video' => $row->home_welcome_video,
				'home_welcome_pbar1_text' => $row->home_welcome_pbar1_text,
				'home_welcome_pbar1_value' => $row->home_welcome_pbar1_value,
				'home_welcome_pbar2_text' => $row->home_welcome_pbar2_text,
				'home_welcome_pbar2_value' => $row->home_welcome_pbar2_value,
				'home_welcome_pbar3_text' => $row->home_welcome_pbar3_text,
				'home_welcome_pbar3_value' => $row->home_welcome_pbar3_value,
				'home_welcome_pbar4_text' => $row->home_welcome_pbar4_text,
				'home_welcome_pbar4_value' => $row->home_welcome_pbar4_value,
				'home_welcome_pbar5_text' => $row->home_welcome_pbar5_text,
				'home_welcome_pbar5_value' => $row->home_welcome_pbar5_value,
				'home_welcome_status' => $row->home_welcome_status,
				'home_welcome_video_bg' => $row->home_welcome_video_bg,
				'home_why_choose_title' => $row->home_why_choose_title,
				'home_why_choose_subtitle' => $row->home_why_choose_subtitle,
				'home_why_choose_status' => $row->home_why_choose_status,
				'home_feature_title' => $row->home_feature_title,
				'home_feature_subtitle' => $row->home_feature_subtitle,
				'home_feature_status' => $row->home_feature_status,
				'home_service_title' => $row->home_service_title,
				'home_service_subtitle' => $row->home_service_subtitle,
				'home_service_status' => $row->home_service_status,
				'counter_1_title' => $row->counter_1_title,
				'counter_1_value' => $row->counter_1_value,
				'counter_1_icon' => $row->counter_1_icon,
				'counter_2_title' => $row->counter_2_title,
				'counter_2_value' => $row->counter_2_value,
				'counter_2_icon' => $row->counter_2_icon,
				'counter_3_title' => $row->counter_3_title,
				'counter_3_value' => $row->counter_3_value,
				'counter_3_icon' => $row->counter_3_icon,
				'counter_4_title' => $row->counter_4_title,
				'counter_4_value' => $row->counter_4_value,
				'counter_4_icon' => $row->counter_4_icon,
				'counter_photo' => $row->counter_photo,
				'counter_status' => $row->counter_status,
				'home_portfolio_title' => $row->home_portfolio_title,
				'home_portfolio_subtitle' => $row->home_portfolio_subtitle,
				'home_portfolio_status' => $row->home_portfolio_status,
				'home_booking_form_title' => $row->home_booking_form_title,
				'home_booking_faq_title' => $row->home_booking_faq_title,
				'home_booking_status' => $row->home_booking_status,
				'home_booking_photo' => $row->home_booking_photo,
				'home_team_title' => $row->home_team_title,
				'home_team_subtitle' => $row->home_team_subtitle,
				'home_team_status' => $row->home_team_status,
				'home_ptable_title' => $row->home_ptable_title,
				'home_ptable_subtitle' => $row->home_ptable_subtitle,
				'home_ptable_status' => $row->home_ptable_status,
				'home_testimonial_title' => $row->home_testimonial_title,
				'home_testimonial_subtitle' => $row->home_testimonial_subtitle,
				'home_testimonial_photo' => $row->home_testimonial_photo,
				'home_testimonial_status' => $row->home_testimonial_status,
				'home_blog_title' => $row->home_blog_title,
				'home_blog_subtitle' => $row->home_blog_subtitle,
				'home_blog_item' => $row->home_blog_item,
				'home_blog_status' => $row->home_blog_status,
				'home_cta_text' => $row->home_cta_text,
				'home_cta_button_text' => $row->home_cta_button_text,
				'home_cta_button_url' => $row->home_cta_button_url,
			);
			$this->template->load('template', 'tbl_page_home/tbl_page_home_read', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
			redirect(site_url('tbl_page_home'));
		}
	}

	public function create()
	{
		$data = array(
			'button' => 'Create',
			'action' => site_url('tbl_page_home/create_action'),
			'id' => set_value('id'),
			'title' => set_value('title'),
			'meta_keyword' => set_value('meta_keyword'),
			'meta_description' => set_value('meta_description'),
			'home_welcome_title' => set_value('home_welcome_title'),
			'home_welcome_subtitle' => set_value('home_welcome_subtitle'),
			'home_welcome_text' => set_value('home_welcome_text'),
			'home_welcome_video' => set_value('home_welcome_video'),
			'home_welcome_pbar1_text' => set_value('home_welcome_pbar1_text'),
			'home_welcome_pbar1_value' => set_value('home_welcome_pbar1_value'),
			'home_welcome_pbar2_text' => set_value('home_welcome_pbar2_text'),
			'home_welcome_pbar2_value' => set_value('home_welcome_pbar2_value'),
			'home_welcome_pbar3_text' => set_value('home_welcome_pbar3_text'),
			'home_welcome_pbar3_value' => set_value('home_welcome_pbar3_value'),
			'home_welcome_pbar4_text' => set_value('home_welcome_pbar4_text'),
			'home_welcome_pbar4_value' => set_value('home_welcome_pbar4_value'),
			'home_welcome_pbar5_text' => set_value('home_welcome_pbar5_text'),
			'home_welcome_pbar5_value' => set_value('home_welcome_pbar5_value'),
			'home_welcome_status' => set_value('home_welcome_status'),
			'home_welcome_video_bg' => set_value('home_welcome_video_bg'),
			'home_why_choose_title' => set_value('home_why_choose_title'),
			'home_why_choose_subtitle' => set_value('home_why_choose_subtitle'),
			'home_why_choose_status' => set_value('home_why_choose_status'),
			'home_feature_title' => set_value('home_feature_title'),
			'home_feature_subtitle' => set_value('home_feature_subtitle'),
			'home_feature_status' => set_value('home_feature_status'),
			'home_service_title' => set_value('home_service_title'),
			'home_service_subtitle' => set_value('home_service_subtitle'),
			'home_service_status' => set_value('home_service_status'),
			'counter_1_title' => set_value('counter_1_title'),
			'counter_1_value' => set_value('counter_1_value'),
			'counter_1_icon' => set_value('counter_1_icon'),
			'counter_2_title' => set_value('counter_2_title'),
			'counter_2_value' => set_value('counter_2_value'),
			'counter_2_icon' => set_value('counter_2_icon'),
			'counter_3_title' => set_value('counter_3_title'),
			'counter_3_value' => set_value('counter_3_value'),
			'counter_3_icon' => set_value('counter_3_icon'),
			'counter_4_title' => set_value('counter_4_title'),
			'counter_4_value' => set_value('counter_4_value'),
			'counter_4_icon' => set_value('counter_4_icon'),
			'counter_photo' => set_value('counter_photo'),
			'counter_status' => set_value('counter_status'),
			'home_portfolio_title' => set_value('home_portfolio_title'),
			'home_portfolio_subtitle' => set_value('home_portfolio_subtitle'),
			'home_portfolio_status' => set_value('home_portfolio_status'),
			'home_booking_form_title' => set_value('home_booking_form_title'),
			'home_booking_faq_title' => set_value('home_booking_faq_title'),
			'home_booking_status' => set_value('home_booking_status'),
			'home_booking_photo' => set_value('home_booking_photo'),
			'home_team_title' => set_value('home_team_title'),
			'home_team_subtitle' => set_value('home_team_subtitle'),
			'home_team_status' => set_value('home_team_status'),
			'home_ptable_title' => set_value('home_ptable_title'),
			'home_ptable_subtitle' => set_value('home_ptable_subtitle'),
			'home_ptable_status' => set_value('home_ptable_status'),
			'home_testimonial_title' => set_value('home_testimonial_title'),
			'home_testimonial_subtitle' => set_value('home_testimonial_subtitle'),
			'home_testimonial_photo' => set_value('home_testimonial_photo'),
			'home_testimonial_status' => set_value('home_testimonial_status'),
			'home_blog_title' => set_value('home_blog_title'),
			'home_blog_subtitle' => set_value('home_blog_subtitle'),
			'home_blog_item' => set_value('home_blog_item'),
			'home_blog_status' => set_value('home_blog_status'),
			'home_cta_text' => set_value('home_cta_text'),
			'home_cta_button_text' => set_value('home_cta_button_text'),
			'home_cta_button_url' => set_value('home_cta_button_url'),
		);
		$this->template->load('template', 'tbl_page_home/tbl_page_home_form', $data);
	}

	public function create_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = array(
				'title' => $this->input->post('title', TRUE),
				'meta_keyword' => $this->input->post('meta_keyword', TRUE),
				'meta_description' => $this->input->post('meta_description', TRUE),
				'home_welcome_title' => $this->input->post('home_welcome_title', TRUE),
				'home_welcome_subtitle' => $this->input->post('home_welcome_subtitle', TRUE),
				'home_welcome_text' => $this->input->post('home_welcome_text', TRUE),
				'home_welcome_video' => $this->input->post('home_welcome_video', TRUE),
				'home_welcome_pbar1_text' => $this->input->post('home_welcome_pbar1_text', TRUE),
				'home_welcome_pbar1_value' => $this->input->post('home_welcome_pbar1_value', TRUE),
				'home_welcome_pbar2_text' => $this->input->post('home_welcome_pbar2_text', TRUE),
				'home_welcome_pbar2_value' => $this->input->post('home_welcome_pbar2_value', TRUE),
				'home_welcome_pbar3_text' => $this->input->post('home_welcome_pbar3_text', TRUE),
				'home_welcome_pbar3_value' => $this->input->post('home_welcome_pbar3_value', TRUE),
				'home_welcome_pbar4_text' => $this->input->post('home_welcome_pbar4_text', TRUE),
				'home_welcome_pbar4_value' => $this->input->post('home_welcome_pbar4_value', TRUE),
				'home_welcome_pbar5_text' => $this->input->post('home_welcome_pbar5_text', TRUE),
				'home_welcome_pbar5_value' => $this->input->post('home_welcome_pbar5_value', TRUE),
				'home_welcome_status' => $this->input->post('home_welcome_status', TRUE),
				'home_welcome_video_bg' => $this->input->post('home_welcome_video_bg', TRUE),
				'home_why_choose_title' => $this->input->post('home_why_choose_title', TRUE),
				'home_why_choose_subtitle' => $this->input->post('home_why_choose_subtitle', TRUE),
				'home_why_choose_status' => $this->input->post('home_why_choose_status', TRUE),
				'home_feature_title' => $this->input->post('home_feature_title', TRUE),
				'home_feature_subtitle' => $this->input->post('home_feature_subtitle', TRUE),
				'home_feature_status' => $this->input->post('home_feature_status', TRUE),
				'home_service_title' => $this->input->post('home_service_title', TRUE),
				'home_service_subtitle' => $this->input->post('home_service_subtitle', TRUE),
				'home_service_status' => $this->input->post('home_service_status', TRUE),
				'counter_1_title' => $this->input->post('counter_1_title', TRUE),
				'counter_1_value' => $this->input->post('counter_1_value', TRUE),
				'counter_1_icon' => $this->input->post('counter_1_icon', TRUE),
				'counter_2_title' => $this->input->post('counter_2_title', TRUE),
				'counter_2_value' => $this->input->post('counter_2_value', TRUE),
				'counter_2_icon' => $this->input->post('counter_2_icon', TRUE),
				'counter_3_title' => $this->input->post('counter_3_title', TRUE),
				'counter_3_value' => $this->input->post('counter_3_value', TRUE),
				'counter_3_icon' => $this->input->post('counter_3_icon', TRUE),
				'counter_4_title' => $this->input->post('counter_4_title', TRUE),
				'counter_4_value' => $this->input->post('counter_4_value', TRUE),
				'counter_4_icon' => $this->input->post('counter_4_icon', TRUE),
				'counter_photo' => $this->input->post('counter_photo', TRUE),
				'counter_status' => $this->input->post('counter_status', TRUE),
				'home_portfolio_title' => $this->input->post('home_portfolio_title', TRUE),
				'home_portfolio_subtitle' => $this->input->post('home_portfolio_subtitle', TRUE),
				'home_portfolio_status' => $this->input->post('home_portfolio_status', TRUE),
				'home_booking_form_title' => $this->input->post('home_booking_form_title', TRUE),
				'home_booking_faq_title' => $this->input->post('home_booking_faq_title', TRUE),
				'home_booking_status' => $this->input->post('home_booking_status', TRUE),
				'home_booking_photo' => $this->input->post('home_booking_photo', TRUE),
				'home_team_title' => $this->input->post('home_team_title', TRUE),
				'home_team_subtitle' => $this->input->post('home_team_subtitle', TRUE),
				'home_team_status' => $this->input->post('home_team_status', TRUE),
				'home_ptable_title' => $this->input->post('home_ptable_title', TRUE),
				'home_ptable_subtitle' => $this->input->post('home_ptable_subtitle', TRUE),
				'home_ptable_status' => $this->input->post('home_ptable_status', TRUE),
				'home_testimonial_title' => $this->input->post('home_testimonial_title', TRUE),
				'home_testimonial_subtitle' => $this->input->post('home_testimonial_subtitle', TRUE),
				'home_testimonial_photo' => $this->input->post('home_testimonial_photo', TRUE),
				'home_testimonial_status' => $this->input->post('home_testimonial_status', TRUE),
				'home_blog_title' => $this->input->post('home_blog_title', TRUE),
				'home_blog_subtitle' => $this->input->post('home_blog_subtitle', TRUE),
				'home_blog_item' => $this->input->post('home_blog_item', TRUE),
				'home_blog_status' => $this->input->post('home_blog_status', TRUE),
				'home_cta_text' => $this->input->post('home_cta_text', TRUE),
				'home_cta_button_text' => $this->input->post('home_cta_button_text', TRUE),
				'home_cta_button_url' => $this->input->post('home_cta_button_url', TRUE),
			);

			$this->Tbl_page_home_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
			redirect(site_url('tbl_page_home'));
		}
	}

	public function update($id)
	{
		$row = $this->Tbl_page_home_model->get_by_id($id);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('tbl_page_home/update_action'),
				'id' => set_value('id', $row->id),
				'title' => set_value('title', $row->title),
				'meta_keyword' => set_value('meta_keyword', $row->meta_keyword),
				'meta_description' => set_value('meta_description', $row->meta_description),
				'home_welcome_title' => set_value('home_welcome_title', $row->home_welcome_title),
				'home_welcome_subtitle' => set_value('home_welcome_subtitle', $row->home_welcome_subtitle),
				'home_welcome_text' => set_value('home_welcome_text', $row->home_welcome_text),
				'home_welcome_video' => set_value('home_welcome_video', $row->home_welcome_video),
				// 'home_welcome_pbar1_text' => set_value('home_welcome_pbar1_text', $row->home_welcome_pbar1_text),
				// 'home_welcome_pbar1_value' => set_value('home_welcome_pbar1_value', $row->home_welcome_pbar1_value),
				// 'home_welcome_pbar2_text' => set_value('home_welcome_pbar2_text', $row->home_welcome_pbar2_text),
				// 'home_welcome_pbar2_value' => set_value('home_welcome_pbar2_value', $row->home_welcome_pbar2_value),
				// 'home_welcome_pbar3_text' => set_value('home_welcome_pbar3_text', $row->home_welcome_pbar3_text),
				// 'home_welcome_pbar3_value' => set_value('home_welcome_pbar3_value', $row->home_welcome_pbar3_value),
				// 'home_welcome_pbar4_text' => set_value('home_welcome_pbar4_text', $row->home_welcome_pbar4_text),
				// 'home_welcome_pbar4_value' => set_value('home_welcome_pbar4_value', $row->home_welcome_pbar4_value),
				// 'home_welcome_pbar5_text' => set_value('home_welcome_pbar5_text', $row->home_welcome_pbar5_text),
				// 'home_welcome_pbar5_value' => set_value('home_welcome_pbar5_value', $row->home_welcome_pbar5_value),
				// 'home_welcome_status' => set_value('home_welcome_status', $row->home_welcome_status),
				// 'home_welcome_video_bg' => set_value('home_welcome_video_bg', $row->home_welcome_video_bg),
				// 'home_why_choose_title' => set_value('home_why_choose_title', $row->home_why_choose_title),
				// 'home_why_choose_subtitle' => set_value('home_why_choose_subtitle', $row->home_why_choose_subtitle),
				// 'home_why_choose_status' => set_value('home_why_choose_status', $row->home_why_choose_status),
				// 'home_feature_title' => set_value('home_feature_title', $row->home_feature_title),
				// 'home_feature_subtitle' => set_value('home_feature_subtitle', $row->home_feature_subtitle),
				// 'home_feature_status' => set_value('home_feature_status', $row->home_feature_status),
				// 'home_service_title' => set_value('home_service_title', $row->home_service_title),
				// 'home_service_subtitle' => set_value('home_service_subtitle', $row->home_service_subtitle),
				// 'home_service_status' => set_value('home_service_status', $row->home_service_status),
				// 'counter_1_title' => set_value('counter_1_title', $row->counter_1_title),
				// 'counter_1_value' => set_value('counter_1_value', $row->counter_1_value),
				// 'counter_1_icon' => set_value('counter_1_icon', $row->counter_1_icon),
				// 'counter_2_title' => set_value('counter_2_title', $row->counter_2_title),
				// 'counter_2_value' => set_value('counter_2_value', $row->counter_2_value),
				// 'counter_2_icon' => set_value('counter_2_icon', $row->counter_2_icon),
				// 'counter_3_title' => set_value('counter_3_title', $row->counter_3_title),
				// 'counter_3_value' => set_value('counter_3_value', $row->counter_3_value),
				// 'counter_3_icon' => set_value('counter_3_icon', $row->counter_3_icon),
				// 'counter_4_title' => set_value('counter_4_title', $row->counter_4_title),
				// 'counter_4_value' => set_value('counter_4_value', $row->counter_4_value),
				// 'counter_4_icon' => set_value('counter_4_icon', $row->counter_4_icon),
				// 'counter_photo' => set_value('counter_photo', $row->counter_photo),
				// 'counter_status' => set_value('counter_status', $row->counter_status),
				// 'home_portfolio_title' => set_value('home_portfolio_title', $row->home_portfolio_title),
				// 'home_portfolio_subtitle' => set_value('home_portfolio_subtitle', $row->home_portfolio_subtitle),
				// 'home_portfolio_status' => set_value('home_portfolio_status', $row->home_portfolio_status),
				// 'home_booking_form_title' => set_value('home_booking_form_title', $row->home_booking_form_title),
				// 'home_booking_faq_title' => set_value('home_booking_faq_title', $row->home_booking_faq_title),
				// 'home_booking_status' => set_value('home_booking_status', $row->home_booking_status),
				// 'home_booking_photo' => set_value('home_booking_photo', $row->home_booking_photo),
				// 'home_team_title' => set_value('home_team_title', $row->home_team_title),
				// 'home_team_subtitle' => set_value('home_team_subtitle', $row->home_team_subtitle),
				// 'home_team_status' => set_value('home_team_status', $row->home_team_status),
				// 'home_ptable_title' => set_value('home_ptable_title', $row->home_ptable_title),
				// 'home_ptable_subtitle' => set_value('home_ptable_subtitle', $row->home_ptable_subtitle),
				// 'home_ptable_status' => set_value('home_ptable_status', $row->home_ptable_status),
				// 'home_testimonial_title' => set_value('home_testimonial_title', $row->home_testimonial_title),
				// 'home_testimonial_subtitle' => set_value('home_testimonial_subtitle', $row->home_testimonial_subtitle),
				// 'home_testimonial_photo' => set_value('home_testimonial_photo', $row->home_testimonial_photo),
				// 'home_testimonial_status' => set_value('home_testimonial_status', $row->home_testimonial_status),
				// 'home_blog_title' => set_value('home_blog_title', $row->home_blog_title),
				// 'home_blog_subtitle' => set_value('home_blog_subtitle', $row->home_blog_subtitle),
				// 'home_blog_item' => set_value('home_blog_item', $row->home_blog_item),
				// 'home_blog_status' => set_value('home_blog_status', $row->home_blog_status),
				// 'home_cta_text' => set_value('home_cta_text', $row->home_cta_text),
				// 'home_cta_button_text' => set_value('home_cta_button_text', $row->home_cta_button_text),
				// 'home_cta_button_url' => set_value('home_cta_button_url', $row->home_cta_button_url),
			);
			$this->template->load('template', 'tbl_page_home/tbl_page_home_form', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
			redirect(site_url('tbl_page_home'));
		}
	}

	public function update_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update($this->input->post('id', TRUE));
		} else {
			$data = array(
				'title' => $this->input->post('title', TRUE),
				'meta_keyword' => $this->input->post('meta_keyword', TRUE),
				'meta_description' => $this->input->post('meta_description', TRUE),
				'home_welcome_title' => $this->input->post('home_welcome_title', TRUE),
				'home_welcome_subtitle' => $this->input->post('home_welcome_subtitle', TRUE),
				'home_welcome_text' => $this->input->post('home_welcome_text', TRUE),
				'home_welcome_video' => $this->input->post('home_welcome_video', TRUE),
				// 'home_welcome_pbar1_text' => $this->input->post('home_welcome_pbar1_text', TRUE),
				// 'home_welcome_pbar1_value' => $this->input->post('home_welcome_pbar1_value', TRUE),
				// 'home_welcome_pbar2_text' => $this->input->post('home_welcome_pbar2_text', TRUE),
				// 'home_welcome_pbar2_value' => $this->input->post('home_welcome_pbar2_value', TRUE),
				// 'home_welcome_pbar3_text' => $this->input->post('home_welcome_pbar3_text', TRUE),
				// 'home_welcome_pbar3_value' => $this->input->post('home_welcome_pbar3_value', TRUE),
				// 'home_welcome_pbar4_text' => $this->input->post('home_welcome_pbar4_text', TRUE),
				// 'home_welcome_pbar4_value' => $this->input->post('home_welcome_pbar4_value', TRUE),
				// 'home_welcome_pbar5_text' => $this->input->post('home_welcome_pbar5_text', TRUE),
				// 'home_welcome_pbar5_value' => $this->input->post('home_welcome_pbar5_value', TRUE),
				// 'home_welcome_status' => $this->input->post('home_welcome_status', TRUE),
				// 'home_welcome_video_bg' => $this->input->post('home_welcome_video_bg', TRUE),
				// 'home_why_choose_title' => $this->input->post('home_why_choose_title', TRUE),
				// 'home_why_choose_subtitle' => $this->input->post('home_why_choose_subtitle', TRUE),
				// 'home_why_choose_status' => $this->input->post('home_why_choose_status', TRUE),
				// 'home_feature_title' => $this->input->post('home_feature_title', TRUE),
				// 'home_feature_subtitle' => $this->input->post('home_feature_subtitle', TRUE),
				// 'home_feature_status' => $this->input->post('home_feature_status', TRUE),
				// 'home_service_title' => $this->input->post('home_service_title', TRUE),
				// 'home_service_subtitle' => $this->input->post('home_service_subtitle', TRUE),
				// 'home_service_status' => $this->input->post('home_service_status', TRUE),
				// 'counter_1_title' => $this->input->post('counter_1_title', TRUE),
				// 'counter_1_value' => $this->input->post('counter_1_value', TRUE),
				// 'counter_1_icon' => $this->input->post('counter_1_icon', TRUE),
				// 'counter_2_title' => $this->input->post('counter_2_title', TRUE),
				// 'counter_2_value' => $this->input->post('counter_2_value', TRUE),
				// 'counter_2_icon' => $this->input->post('counter_2_icon', TRUE),
				// 'counter_3_title' => $this->input->post('counter_3_title', TRUE),
				// 'counter_3_value' => $this->input->post('counter_3_value', TRUE),
				// 'counter_3_icon' => $this->input->post('counter_3_icon', TRUE),
				// 'counter_4_title' => $this->input->post('counter_4_title', TRUE),
				// 'counter_4_value' => $this->input->post('counter_4_value', TRUE),
				// 'counter_4_icon' => $this->input->post('counter_4_icon', TRUE),
				// 'counter_photo' => $this->input->post('counter_photo', TRUE),
				// 'counter_status' => $this->input->post('counter_status', TRUE),
				// 'home_portfolio_title' => $this->input->post('home_portfolio_title', TRUE),
				// 'home_portfolio_subtitle' => $this->input->post('home_portfolio_subtitle', TRUE),
				// 'home_portfolio_status' => $this->input->post('home_portfolio_status', TRUE),
				// 'home_booking_form_title' => $this->input->post('home_booking_form_title', TRUE),
				// 'home_booking_faq_title' => $this->input->post('home_booking_faq_title', TRUE),
				// 'home_booking_status' => $this->input->post('home_booking_status', TRUE),
				// 'home_booking_photo' => $this->input->post('home_booking_photo', TRUE),
				// 'home_team_title' => $this->input->post('home_team_title', TRUE),
				// 'home_team_subtitle' => $this->input->post('home_team_subtitle', TRUE),
				// 'home_team_status' => $this->input->post('home_team_status', TRUE),
				// 'home_ptable_title' => $this->input->post('home_ptable_title', TRUE),
				// 'home_ptable_subtitle' => $this->input->post('home_ptable_subtitle', TRUE),
				// 'home_ptable_status' => $this->input->post('home_ptable_status', TRUE),
				// 'home_testimonial_title' => $this->input->post('home_testimonial_title', TRUE),
				// 'home_testimonial_subtitle' => $this->input->post('home_testimonial_subtitle', TRUE),
				// 'home_testimonial_photo' => $this->input->post('home_testimonial_photo', TRUE),
				// 'home_testimonial_status' => $this->input->post('home_testimonial_status', TRUE),
				// 'home_blog_title' => $this->input->post('home_blog_title', TRUE),
				// 'home_blog_subtitle' => $this->input->post('home_blog_subtitle', TRUE),
				// 'home_blog_item' => $this->input->post('home_blog_item', TRUE),
				// 'home_blog_status' => $this->input->post('home_blog_status', TRUE),
				// 'home_cta_text' => $this->input->post('home_cta_text', TRUE),
				// 'home_cta_button_text' => $this->input->post('home_cta_button_text', TRUE),
				// 'home_cta_button_url' => $this->input->post('home_cta_button_url', TRUE),
			);

			$this->Tbl_page_home_model->update($this->input->post('id', TRUE), $data);
			$this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
			redirect(site_url('tbl_page_home/update/' . $this->input->post('id', TRUE)));
		}
	}

	public function unggulan($id)
	{
		$row = $this->Tbl_page_home_model->get_by_id($id);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('tbl_page_home/unggulan_action'),
				'id' => set_value('id', $row->id),
				'counter_1_title' => set_value('counter_1_title', $row->counter_1_title),
				'counter_1_value' => set_value('counter_1_value', $row->counter_1_value),
				//'counter_1_icon' => set_value('counter_1_icon', $row->counter_1_icon),
				'counter_2_title' => set_value('counter_2_title', $row->counter_2_title),
				'counter_2_value' => set_value('counter_2_value', $row->counter_2_value),
				//'counter_2_icon' => set_value('counter_2_icon', $row->counter_2_icon),
				'counter_3_title' => set_value('counter_3_title', $row->counter_3_title),
				'counter_3_value' => set_value('counter_3_value', $row->counter_3_value),
				//'counter_3_icon' => set_value('counter_3_icon', $row->counter_3_icon),
				'counter_4_title' => set_value('counter_4_title', $row->counter_4_title),
				'counter_4_value' => set_value('counter_4_value', $row->counter_4_value),
				//'counter_4_icon' => set_value('counter_4_icon', $row->counter_4_icon),
			);
			$this->template->load('template', 'tbl_page_home/layanan_unggulan', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
			redirect(site_url('tbl_page_home/unggulan/1'));
		}
	}

	public function unggulan_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update($this->input->post('id', TRUE));
		} else {
			$data = array(
				'counter_1_title' => $this->input->post('counter_1_title', TRUE),
				'counter_1_value' => $this->input->post('counter_1_value', TRUE),
				//'counter_1_icon' => $this->input->post('counter_1_icon', TRUE),
				'counter_2_title' => $this->input->post('counter_2_title', TRUE),
				'counter_2_value' => $this->input->post('counter_2_value', TRUE),
				//'counter_2_icon' => $this->input->post('counter_2_icon', TRUE),
				'counter_3_title' => $this->input->post('counter_3_title', TRUE),
				'counter_3_value' => $this->input->post('counter_3_value', TRUE),
				//'counter_3_icon' => $this->input->post('counter_3_icon', TRUE),
				'counter_4_title' => $this->input->post('counter_4_title', TRUE),
				'counter_4_value' => $this->input->post('counter_4_value', TRUE),
				//'counter_4_icon' => $this->input->post('counter_4_icon', TRUE),
			);

			$this->Tbl_page_home_model->update($this->input->post('id', TRUE), $data);
			$this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
			redirect(site_url('tbl_page_home/unggulan/1'));
		}
	}

	public function delete($id)
	{
		$row = $this->Tbl_page_home_model->get_by_id($id);

		if ($row) {
			$this->Tbl_page_home_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
			redirect(site_url('tbl_page_home'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
			redirect(site_url('tbl_page_home'));
		}
	}

	public function _rules()
	{
		// $this->form_validation->set_rules('title', 'title', 'trim|required');
		// $this->form_validation->set_rules('meta_keyword', 'meta keyword', 'trim|required');
		// $this->form_validation->set_rules('meta_description', 'meta description', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_title', 'home welcome title', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_subtitle', 'home welcome subtitle', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_text', 'home welcome text', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_video', 'home welcome video', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar1_text', 'home welcome pbar1 text', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar1_value', 'home welcome pbar1 value', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar2_text', 'home welcome pbar2 text', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar2_value', 'home welcome pbar2 value', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar3_text', 'home welcome pbar3 text', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar3_value', 'home welcome pbar3 value', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar4_text', 'home welcome pbar4 text', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar4_value', 'home welcome pbar4 value', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar5_text', 'home welcome pbar5 text', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_pbar5_value', 'home welcome pbar5 value', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_status', 'home welcome status', 'trim|required');
		// $this->form_validation->set_rules('home_welcome_video_bg', 'home welcome video bg', 'trim|required');
		// $this->form_validation->set_rules('home_why_choose_title', 'home why choose title', 'trim|required');
		// $this->form_validation->set_rules('home_why_choose_subtitle', 'home why choose subtitle', 'trim|required');
		// $this->form_validation->set_rules('home_why_choose_status', 'home why choose status', 'trim|required');
		// $this->form_validation->set_rules('home_feature_title', 'home feature title', 'trim|required');
		// $this->form_validation->set_rules('home_feature_subtitle', 'home feature subtitle', 'trim|required');
		// $this->form_validation->set_rules('home_feature_status', 'home feature status', 'trim|required');
		// $this->form_validation->set_rules('home_service_title', 'home service title', 'trim|required');
		// $this->form_validation->set_rules('home_service_subtitle', 'home service subtitle', 'trim|required');
		// $this->form_validation->set_rules('home_service_status', 'home service status', 'trim|required');
		// $this->form_validation->set_rules('counter_1_title', 'counter 1 title', 'trim|required');
		// $this->form_validation->set_rules('counter_1_value', 'counter 1 value', 'trim|required');
		// $this->form_validation->set_rules('counter_1_icon', 'counter 1 icon', 'trim|required');
		// $this->form_validation->set_rules('counter_2_title', 'counter 2 title', 'trim|required');
		// $this->form_validation->set_rules('counter_2_value', 'counter 2 value', 'trim|required');
		// $this->form_validation->set_rules('counter_2_icon', 'counter 2 icon', 'trim|required');
		// $this->form_validation->set_rules('counter_3_title', 'counter 3 title', 'trim|required');
		// $this->form_validation->set_rules('counter_3_value', 'counter 3 value', 'trim|required');
		// $this->form_validation->set_rules('counter_3_icon', 'counter 3 icon', 'trim|required');
		// $this->form_validation->set_rules('counter_4_title', 'counter 4 title', 'trim|required');
		// $this->form_validation->set_rules('counter_4_value', 'counter 4 value', 'trim|required');
		// $this->form_validation->set_rules('counter_4_icon', 'counter 4 icon', 'trim|required');
		// $this->form_validation->set_rules('counter_photo', 'counter photo', 'trim|required');
		// $this->form_validation->set_rules('counter_status', 'counter status', 'trim|required');
		// $this->form_validation->set_rules('home_portfolio_title', 'home portfolio title', 'trim|required');
		// $this->form_validation->set_rules('home_portfolio_subtitle', 'home portfolio subtitle', 'trim|required');
		// $this->form_validation->set_rules('home_portfolio_status', 'home portfolio status', 'trim|required');
		// $this->form_validation->set_rules('home_booking_form_title', 'home booking form title', 'trim|required');
		// $this->form_validation->set_rules('home_booking_faq_title', 'home booking faq title', 'trim|required');
		// $this->form_validation->set_rules('home_booking_status', 'home booking status', 'trim|required');
		// $this->form_validation->set_rules('home_booking_photo', 'home booking photo', 'trim|required');
		// $this->form_validation->set_rules('home_team_title', 'home team title', 'trim|required');
		// $this->form_validation->set_rules('home_team_subtitle', 'home team subtitle', 'trim|required');
		// $this->form_validation->set_rules('home_team_status', 'home team status', 'trim|required');
		// $this->form_validation->set_rules('home_ptable_title', 'home ptable title', 'trim|required');
		// $this->form_validation->set_rules('home_ptable_subtitle', 'home ptable subtitle', 'trim|required');
		// $this->form_validation->set_rules('home_ptable_status', 'home ptable status', 'trim|required');
		// $this->form_validation->set_rules('home_testimonial_title', 'home testimonial title', 'trim|required');
		// $this->form_validation->set_rules('home_testimonial_subtitle', 'home testimonial subtitle', 'trim|required');
		// $this->form_validation->set_rules('home_testimonial_photo', 'home testimonial photo', 'trim|required');
		// $this->form_validation->set_rules('home_testimonial_status', 'home testimonial status', 'trim|required');
		// $this->form_validation->set_rules('home_blog_title', 'home blog title', 'trim|required');
		// $this->form_validation->set_rules('home_blog_subtitle', 'home blog subtitle', 'trim|required');
		// $this->form_validation->set_rules('home_blog_item', 'home blog item', 'trim|required');
		// $this->form_validation->set_rules('home_blog_status', 'home blog status', 'trim|required');
		// $this->form_validation->set_rules('home_cta_text', 'home cta text', 'trim|required');
		// $this->form_validation->set_rules('home_cta_button_text', 'home cta button text', 'trim|required');
		// $this->form_validation->set_rules('home_cta_button_url', 'home cta button url', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
}

/* End of file Tbl_page_home.php */
/* Location: ./application/controllers/Tbl_page_home.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 04:44:50 */
/* http://harviacode.com */
