<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_page_contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_page_contact_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tbl_page_contact/tbl_page_contact_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_page_contact_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_page_contact_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'contact_heading' => $row->contact_heading,
		'contact_address' => $row->contact_address,
		'contact_email' => $row->contact_email,
		'contact_phone' => $row->contact_phone,
		'contact_map' => $row->contact_map,
		'mt_contact' => $row->mt_contact,
		'mk_contact' => $row->mk_contact,
		'md_contact' => $row->md_contact,
	    );
            $this->template->load('template','tbl_page_contact/tbl_page_contact_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_page_contact'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_page_contact/create_action'),
	    'id' => set_value('id'),
	    'contact_heading' => set_value('contact_heading'),
	    'contact_address' => set_value('contact_address'),
	    'contact_email' => set_value('contact_email'),
	    'contact_phone' => set_value('contact_phone'),
	    'contact_map' => set_value('contact_map'),
	    'mt_contact' => set_value('mt_contact'),
	    'mk_contact' => set_value('mk_contact'),
	    'md_contact' => set_value('md_contact'),
	);
        $this->template->load('template','tbl_page_contact/tbl_page_contact_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'contact_heading' => $this->input->post('contact_heading',TRUE),
		'contact_address' => $this->input->post('contact_address',TRUE),
		'contact_email' => $this->input->post('contact_email',TRUE),
		'contact_phone' => $this->input->post('contact_phone',TRUE),
		'contact_map' => $this->input->post('contact_map',TRUE),
		'mt_contact' => $this->input->post('mt_contact',TRUE),
		'mk_contact' => $this->input->post('mk_contact',TRUE),
		'md_contact' => $this->input->post('md_contact',TRUE),
	    );

            $this->Tbl_page_contact_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_page_contact'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_page_contact_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_page_contact/update_action'),
		'id' => set_value('id', $row->id),
		'contact_heading' => set_value('contact_heading', $row->contact_heading),
		'contact_address' => set_value('contact_address', $row->contact_address),
		'contact_email' => set_value('contact_email', $row->contact_email),
		'contact_phone' => set_value('contact_phone', $row->contact_phone),
		'contact_map' => set_value('contact_map', $row->contact_map),
		'mt_contact' => set_value('mt_contact', $row->mt_contact),
		'mk_contact' => set_value('mk_contact', $row->mk_contact),
		'md_contact' => set_value('md_contact', $row->md_contact),
	    );
            $this->template->load('template','tbl_page_contact/tbl_page_contact_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_page_contact'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'contact_heading' => $this->input->post('contact_heading',TRUE),
		'contact_address' => $this->input->post('contact_address',TRUE),
		'contact_email' => $this->input->post('contact_email',TRUE),
		'contact_phone' => $this->input->post('contact_phone',TRUE),
		'contact_map' => $this->input->post('contact_map',TRUE),
		'mt_contact' => $this->input->post('mt_contact',TRUE),
		'mk_contact' => $this->input->post('mk_contact',TRUE),
		'md_contact' => $this->input->post('md_contact',TRUE),
	    );

            $this->Tbl_page_contact_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_page_contact'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_page_contact_model->get_by_id($id);

        if ($row) {
            $this->Tbl_page_contact_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_page_contact'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_page_contact'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('contact_heading', 'contact heading', 'trim|required');
	$this->form_validation->set_rules('contact_address', 'contact address', 'trim|required');
	$this->form_validation->set_rules('contact_email', 'contact email', 'trim|required');
	$this->form_validation->set_rules('contact_phone', 'contact phone', 'trim|required');
	$this->form_validation->set_rules('contact_map', 'contact map', 'trim|required');
	$this->form_validation->set_rules('mt_contact', 'mt contact', 'trim|required');
	$this->form_validation->set_rules('mk_contact', 'mk contact', 'trim|required');
	$this->form_validation->set_rules('md_contact', 'md contact', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_page_contact.php */
/* Location: ./application/controllers/Tbl_page_contact.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 04:33:05 */
/* http://harviacode.com */