<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Games extends CI_Controller
{

    public function index()
    {
        $this->load->model('Games_model');
        $data['games'] = $this->Games_model->index();
        $data['title'] = "Games - CodeIgniter";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav_top', $data);
        $this->load->view('pages/Games_view', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }
}
