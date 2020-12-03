<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_poli extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_poli_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tbl_poli/tbl_poli_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_poli_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_poli_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_poli' => $row->id_poli,
		'nm_poli' => $row->nm_poli,
	    );
            $this->template->load('template','tbl_poli/tbl_poli_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_poli'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_poli/create_action'),
	    'id_poli' => set_value('id_poli'),
	    'nm_poli' => set_value('nm_poli'),
	);
        $this->template->load('template','tbl_poli/tbl_poli_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nm_poli' => $this->input->post('nm_poli',TRUE),
	    );

            $this->Tbl_poli_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_poli'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_poli_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_poli/update_action'),
		'id_poli' => set_value('id_poli', $row->id_poli),
		'nm_poli' => set_value('nm_poli', $row->nm_poli),
	    );
            $this->template->load('template','tbl_poli/tbl_poli_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_poli'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_poli', TRUE));
        } else {
            $data = array(
		'nm_poli' => $this->input->post('nm_poli',TRUE),
	    );

            $this->Tbl_poli_model->update($this->input->post('id_poli', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_poli'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_poli_model->get_by_id($id);

        if ($row) {
            $this->Tbl_poli_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_poli'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_poli'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nm_poli', 'nm poli', 'trim|required');

	$this->form_validation->set_rules('id_poli', 'id_poli', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_poli.php */
/* Location: ./application/controllers/Tbl_poli.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-12-02 05:37:58 */
/* http://harviacode.com */