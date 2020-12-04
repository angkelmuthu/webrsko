<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_running_text extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_running_text_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template', 'tbl_running_text/tbl_running_text_list');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Tbl_running_text_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_running_text_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'isi' => $row->isi,
            );
            $this->template->load('template', 'tbl_running_text/tbl_running_text_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_running_text'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_running_text/create_action'),
            'id' => set_value('id'),
            'isi' => set_value('isi'),
        );
        $this->template->load('template', 'tbl_running_text/tbl_running_text_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'isi' => $this->input->post('isi', TRUE),
            );

            $this->Tbl_running_text_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_running_text'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_running_text_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_running_text/update_action'),
                'id' => set_value('id', $row->id),
                'isi' => set_value('isi', $row->isi),
            );
            $this->template->load('template', 'tbl_running_text/tbl_running_text_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_running_text/update/1'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'isi' => $this->input->post('isi', TRUE),
            );

            $this->Tbl_running_text_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_running_text/update/1'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_running_text_model->get_by_id($id);

        if ($row) {
            $this->Tbl_running_text_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_running_text'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_running_text'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('isi', 'isi', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Tbl_running_text.php */
/* Location: ./application/controllers/Tbl_running_text.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-12-04 16:29:54 */
/* http://harviacode.com */