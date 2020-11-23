<?php

class Home extends CI_Controller {
    public function index() {

        $this->load->view('templates/header');
        $this->load->view('templates/front-end/navbar');
        // $this->load->view('dashboard', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}