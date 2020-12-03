<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_news extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_news_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));

        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_news/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_news/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_news/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_news_model->total_rows($q);
        $tbl_news = $this->Tbl_news_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_news_data' => $tbl_news,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template', 'tbl_news/tbl_news_list', $data);
    }

    public function read($id)
    {
        $row = $this->Tbl_news_model->get_by_id($id);
        if ($row) {
            $data = array(
                'news_id' => $row->news_id,
                'news_title' => $row->news_title,
                'news_content' => $row->news_content,
                'news_content_short' => $row->news_content_short,
                'news_date' => $row->news_date,
                'photo' => $row->photo,
                'banner' => $row->banner,
                'category_id' => $row->category_id,
                'comment' => $row->comment,
                'meta_title' => $row->meta_title,
                'meta_keyword' => $row->meta_keyword,
                'meta_description' => $row->meta_description,
            );
            $this->template->load('template', 'tbl_news/tbl_news_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_news'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_news/create_action'),
            'news_id' => set_value('news_id'),
            'news_title' => set_value('news_title'),
            'news_content' => set_value('news_content'),
            'news_content_short' => set_value('news_content_short'),
            'news_date' => set_value('news_date'),
            'photo' => set_value('photo'),
            'banner' => set_value('banner'),
            'category_id' => set_value('category_id'),
            'comment' => set_value('comment'),
            'meta_title' => set_value('meta_title'),
            'meta_keyword' => set_value('meta_keyword'),
            'meta_description' => set_value('meta_description'),
        );
        $this->template->load('template', 'tbl_news/tbl_news_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            if (isset($_FILES["photo"]["name"])) {
                $config['upload_path'] = './assets/upload/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('photo')) {
                    $this->upload->display_errors();
                    return FALSE;
                } else {
                    $data = $this->upload->data();
                    //Compress Image
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/upload/' . $data['file_name'];
                    $config['create_thumb'] = FALSE;
                    $config['maintain_ratio'] = TRUE;
                    $config['quality'] = '60%';
                    $config['width'] = 800;
                    $config['height'] = 800;
                    $config['new_image'] = './assets/upload/' . $data['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $image = $data['file_name'];
                }
            }
            $data = array(
                'news_title' => $this->input->post('news_title', TRUE),
                'news_content' => $this->input->post('news_content', TRUE),
                'news_content_short' => $this->input->post('news_content_short', TRUE),
                'news_date' => $this->input->post('news_date', TRUE),
                'photo' => $image,
                'banner' => $this->input->post('banner', TRUE),
                'category_id' => $this->input->post('category_id', TRUE),
                'comment' => $this->input->post('comment', TRUE),
                'meta_title' => $this->input->post('meta_title', TRUE),
                'meta_keyword' => $this->input->post('meta_keyword', TRUE),
                'meta_description' => $this->input->post('meta_description', TRUE),
            );

            $this->Tbl_news_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_news'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_news_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_news/update_action'),
                'news_id' => set_value('news_id', $row->news_id),
                'news_title' => set_value('news_title', $row->news_title),
                'news_content' => set_value('news_content', $row->news_content),
                'news_content_short' => set_value('news_content_short', $row->news_content_short),
                'news_date' => set_value('news_date', $row->news_date),
                'photo' => set_value('photo', $row->photo),
                'banner' => set_value('banner', $row->banner),
                'category_id' => set_value('category_id', $row->category_id),
                'comment' => set_value('comment', $row->comment),
                'meta_title' => set_value('meta_title', $row->meta_title),
                'meta_keyword' => set_value('meta_keyword', $row->meta_keyword),
                'meta_description' => set_value('meta_description', $row->meta_description),
            );
            $this->template->load('template', 'tbl_news/tbl_news_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_news'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('news_id', TRUE));
        } else {
            $data = array(
                'news_title' => $this->input->post('news_title', TRUE),
                'news_content' => $this->input->post('news_content', TRUE),
                'news_content_short' => $this->input->post('news_content_short', TRUE),
                'news_date' => $this->input->post('news_date', TRUE),
                'photo' => $this->input->post('photo', TRUE),
                'banner' => $this->input->post('banner', TRUE),
                'category_id' => $this->input->post('category_id', TRUE),
                'comment' => $this->input->post('comment', TRUE),
                'meta_title' => $this->input->post('meta_title', TRUE),
                'meta_keyword' => $this->input->post('meta_keyword', TRUE),
                'meta_description' => $this->input->post('meta_description', TRUE),
            );

            $this->Tbl_news_model->update($this->input->post('news_id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_news'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_news_model->get_by_id($id);

        if ($row) {
            $this->Tbl_news_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_news'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_news'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('news_title', 'news title', 'trim|required');
        $this->form_validation->set_rules('news_content', 'news content', 'trim|required');
        $this->form_validation->set_rules('news_content_short', 'news content short', 'trim|required');
        $this->form_validation->set_rules('news_date', 'news date', 'trim|required');
        // $this->form_validation->set_rules('photo', 'photo', 'trim|required');
        $this->form_validation->set_rules('category_id', 'category id', 'trim|required');

        $this->form_validation->set_rules('news_id', 'news_id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Tbl_news.php */
/* Location: ./application/controllers/Tbl_news.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 04:07:46 */
/* http://harviacode.com */
