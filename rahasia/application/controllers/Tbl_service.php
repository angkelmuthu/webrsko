<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_service extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_service_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
        $this->load->library('upload');
    }

    public function index()
    {
        $this->template->load('template', 'tbl_service/tbl_service_list');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Tbl_service_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_service_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'name' => $row->name,
                'description' => $row->description,
                'short_description' => $row->short_description,
                'photo' => $row->photo,
                'meta_title' => $row->meta_title,
                'meta_keyword' => $row->meta_keyword,
                'meta_description' => $row->meta_description,
            );
            $this->template->load('template', 'tbl_service/tbl_service_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_service'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_service/create_action'),
            'id' => set_value('id'),
            'name' => set_value('name'),
            'description' => set_value('description'),
            'short_description' => set_value('short_description'),
            'photo' => set_value('photo'),
            'meta_title' => set_value('meta_title'),
            'meta_keyword' => set_value('meta_keyword'),
            'meta_description' => set_value('meta_description'),
        );
        $this->template->load('template', 'tbl_service/tbl_service_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            if (isset($_FILES["photo"]["name"])) {
                $config['upload_path'] = './assets/upload/poli/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('photo')) {
                    $this->upload->display_errors();
                    return FALSE;
                } else {
                    $data = $this->upload->data();
                    //Compress Image
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/upload/poli/' . $data['file_name'];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = TRUE;
                    // $config['quality'] = '60%';
                    // $config['width'] = 800;
                    // $config['height'] = 800;
                    $config['new_image'] = './assets/upload/poli/' . $data['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $image = $data['file_name'];
                }
            }
            $data = array(
                'name' => $this->input->post('name', TRUE),
                'description' => $this->input->post('description', TRUE),
                'short_description' => $this->input->post('short_description', TRUE),
                'photo' => $image,
                'meta_title' => $this->input->post('meta_title', TRUE),
                'meta_keyword' => $this->input->post('meta_keyword', TRUE),
                'meta_description' => $this->input->post('meta_description', TRUE),
            );

            $this->Tbl_service_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_service'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_service_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_service/update_action'),
                'id' => set_value('id', $row->id),
                'name' => set_value('name', $row->name),
                'description' => set_value('description', $row->description),
                'short_description' => set_value('short_description', $row->short_description),
                'photo' => set_value('photo', $row->photo),
                'meta_title' => set_value('meta_title', $row->meta_title),
                'meta_keyword' => set_value('meta_keyword', $row->meta_keyword),
                'meta_description' => set_value('meta_description', $row->meta_description),
            );
            $this->template->load('template', 'tbl_service/tbl_service_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_service'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            if (isset($_FILES["photo"]["name"])) {
                $config['upload_path'] = './assets/upload/poli/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('photo')) {
                    $this->upload->display_errors();
                    return FALSE;
                } else {
                    $data = $this->upload->data();
                    //Compress Image
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/upload/poli/' . $data['file_name'];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = TRUE;
                    // $config['quality'] = '60%';
                    // $config['width'] = 800;
                    // $config['height'] = 800;
                    $config['new_image'] = './assets/upload/poli/' . $data['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $image = $data['file_name'];
                }
            }
            $data = array(
                'name' => $this->input->post('name', TRUE),
                'description' => $this->input->post('description', TRUE),
                'short_description' => $this->input->post('short_description', TRUE),
                'photo' => $image,
                'meta_title' => $this->input->post('meta_title', TRUE),
                'meta_keyword' => $this->input->post('meta_keyword', TRUE),
                'meta_description' => $this->input->post('meta_description', TRUE),
            );

            $this->Tbl_service_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_service'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_service_model->get_by_id($id);

        if ($row) {
            $this->Tbl_service_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_service'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_service'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        // $this->form_validation->set_rules('short_description', 'short description', 'trim|required');
        // $this->form_validation->set_rules('photo', 'photo', 'trim|required');
        // $this->form_validation->set_rules('meta_title', 'meta title', 'trim|required');
        // $this->form_validation->set_rules('meta_keyword', 'meta keyword', 'trim|required');
        // $this->form_validation->set_rules('meta_description', 'meta description', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Tbl_service.php */
/* Location: ./application/controllers/Tbl_service.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 05:04:39 */
/* http://harviacode.com */
