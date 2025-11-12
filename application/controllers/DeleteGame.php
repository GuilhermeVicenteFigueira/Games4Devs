<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DeleteGame extends CI_Controller
{

    public function delete($id)
    {
        $this->load->model("Games_model");
        $this->Games_model->destroy($id);
        redirect("Games");
    }
}