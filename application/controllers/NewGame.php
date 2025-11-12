<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewGame extends CI_Controller
{

    public function index()
    {
        $data['title'] = "NewGames - CodeIgniter";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav_top', $data);
        $this->load->view('pages/NewGame_view', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function store()
    {
        $game =  $_POST;
        $game["user_id"] = '1';
        $this->load->model("Games_model");
        $this->Games_model->store($game);
        redirect("dashboard");
    }
}