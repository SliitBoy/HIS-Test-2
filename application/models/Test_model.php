<?php
/*
------------------------------------------------------------------------------------------------------------------------
Copyright (c) Digital Pulz (Pvt) Ltd, 2021
<http: http://www.digitalpulz.com />
------------------------------------------------------------------------------------------------------------------------
*/
?>
<?php
class Test_model extends CI_Model
{

    public function addTest($data)
    {
        $tenantID = $this->session->userdata('tenantID');
        $this->load->model('ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "examinationTest";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_TENENT_POST_Request($serviceURL, $data, $media_Type, $tenantID);
        $result = json_decode($response);
        return $result;
    }

    public function getAllTests()
    {
        $tenantID = $this->session->userdata('tenantID');
        $this->load->model('ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "examinationTest";
        $response = $this->serviceCaller->curl_TENENT_GET_Request($serviceURL, $tenantID);
        $result = json_decode($response, true);
        return $result;
    }

    public function getTest($id)
    {
        $tenantID = $this->session->userdata('tenantID');
        $this->load->model('ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "examinationTest/" . $id;
        $response = $this->serviceCaller->curl_TENENT_GET_Request($serviceURL, $tenantID);
        $result = json_decode($response, true);
        return $result;
    }

    public function updateTest($data,$id) 
    {
        $tenantID = $this->session->userdata('tenantID');
        $this->load->model('ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "examinationTest/" . $id;
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_TENENT_UPDATE_Request($serviceURL, $data, $media_Type, $tenantID);
        $result = json_decode($response);
        return $result;
    }

    public function deleteTest($data,$id) 
    {
        $tenantID = $this->session->userdata('tenantID');
        $this->load->model('ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "examinationTest/" . $id;
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_TENENT_DELETE_Request($serviceURL, $data, $media_Type, $tenantID);
        $result = json_decode($response);
        return $result;
    }

}
?>