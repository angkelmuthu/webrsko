<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_jadwal_dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Tbl_jadwal_dokter_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->template->load('template','tbl_jadwal_dokter/tbl_jadwal_dokter_list');
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_jadwal_dokter_model->json();
    }

    public function read($id)
    {
        $row = $this->Tbl_jadwal_dokter_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'tahun' => $row->tahun,
		'bulan' => $row->bulan,
		'id_poli' => $row->id_poli,
		'senin' => $row->senin,
		'selasa' => $row->selasa,
		'rabu' => $row->rabu,
		'kamis' => $row->kamis,
		'jumat' => $row->jumat,
		'sabtu' => $row->sabtu,
		'minggu' => $row->minggu,
	    );
            $this->template->load('template','tbl_jadwal_dokter/tbl_jadwal_dokter_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_jadwal_dokter'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_jadwal_dokter/create_action'),
	    'id' => set_value('id'),
	    'tahun' => set_value('tahun'),
	    'bulan' => set_value('bulan'),
	    'id_poli' => set_value('id_poli'),
	    'senin' => set_value('senin'),
	    'selasa' => set_value('selasa'),
	    'rabu' => set_value('rabu'),
	    'kamis' => set_value('kamis'),
	    'jumat' => set_value('jumat'),
	    'sabtu' => set_value('sabtu'),
	    'minggu' => set_value('minggu'),
	);
        $this->template->load('template','tbl_jadwal_dokter/tbl_jadwal_dokter_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tahun' => $this->input->post('tahun',TRUE),
		'bulan' => $this->input->post('bulan',TRUE),
		'id_poli' => $this->input->post('id_poli',TRUE),
		'senin' => $this->input->post('senin',TRUE),
		'selasa' => $this->input->post('selasa',TRUE),
		'rabu' => $this->input->post('rabu',TRUE),
		'kamis' => $this->input->post('kamis',TRUE),
		'jumat' => $this->input->post('jumat',TRUE),
		'sabtu' => $this->input->post('sabtu',TRUE),
		'minggu' => $this->input->post('minggu',TRUE),
	    );

            $this->Tbl_jadwal_dokter_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('tbl_jadwal_dokter'));
        }
    }

    public function update($id)
    {
        $row = $this->Tbl_jadwal_dokter_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_jadwal_dokter/update_action'),
		'id' => set_value('id', $row->id),
		'tahun' => set_value('tahun', $row->tahun),
		'bulan' => set_value('bulan', $row->bulan),
		'id_poli' => set_value('id_poli', $row->id_poli),
		'senin' => set_value('senin', $row->senin),
		'selasa' => set_value('selasa', $row->selasa),
		'rabu' => set_value('rabu', $row->rabu),
		'kamis' => set_value('kamis', $row->kamis),
		'jumat' => set_value('jumat', $row->jumat),
		'sabtu' => set_value('sabtu', $row->sabtu),
		'minggu' => set_value('minggu', $row->minggu),
	    );
            $this->template->load('template','tbl_jadwal_dokter/tbl_jadwal_dokter_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_jadwal_dokter'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'tahun' => $this->input->post('tahun',TRUE),
		'bulan' => $this->input->post('bulan',TRUE),
		'id_poli' => $this->input->post('id_poli',TRUE),
		'senin' => $this->input->post('senin',TRUE),
		'selasa' => $this->input->post('selasa',TRUE),
		'rabu' => $this->input->post('rabu',TRUE),
		'kamis' => $this->input->post('kamis',TRUE),
		'jumat' => $this->input->post('jumat',TRUE),
		'sabtu' => $this->input->post('sabtu',TRUE),
		'minggu' => $this->input->post('minggu',TRUE),
	    );

            $this->Tbl_jadwal_dokter_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('tbl_jadwal_dokter'));
        }
    }

    public function delete($id)
    {
        $row = $this->Tbl_jadwal_dokter_model->get_by_id($id);

        if ($row) {
            $this->Tbl_jadwal_dokter_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('tbl_jadwal_dokter'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('tbl_jadwal_dokter'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
	$this->form_validation->set_rules('bulan', 'bulan', 'trim|required');
	$this->form_validation->set_rules('id_poli', 'id poli', 'trim|required');
	$this->form_validation->set_rules('senin', 'senin', 'trim|required');
	$this->form_validation->set_rules('selasa', 'selasa', 'trim|required');
	$this->form_validation->set_rules('rabu', 'rabu', 'trim|required');
	$this->form_validation->set_rules('kamis', 'kamis', 'trim|required');
	$this->form_validation->set_rules('jumat', 'jumat', 'trim|required');
	$this->form_validation->set_rules('sabtu', 'sabtu', 'trim|required');
	$this->form_validation->set_rules('minggu', 'minggu', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_jadwal_dokter.php */
/* Location: ./application/controllers/Tbl_jadwal_dokter.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-12-02 05:42:00 */
/* http://harviacode.com */