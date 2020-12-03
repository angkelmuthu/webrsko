<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Tbl_team_member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Tbl_team_member_model');
		$this->load->library('form_validation');
		$this->load->library('datatables');
		$this->load->library('upload');
	}

	public function index()
	{
		$this->template->load('template', 'tbl_team_member/tbl_team_member_list');
	}

	public function json()
	{
		header('Content-Type: application/json');
		echo $this->Tbl_team_member_model->json();
	}

	public function read($id)
	{
		$row = $this->Tbl_team_member_model->get_by_id($id);
		if ($row) {
			$data = array(
				'id' => $row->id,
				'name' => $row->name,
				'designation' => $row->designation,
				'photo' => $row->photo,
				'detail' => $row->detail,
				'facebook' => $row->facebook,
				'twitter' => $row->twitter,
				'linkedin' => $row->linkedin,
				'youtube' => $row->youtube,
				'google_plus' => $row->google_plus,
				'instagram' => $row->instagram,
				'flickr' => $row->flickr,
				'phone' => $row->phone,
				'email' => $row->email,
				'website' => $row->website,
				'meta_title' => $row->meta_title,
				'meta_keyword' => $row->meta_keyword,
				'meta_description' => $row->meta_description,
			);
			$this->template->load('template', 'tbl_team_member/tbl_team_member_read', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
			redirect(site_url('tbl_team_member'));
		}
	}

	public function create()
	{
		$data = array(
			'button' => 'Create',
			'action' => site_url('tbl_team_member/create_action'),
			'id' => set_value('id'),
			'name' => set_value('name'),
			'designation' => set_value('designation'),
			'photo' => set_value('photo'),
			'detail' => set_value('detail'),
			// 'facebook' => set_value('facebook'),
			// 'twitter' => set_value('twitter'),
			// 'linkedin' => set_value('linkedin'),
			// 'youtube' => set_value('youtube'),
			// 'google_plus' => set_value('google_plus'),
			// 'instagram' => set_value('instagram'),
			// 'flickr' => set_value('flickr'),
			// 'phone' => set_value('phone'),
			// 'email' => set_value('email'),
			// 'website' => set_value('website'),
			'meta_title' => set_value('meta_title'),
			'meta_keyword' => set_value('meta_keyword'),
			'meta_description' => set_value('meta_description'),
		);
		$this->template->load('template', 'tbl_team_member/tbl_team_member_form', $data);
	}

	public function create_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			if (isset($_FILES["photo"]["name"])) {
				$config['upload_path'] = './assets/upload/direksi/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('photo')) {
					$this->upload->display_errors();
					return FALSE;
				} else {
					$data = $this->upload->data();
					//Compress Image
					$config['image_library'] = 'gd2';
					$config['source_image'] = './assets/upload/direksi/' . $data['file_name'];
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					// $config['quality'] = '60%';
					// $config['width'] = 800;
					// $config['height'] = 800;
					$config['new_image'] = './assets/upload/direksi/' . $data['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$image = $data['file_name'];
				}
			}
			$data = array(
				'name' => $this->input->post('name', TRUE),
				'designation' => $this->input->post('designation', TRUE),
				'photo' => $image,
				'detail' => $this->input->post('detail', TRUE),
				// 'facebook' => $this->input->post('facebook', TRUE),
				// 'twitter' => $this->input->post('twitter', TRUE),
				// 'linkedin' => $this->input->post('linkedin', TRUE),
				// 'youtube' => $this->input->post('youtube', TRUE),
				// 'google_plus' => $this->input->post('google_plus', TRUE),
				// 'instagram' => $this->input->post('instagram', TRUE),
				// 'flickr' => $this->input->post('flickr', TRUE),
				// 'phone' => $this->input->post('phone', TRUE),
				// 'email' => $this->input->post('email', TRUE),
				// 'website' => $this->input->post('website', TRUE),
				'meta_title' => $this->input->post('meta_title', TRUE),
				'meta_keyword' => $this->input->post('meta_keyword', TRUE),
				'meta_description' => $this->input->post('meta_description', TRUE),
			);

			$this->Tbl_team_member_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
			redirect(site_url('tbl_team_member'));
		}
	}

	public function update($id)
	{
		$row = $this->Tbl_team_member_model->get_by_id($id);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('tbl_team_member/update_action'),
				'id' => set_value('id', $row->id),
				'name' => set_value('name', $row->name),
				'designation' => set_value('designation', $row->designation),
				'photo' => set_value('photo', $row->photo),
				'detail' => set_value('detail', $row->detail),
				'facebook' => set_value('facebook', $row->facebook),
				'twitter' => set_value('twitter', $row->twitter),
				'linkedin' => set_value('linkedin', $row->linkedin),
				'youtube' => set_value('youtube', $row->youtube),
				'google_plus' => set_value('google_plus', $row->google_plus),
				'instagram' => set_value('instagram', $row->instagram),
				'flickr' => set_value('flickr', $row->flickr),
				'phone' => set_value('phone', $row->phone),
				'email' => set_value('email', $row->email),
				'website' => set_value('website', $row->website),
				'meta_title' => set_value('meta_title', $row->meta_title),
				'meta_keyword' => set_value('meta_keyword', $row->meta_keyword),
				'meta_description' => set_value('meta_description', $row->meta_description),
			);
			$this->template->load('template', 'tbl_team_member/tbl_team_member_form', $data);
		} else {
			$this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
			redirect(site_url('tbl_team_member'));
		}
	}

	public function update_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update($this->input->post('id', TRUE));
		} else {
			if (isset($_FILES["photo"]["name"])) {
				$config['upload_path'] = './assets/upload/direksi/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('photo')) {
					$this->upload->display_errors();
					return FALSE;
				} else {
					$data = $this->upload->data();
					//Compress Image
					$config['image_library'] = 'gd2';
					$config['source_image'] = './assets/upload/direksi/' . $data['file_name'];
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					// $config['quality'] = '60%';
					// $config['width'] = 800;
					// $config['height'] = 800;
					$config['new_image'] = './assets/upload/direksi/' . $data['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$image = $data['file_name'];
				}
			}
			$data = array(
				'name' => $this->input->post('name', TRUE),
				'designation' => $this->input->post('designation', TRUE),
				'photo' => $image,
				'detail' => $this->input->post('detail', TRUE),
				// 'facebook' => $this->input->post('facebook', TRUE),
				// 'twitter' => $this->input->post('twitter', TRUE),
				// 'linkedin' => $this->input->post('linkedin', TRUE),
				// 'youtube' => $this->input->post('youtube', TRUE),
				// 'google_plus' => $this->input->post('google_plus', TRUE),
				// 'instagram' => $this->input->post('instagram', TRUE),
				// 'flickr' => $this->input->post('flickr', TRUE),
				// 'phone' => $this->input->post('phone', TRUE),
				// 'email' => $this->input->post('email', TRUE),
				// 'website' => $this->input->post('website', TRUE),
				'meta_title' => $this->input->post('meta_title', TRUE),
				'meta_keyword' => $this->input->post('meta_keyword', TRUE),
				'meta_description' => $this->input->post('meta_description', TRUE),
			);

			$this->Tbl_team_member_model->update($this->input->post('id', TRUE), $data);
			$this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
			redirect(site_url('tbl_team_member'));
		}
	}

	public function delete($id)
	{
		$row = $this->Tbl_team_member_model->get_by_id($id);

		if ($row) {
			$this->Tbl_team_member_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
			redirect(site_url('tbl_team_member'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
			redirect(site_url('tbl_team_member'));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('designation', 'designation', 'trim|required');
		// $this->form_validation->set_rules('photo', 'photo', 'trim|required');
		$this->form_validation->set_rules('detail', 'detail', 'trim|required');
		// $this->form_validation->set_rules('facebook', 'facebook', 'trim|required');
		// $this->form_validation->set_rules('twitter', 'twitter', 'trim|required');
		// $this->form_validation->set_rules('linkedin', 'linkedin', 'trim|required');
		// $this->form_validation->set_rules('youtube', 'youtube', 'trim|required');
		// $this->form_validation->set_rules('google_plus', 'google plus', 'trim|required');
		// $this->form_validation->set_rules('instagram', 'instagram', 'trim|required');
		// $this->form_validation->set_rules('flickr', 'flickr', 'trim|required');
		// $this->form_validation->set_rules('phone', 'phone', 'trim|required');
		// $this->form_validation->set_rules('email', 'email', 'trim|required');
		// $this->form_validation->set_rules('website', 'website', 'trim|required');
		// $this->form_validation->set_rules('meta_title', 'meta title', 'trim|required');
		// $this->form_validation->set_rules('meta_keyword', 'meta keyword', 'trim|required');
		// $this->form_validation->set_rules('meta_description', 'meta description', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
}

/* End of file Tbl_team_member.php */
/* Location: ./application/controllers/Tbl_team_member.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 05:07:17 */
/* http://harviacode.com */
