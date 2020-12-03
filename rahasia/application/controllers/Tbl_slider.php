<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_slider extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_slider_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tbl_slider/tbl_slider_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_slider_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_slider_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'photo' => $row->photo,
		'heading' => $row->heading,
		'content' => $row->content,
		'button1_text' => $row->button1_text,
		'button1_url' => $row->button1_url,
		'button2_text' => $row->button2_text,
		'button2_url' => $row->button2_url,
		'position' => $row->position,
	    );
            $this->template->load('template','tbl_slider/tbl_slider_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_slider'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_slider/create_action'),
	    'id' => set_value('id'),
	    'photo' => set_value('photo'),
	    'heading' => set_value('heading'),
	    'content' => set_value('content'),
	    'button1_text' => set_value('button1_text'),
	    'button1_url' => set_value('button1_url'),
	    'button2_text' => set_value('button2_text'),
	    'button2_url' => set_value('button2_url'),
	    'position' => set_value('position'),
	);
        $this->template->load('template','tbl_slider/tbl_slider_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'photo' => $this->input->post('photo',TRUE),
		'heading' => $this->input->post('heading',TRUE),
		'content' => $this->input->post('content',TRUE),
		'button1_text' => $this->input->post('button1_text',TRUE),
		'button1_url' => $this->input->post('button1_url',TRUE),
		'button2_text' => $this->input->post('button2_text',TRUE),
		'button2_url' => $this->input->post('button2_url',TRUE),
		'position' => $this->input->post('position',TRUE),
	    );

            $this->Tbl_slider_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_slider'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_slider_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_slider/update_action'),
		'id' => set_value('id', $row->id),
		'photo' => set_value('photo', $row->photo),
		'heading' => set_value('heading', $row->heading),
		'content' => set_value('content', $row->content),
		'button1_text' => set_value('button1_text', $row->button1_text),
		'button1_url' => set_value('button1_url', $row->button1_url),
		'button2_text' => set_value('button2_text', $row->button2_text),
		'button2_url' => set_value('button2_url', $row->button2_url),
		'position' => set_value('position', $row->position),
	    );
            $this->template->load('template','tbl_slider/tbl_slider_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_slider'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'photo' => $this->input->post('photo',TRUE),
		'heading' => $this->input->post('heading',TRUE),
		'content' => $this->input->post('content',TRUE),
		'button1_text' => $this->input->post('button1_text',TRUE),
		'button1_url' => $this->input->post('button1_url',TRUE),
		'button2_text' => $this->input->post('button2_text',TRUE),
		'button2_url' => $this->input->post('button2_url',TRUE),
		'position' => $this->input->post('position',TRUE),
	    );

            $this->Tbl_slider_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_slider'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_slider_model->get_by_id($id);

        if ($row) {
            $this->Tbl_slider_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_slider'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_slider'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('photo', 'photo', 'trim|required');
	$this->form_validation->set_rules('heading', 'heading', 'trim|required');
	$this->form_validation->set_rules('content', 'content', 'trim|required');
	$this->form_validation->set_rules('button1_text', 'button1 text', 'trim|required');
	$this->form_validation->set_rules('button1_url', 'button1 url', 'trim|required');
	$this->form_validation->set_rules('button2_text', 'button2 text', 'trim|required');
	$this->form_validation->set_rules('button2_url', 'button2 url', 'trim|required');
	$this->form_validation->set_rules('position', 'position', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_slider.php */
/* Location: ./application/controllers/Tbl_slider.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 05:06:01 */
/* http://harviacode.com */