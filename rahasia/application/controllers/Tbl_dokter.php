<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_dokter_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tbl_dokter/tbl_dokter_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_dokter_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_dokter_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_dokter' => $row->id_dokter,
		'nm_dokter' => $row->nm_dokter,
	    );
            $this->template->load('template','tbl_dokter/tbl_dokter_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_dokter'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_dokter/create_action'),
	    'id_dokter' => set_value('id_dokter'),
	    'nm_dokter' => set_value('nm_dokter'),
	);
        $this->template->load('template','tbl_dokter/tbl_dokter_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nm_dokter' => $this->input->post('nm_dokter',TRUE),
	    );

            $this->Tbl_dokter_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_dokter'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_dokter_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_dokter/update_action'),
		'id_dokter' => set_value('id_dokter', $row->id_dokter),
		'nm_dokter' => set_value('nm_dokter', $row->nm_dokter),
	    );
            $this->template->load('template','tbl_dokter/tbl_dokter_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_dokter'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_dokter', TRUE));
        } else {
            $data = array(
		'nm_dokter' => $this->input->post('nm_dokter',TRUE),
	    );

            $this->Tbl_dokter_model->update($this->input->post('id_dokter', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_dokter'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_dokter_model->get_by_id($id);

        if ($row) {
            $this->Tbl_dokter_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_dokter'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_dokter'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nm_dokter', 'nm dokter', 'trim|required');

	$this->form_validation->set_rules('id_dokter', 'id_dokter', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_dokter.php */
/* Location: ./application/controllers/Tbl_dokter.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-12-02 05:38:15 */
/* http://harviacode.com */