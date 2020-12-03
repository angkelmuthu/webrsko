<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_page_sejarah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_page_sejarah_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template', 'tbl_page_sejarah/tbl_page_sejarah_list');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Tbl_page_sejarah_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_page_sejarah_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'sejarah_heading' => $row->sejarah_heading,
                'sejarah_content' => $row->sejarah_content,
                'mt_sejarah' => $row->mt_sejarah,
                'mk_sejarah' => $row->mk_sejarah,
                'md_sejarah' => $row->md_sejarah,
            );
            $this->template->load('template', 'tbl_page_sejarah/tbl_page_sejarah_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_page_sejarah'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_page_sejarah/create_action'),
            'id' => set_value('id'),
            'sejarah_heading' => set_value('sejarah_heading'),
            'sejarah_content' => set_value('sejarah_content'),
            'mt_sejarah' => set_value('mt_sejarah'),
            'mk_sejarah' => set_value('mk_sejarah'),
            'md_sejarah' => set_value('md_sejarah'),
        );
        $this->template->load('template', 'tbl_page_sejarah/tbl_page_sejarah_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'sejarah_heading' => $this->input->post('sejarah_heading', TRUE),
                'sejarah_content' => $this->input->post('sejarah_content', TRUE),
                'mt_sejarah' => $this->input->post('mt_sejarah', TRUE),
                'mk_sejarah' => $this->input->post('mk_sejarah', TRUE),
                'md_sejarah' => $this->input->post('md_sejarah', TRUE),
            );

            $this->Tbl_page_sejarah_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_page_sejarah'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_page_sejarah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_page_sejarah/update_action'),
                'id' => set_value('id', $row->id),
                'sejarah_heading' => set_value('sejarah_heading', $row->sejarah_heading),
                'sejarah_content' => set_value('sejarah_content', $row->sejarah_content),
                'mt_sejarah' => set_value('mt_sejarah', $row->mt_sejarah),
                'mk_sejarah' => set_value('mk_sejarah', $row->mk_sejarah),
                'md_sejarah' => set_value('md_sejarah', $row->md_sejarah),
            );
            $this->template->load('template', 'tbl_page_sejarah/tbl_page_sejarah_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_page_sejarah'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'sejarah_heading' => $this->input->post('sejarah_heading', TRUE),
                'sejarah_content' => $this->input->post('sejarah_content', TRUE),
                'mt_sejarah' => $this->input->post('mt_sejarah', TRUE),
                'mk_sejarah' => $this->input->post('mk_sejarah', TRUE),
                'md_sejarah' => $this->input->post('md_sejarah', TRUE),
            );

            $this->Tbl_page_sejarah_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_page_sejarah/update/' . $this->input->post('id')));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_page_sejarah_model->get_by_id($id);

        if ($row) {
            $this->Tbl_page_sejarah_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_page_sejarah'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_page_sejarah'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('sejarah_heading', 'sejarah heading', 'trim|required');
        $this->form_validation->set_rules('sejarah_content', 'sejarah content', 'trim|required');
        $this->form_validation->set_rules('mt_sejarah', 'mt sejarah', 'trim|required');
        $this->form_validation->set_rules('mk_sejarah', 'mk sejarah', 'trim|required');
        $this->form_validation->set_rules('md_sejarah', 'md sejarah', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Tbl_page_sejarah.php */
/* Location: ./application/controllers/Tbl_page_sejarah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 04:51:42 */
/* http://harviacode.com */
