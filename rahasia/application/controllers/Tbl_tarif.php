<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_tarif extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_tarif_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tbl_tarif/tbl_tarif_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_tarif_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_tarif_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nm_tindakan' => $row->nm_tindakan,
		'tarif' => $row->tarif,
	    );
            $this->template->load('template','tbl_tarif/tbl_tarif_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_tarif'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_tarif/create_action'),
	    'id' => set_value('id'),
	    'nm_tindakan' => set_value('nm_tindakan'),
	    'tarif' => set_value('tarif'),
	);
        $this->template->load('template','tbl_tarif/tbl_tarif_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nm_tindakan' => $this->input->post('nm_tindakan',TRUE),
		'tarif' => $this->input->post('tarif',TRUE),
	    );

            $this->Tbl_tarif_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_tarif'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_tarif_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_tarif/update_action'),
		'id' => set_value('id', $row->id),
		'nm_tindakan' => set_value('nm_tindakan', $row->nm_tindakan),
		'tarif' => set_value('tarif', $row->tarif),
	    );
            $this->template->load('template','tbl_tarif/tbl_tarif_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_tarif'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nm_tindakan' => $this->input->post('nm_tindakan',TRUE),
		'tarif' => $this->input->post('tarif',TRUE),
	    );

            $this->Tbl_tarif_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_tarif'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_tarif_model->get_by_id($id);

        if ($row) {
            $this->Tbl_tarif_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_tarif'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_tarif'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nm_tindakan', 'nm tindakan', 'trim|required');
	$this->form_validation->set_rules('tarif', 'tarif', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_tarif.php */
/* Location: ./application/controllers/Tbl_tarif.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-12-02 07:03:10 */
/* http://harviacode.com */