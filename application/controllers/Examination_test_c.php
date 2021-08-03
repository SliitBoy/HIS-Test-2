<?php
/*
------------------------------------------------------------------------------------------------------------------------
Copyright (c) Digital Pulz (Pvt) Ltd, 2021
<http: http://www.digitalpulz.com />
------------------------------------------------------------------------------------------------------------------------
*/
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examination_test_c extends CI_Controller
{
    public function index()
    {
        $this->load->model('test_model');
        $data ['tests'] = $this->test_model->getAllTests();
        $this->load->view('layouts/main_header');
        $this->load->view('layouts/side_bar');
        $this->load->view('test_view',$data);
        $this->load->view('layouts/main_footer');
    }

    public function addTest()
    {
        $Data['examinationTestData'] = $_POST['obj'];
        $data_string = json_encode($Data);
        $this->load->model('test_model');
        $row = $this->test_model->addTest($data_string);
        echo json_encode($row);
    }

    public function updateTest()
    {
        $testId = $_POST['testId'];
        $Data['examinationTestData'] = $_POST['obj'];
        $data_string = json_encode($Data);
        $this->load->model('test_model');
        $row = $this->test_model->updateTest($data_string,$testId);
        echo json_encode($row);
    }

    public function deleteTest()
    {
        $testId = $_POST['deleteId'];
        $Data['examinationTestData'] = $_POST['obj'];
        $data_string = json_encode($Data);
        $this->load->model('test_model');
        $row = $this->test_model->deleteTest($data_string,$testId);
        echo json_encode($row);
    }

    public function getTest()
    {
        $testId = $_POST['testId'];
        $this->load->model('test_model');
        $row = $this->test_model->getTest($testId);
        echo json_encode($row);
    }

    public function getAllTests()
    {
        $userId = $this->session->userdata('userid');

        $this->load->model('test_model');
        $row = $this->test_model->getAllTests();
        echo json_encode($row);
    }

}