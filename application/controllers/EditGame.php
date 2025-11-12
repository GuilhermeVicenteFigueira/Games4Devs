<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditGame extends CI_Controller
{

    public function edit($id)
    {
        $this->load->model("Games_model");
        $data['game'] = $this->Games_model->show($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav_top', $data);
        $this->load->view('pages/EditGame_view', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function update($id)
    {
        $this->load->model("Games_model");
        $game = $this->input->post();
        $this->Games_model->update($id, $game);
        redirect("Games");
    }
}
