<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_photo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_photo_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
        $this->load->library('upload');
    }

    public function index()
    {
        $this->template->load('template', 'tbl_photo/tbl_photo_list');
    }

    public function json()
    {
        header('Content-Type: application/json');
        echo $this->Tbl_photo_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_photo_model->get_by_id($id);
        if ($row) {
            $data = array(
                'photo_id' => $row->photo_id,
                'photo_name' => $row->photo_name,
            );
            $this->template->load('template', 'tbl_photo/tbl_photo_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_photo'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_photo/create_action'),
            'photo_id' => set_value('photo_id'),
            'photo_name' => set_value('photo_name'),
        );
        $this->template->load('template', 'tbl_photo/tbl_photo_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            if (isset($_FILES["photo_name"]["name"])) {
                $config['upload_path'] = './assets/upload/galeri/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('photo_name')) {
                    $this->upload->display_errors();
                    return FALSE;
                } else {
                    $data = $this->upload->data();
                    //Compress Image
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/upload/galeri/' . $data['file_name'];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = TRUE;
                    // $config['quality'] = '60%';
                    // $config['width'] = 800;
                    // $config['height'] = 800;
                    $config['new_image'] = './assets/upload/galeri/' . $data['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $image = $data['file_name'];
                }
            }
            $data = array(
                'photo_name' => $image,
            );

            $this->Tbl_photo_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_photo'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_photo_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_photo/update_action'),
                'photo_id' => set_value('photo_id', $row->photo_id),
                'photo_name' => set_value('photo_name', $row->photo_name),
            );
            $this->template->load('template', 'tbl_photo/tbl_photo_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_photo'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('photo_id', TRUE));
        } else {
            $data = array(
                'photo_name' => $this->input->post('photo_name', TRUE),
            );

            $this->Tbl_photo_model->update($this->input->post('photo_id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_photo'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_photo_model->get_by_id($id);

        if ($row) {
            $this->Tbl_photo_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_photo'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_photo'));
        }
    }

    public function _rules()
    {
        //$this->form_validation->set_rules('photo_name', 'photo name', 'trim|required');

        $this->form_validation->set_rules('photo_id', 'photo_id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Tbl_photo.php */
/* Location: ./application/controllers/Tbl_photo.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 05:00:13 */
/* http://harviacode.com */
