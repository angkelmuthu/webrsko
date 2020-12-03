<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_jadwal');
        //$this->load->model('Model_portfolio');
    }

    public function index()
    {
        $data['setting'] = $this->Model_common->all_setting();
        $data['page_service'] = $this->Model_common->all_page_service();
        $data['comment'] = $this->Model_common->all_comment();
        $data['social'] = $this->Model_common->all_social();
        $data['all_news'] = $this->Model_common->all_news();

        //$data['jadwal'] = $this->Model_jadwal->all_jadwal();
        //$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

        $this->load->view('view_header', $data);
        $this->load->view('view_laporan', $data);
        $this->load->view('view_footer', $data);
    }
}
