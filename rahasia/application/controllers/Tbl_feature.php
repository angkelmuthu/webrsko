<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_feature extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_feature_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tbl_feature/tbl_feature_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_feature_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_feature_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'content' => $row->content,
		'icon' => $row->icon,
		'link' => $row->link,
		'no_urut' => $row->no_urut,
	    );
            $this->template->load('template','tbl_feature/tbl_feature_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_feature'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_feature/create_action'),
	    'id' => set_value('id'),
	    'name' => set_value('name'),
	    'content' => set_value('content'),
	    'icon' => set_value('icon'),
	    'link' => set_value('link'),
	    'no_urut' => set_value('no_urut'),
	);
        $this->template->load('template','tbl_feature/tbl_feature_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'content' => $this->input->post('content',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'link' => $this->input->post('link',TRUE),
		'no_urut' => $this->input->post('no_urut',TRUE),
	    );

            $this->Tbl_feature_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_feature'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_feature_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_feature/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'content' => set_value('content', $row->content),
		'icon' => set_value('icon', $row->icon),
		'link' => set_value('link', $row->link),
		'no_urut' => set_value('no_urut', $row->no_urut),
	    );
            $this->template->load('template','tbl_feature/tbl_feature_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_feature'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'content' => $this->input->post('content',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'link' => $this->input->post('link',TRUE),
		'no_urut' => $this->input->post('no_urut',TRUE),
	    );

            $this->Tbl_feature_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_feature'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_feature_model->get_by_id($id);

        if ($row) {
            $this->Tbl_feature_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_feature'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_feature'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('content', 'content', 'trim|required');
	$this->form_validation->set_rules('icon', 'icon', 'trim|required');
	$this->form_validation->set_rules('link', 'link', 'trim|required');
	$this->form_validation->set_rules('no_urut', 'no urut', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_feature.php */
/* Location: ./application/controllers/Tbl_feature.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-29 15:45:34 */
/* http://harviacode.com */