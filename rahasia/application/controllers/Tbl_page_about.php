<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_page_about extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_page_about_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template', 'tbl_page_about/tbl_page_about_list');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Tbl_page_about_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_page_about_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'about_heading' => $row->about_heading,
                'about_content' => $row->about_content,
                'mt_about' => $row->mt_about,
                'mk_about' => $row->mk_about,
                'md_about' => $row->md_about,
            );
            $this->template->load('template', 'tbl_page_about/tbl_page_about_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_page_about'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_page_about/create_action'),
            'id' => set_value('id'),
            'about_heading' => set_value('about_heading'),
            'about_content' => set_value('about_content'),
            'mt_about' => set_value('mt_about'),
            'mk_about' => set_value('mk_about'),
            'md_about' => set_value('md_about'),
        );
        $this->template->load('template', 'tbl_page_about/tbl_page_about_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'about_heading' => $this->input->post('about_heading', TRUE),
                'about_content' => $this->input->post('about_content', TRUE),
                'mt_about' => $this->input->post('mt_about', TRUE),
                'mk_about' => $this->input->post('mk_about', TRUE),
                'md_about' => $this->input->post('md_about', TRUE),
            );

            $this->Tbl_page_about_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_page_about'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_page_about_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_page_about/update_action'),
                'id' => set_value('id', $row->id),
                'about_heading' => set_value('about_heading', $row->about_heading),
                'about_content' => set_value('about_content', $row->about_content),
                'mt_about' => set_value('mt_about', $row->mt_about),
                'mk_about' => set_value('mk_about', $row->mk_about),
                'md_about' => set_value('md_about', $row->md_about),
            );
            $this->template->load('template', 'tbl_page_about/tbl_page_about_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_page_about/update/1'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'about_heading' => $this->input->post('about_heading', TRUE),
                'about_content' => $this->input->post('about_content', TRUE),
                'mt_about' => $this->input->post('mt_about', TRUE),
                'mk_about' => $this->input->post('mk_about', TRUE),
                'md_about' => $this->input->post('md_about', TRUE),
            );

            $this->Tbl_page_about_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_page_about/update/1'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_page_about_model->get_by_id($id);

        if ($row) {
            $this->Tbl_page_about_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_page_about'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_page_about'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('about_heading', 'about heading', 'trim|required');
        $this->form_validation->set_rules('about_content', 'about content', 'trim|required');
        // $this->form_validation->set_rules('mt_about', 'mt about', 'trim|required');
        // $this->form_validation->set_rules('mk_about', 'mk about', 'trim|required');
        // $this->form_validation->set_rules('md_about', 'md about', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Tbl_page_about.php */
/* Location: ./application/controllers/Tbl_page_about.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 04:27:52 */
/* http://harviacode.com */
