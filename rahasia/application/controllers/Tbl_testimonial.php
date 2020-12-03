<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_testimonial extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_testimonial_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tbl_testimonial/tbl_testimonial_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_testimonial_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_testimonial_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'designation' => $row->designation,
		'photo' => $row->photo,
		'comment' => $row->comment,
	    );
            $this->template->load('template','tbl_testimonial/tbl_testimonial_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_testimonial'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_testimonial/create_action'),
	    'id' => set_value('id'),
	    'name' => set_value('name'),
	    'designation' => set_value('designation'),
	    'photo' => set_value('photo'),
	    'comment' => set_value('comment'),
	);
        $this->template->load('template','tbl_testimonial/tbl_testimonial_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'designation' => $this->input->post('designation',TRUE),
		'photo' => $this->input->post('photo',TRUE),
		'comment' => $this->input->post('comment',TRUE),
	    );

            $this->Tbl_testimonial_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_testimonial'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_testimonial_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_testimonial/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'designation' => set_value('designation', $row->designation),
		'photo' => set_value('photo', $row->photo),
		'comment' => set_value('comment', $row->comment),
	    );
            $this->template->load('template','tbl_testimonial/tbl_testimonial_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_testimonial'));
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
		'designation' => $this->input->post('designation',TRUE),
		'photo' => $this->input->post('photo',TRUE),
		'comment' => $this->input->post('comment',TRUE),
	    );

            $this->Tbl_testimonial_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_testimonial'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_testimonial_model->get_by_id($id);

        if ($row) {
            $this->Tbl_testimonial_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_testimonial'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_testimonial'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('designation', 'designation', 'trim|required');
	$this->form_validation->set_rules('photo', 'photo', 'trim|required');
	$this->form_validation->set_rules('comment', 'comment', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_testimonial.php */
/* Location: ./application/controllers/Tbl_testimonial.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 05:10:21 */
/* http://harviacode.com */