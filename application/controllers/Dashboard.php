<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->model("Games_model");
        $data['games'] = $this->Games_model->index();
        $data['title'] =  "Dashboard - CodeIgniter";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav_top', $data);
        $this->load->view('pages/Dashboard_view', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }
}
