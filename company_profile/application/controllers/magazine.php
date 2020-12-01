<?php

class Magazine extends CI_Controller {
    public function index() {
        // $data['banner_carousel'] = $this->model_banner_carousel->show_data()->result(); 

        $this->load->view('templates/header');
        $this->load->view('templates/front-end/navbar');
        // $this->load->view('dashboard', $data);
        $this->load->view('magazine');
        $this->load->view('templates/footer');
    }
}