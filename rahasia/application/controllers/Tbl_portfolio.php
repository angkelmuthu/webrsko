<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_portfolio extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_portfolio_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));

        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/tbl_portfolio/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/tbl_portfolio/index/';
            $config['first_url'] = base_url() . 'index.php/tbl_portfolio/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Tbl_portfolio_model->total_rows($q);
        $tbl_portfolio = $this->Tbl_portfolio_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_portfolio_data' => $tbl_portfolio,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template', 'tbl_portfolio/tbl_portfolio_list', $data);
    }

    public function read($id)
    {
        $row = $this->Tbl_portfolio_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'name' => $row->name,
                'short_content' => $row->short_content,
                'content' => $row->content,
                'client_name' => $row->client_name,
                'client_company' => $row->client_company,
                'start_date' => $row->start_date,
                'end_date' => $row->end_date,
                'website' => $row->website,
                'cost' => $row->cost,
                'client_comment' => $row->client_comment,
                'category_id' => $row->category_id,
                'photo' => $row->photo,
                'meta_title' => $row->meta_title,
                'meta_keyword' => $row->meta_keyword,
                'meta_description' => $row->meta_description,
            );
            $this->template->load('template', 'tbl_portfolio/tbl_portfolio_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_portfolio'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_portfolio/create_action'),
            'id' => set_value('id'),
            'name' => set_value('name'),
            'short_content' => set_value('short_content'),
            'content' => set_value('content'),
            'client_name' => set_value('client_name'),
            'client_company' => set_value('client_company'),
            'start_date' => set_value('start_date'),
            'end_date' => set_value('end_date'),
            'website' => set_value('website'),
            'cost' => set_value('cost'),
            'client_comment' => set_value('client_comment'),
            'category_id' => set_value('category_id'),
            'photo' => set_value('photo'),
            'meta_title' => set_value('meta_title'),
            'meta_keyword' => set_value('meta_keyword'),
            'meta_description' => set_value('meta_description'),
        );
        $this->template->load('template', 'tbl_portfolio/tbl_portfolio_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            if (isset($_FILES["photo"]["name"])) {
                $config['upload_path'] = './assets/upload/laporan/';
                $config['allowed_types'] = 'pdf';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('photo')) {
                    $this->upload->display_errors();
                    return FALSE;
                } else {
                    $data = $this->upload->data();
                    //Compress Image
                    // $config['image_library'] = 'gd2';
                    // $config['source_image'] = './assets/upload/laporan/' . $data['file_name'];
                    // $config['create_thumb'] = FALSE;
                    // $config['maintain_ratio'] = TRUE;
                    // // $config['quality'] = '60%';
                    // // $config['width'] = 800;
                    // // $config['height'] = 800;
                    // $config['new_image'] = './assets/upload/laporan/' . $data['file_name'];
                    // $this->load->library('image_lib', $config);
                    // $this->image_lib->resize();
                    $image = $data['file_name'];
                }
            }
            $data = array(
                'name' => $this->input->post('name', TRUE),
                'short_content' => $this->input->post('short_content', TRUE),
                // 'content' => $this->input->post('content', TRUE),
                // 'client_name' => $this->input->post('client_name', TRUE),
                // 'client_company' => $this->input->post('client_company', TRUE),
                // 'start_date' => $this->input->post('start_date', TRUE),
                // 'end_date' => $this->input->post('end_date', TRUE),
                // 'website' => $this->input->post('website', TRUE),
                // 'cost' => $this->input->post('cost', TRUE),
                // 'client_comment' => $this->input->post('client_comment', TRUE),
                // 'category_id' => $this->input->post('category_id', TRUE),
                'photo' => $image,
                // 'meta_title' => $this->input->post('meta_title', TRUE),
                // 'meta_keyword' => $this->input->post('meta_keyword', TRUE),
                // 'meta_description' => $this->input->post('meta_description', TRUE),
            );

            $this->Tbl_portfolio_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_portfolio'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_portfolio_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_portfolio/update_action'),
                'id' => set_value('id', $row->id),
                'name' => set_value('name', $row->name),
                'short_content' => set_value('short_content', $row->short_content),
                'content' => set_value('content', $row->content),
                'client_name' => set_value('client_name', $row->client_name),
                'client_company' => set_value('client_company', $row->client_company),
                'start_date' => set_value('start_date', $row->start_date),
                'end_date' => set_value('end_date', $row->end_date),
                'website' => set_value('website', $row->website),
                'cost' => set_value('cost', $row->cost),
                'client_comment' => set_value('client_comment', $row->client_comment),
                'category_id' => set_value('category_id', $row->category_id),
                'photo' => set_value('photo', $row->photo),
                'meta_title' => set_value('meta_title', $row->meta_title),
                'meta_keyword' => set_value('meta_keyword', $row->meta_keyword),
                'meta_description' => set_value('meta_description', $row->meta_description),
            );
            $this->template->load('template', 'tbl_portfolio/tbl_portfolio_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_portfolio'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'name' => $this->input->post('name', TRUE),
                'short_content' => $this->input->post('short_content', TRUE),
                'content' => $this->input->post('content', TRUE),
                'client_name' => $this->input->post('client_name', TRUE),
                'client_company' => $this->input->post('client_company', TRUE),
                'start_date' => $this->input->post('start_date', TRUE),
                'end_date' => $this->input->post('end_date', TRUE),
                'website' => $this->input->post('website', TRUE),
                'cost' => $this->input->post('cost', TRUE),
                'client_comment' => $this->input->post('client_comment', TRUE),
                'category_id' => $this->input->post('category_id', TRUE),
                'photo' => $this->input->post('photo', TRUE),
                'meta_title' => $this->input->post('meta_title', TRUE),
                'meta_keyword' => $this->input->post('meta_keyword', TRUE),
                'meta_description' => $this->input->post('meta_description', TRUE),
            );

            $this->Tbl_portfolio_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_portfolio'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_portfolio_model->get_by_id($id);

        if ($row) {
            $this->Tbl_portfolio_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_portfolio'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_portfolio'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('short_content', 'short content', 'trim|required');
        // $this->form_validation->set_rules('content', 'content', 'trim|required');
        // $this->form_validation->set_rules('client_name', 'client name', 'trim|required');
        // $this->form_validation->set_rules('client_company', 'client company', 'trim|required');
        // $this->form_validation->set_rules('start_date', 'start date', 'trim|required');
        // $this->form_validation->set_rules('end_date', 'end date', 'trim|required');
        // $this->form_validation->set_rules('website', 'website', 'trim|required');
        // $this->form_validation->set_rules('cost', 'cost', 'trim|required');
        // $this->form_validation->set_rules('client_comment', 'client comment', 'trim|required');
        // $this->form_validation->set_rules('category_id', 'category id', 'trim|required');
        //$this->form_validation->set_rules('photo', 'photo', 'trim|required');
        // $this->form_validation->set_rules('meta_title', 'meta title', 'trim|required');
        // $this->form_validation->set_rules('meta_keyword', 'meta keyword', 'trim|required');
        // $this->form_validation->set_rules('meta_description', 'meta description', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Tbl_portfolio.php */
/* Location: ./application/controllers/Tbl_portfolio.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-11-30 05:02:59 */
/* http://harviacode.com */
