<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'sinergi foundations';
        $this->form_validation->set_rules('tgl', 'Date', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('index', $data);
        } else {
            $this->UsersModel->simpan();
            $this->session->set_flashdata('flash', 'Disimpan');
            redirect('home');
        }
    }
}
