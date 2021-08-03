<?php

//session_start();

class Login extends CI_Controller {


    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['in'] = FALSE;
        $this->load->view('login_view', $data);
    }

    function logout()
    {

        $this->session->unset_userdata('logged_in');
        session_destroy();
        $data['in'] = TRUE;
        $this->load->view('login_view', $data);
    }

    function login_validate()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        $this->form_validation->run();
    }

    function check_database($password)
    {
        $_SESSION['user'] = -1;  // initialize user session

        $newdata = array(
            'username' => 'test',
            'userfullname' => 'Test User',
            'userid' => 999,
            'userlevel' => 6,
            'logged_in' => TRUE,
            'qhold' => FALSE,
            'hospitalHIN' => 'D0001',
            'hospitalName' => 'Test Hospital',
            'tenantID' => 'D0001',
            'counter'=>0
        );

        $_SESSION['user'] = 999; // assign user id to user session

        $_SESSION['role_id'] = 6;

        $this->session->set_userdata($newdata);

        redirect('Examination_test_c');        
    }

}

?>
