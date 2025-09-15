<?php
class Sinarluwunusantara extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('rental_model'); // ganti sesuai model yang dipakai
    //     $this->load->library('form_validation');

    //     // Load model Portfolio_model
    //     $this->load->model('Portfolio_model');

    //     // Load model rental_model kalau diperlukan
    //     $this->load->model('rental_model');
    // }

    public function index()
    {
        $this->load->view('temp_sln/header');
        $this->load->view('sln');
        $this->load->view('temp_sln/footer');
    }
}
