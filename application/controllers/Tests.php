<?php
    class Tests extends CI_Controller {
        public function index(){

            $data['title'] = ucfirst('Test Page');
            
            $this->load->model('test_model');
            $this->load->view('layouts/main_header');
            $this->load->view('layouts/side_bar');
            $this->load->view('tests/index',$data);
            $this->load->view('layouts/main_footer');  
        }   
    }