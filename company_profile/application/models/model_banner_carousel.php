<?php 

class Model_Banner_Carousel extends CI_Model{
    public function show_data() {
        return $this->db->get('home');
    }
}