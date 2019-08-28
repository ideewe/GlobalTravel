<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Address extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Addresses_model");
    }


    public function index()
    {
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/ClientInfo/addAddress');
        $this->load->view('layouts/footer');
    }

    public function MyAddress()
    {
        $id = $this->session->userdata("id");
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');

        $this->load->view('layouts/footer');
    }

    public function HisAddress()
    {
        $id = $this->session->userdata("id");
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');

        $this->load->view('layouts/footer');
    }

    public function store()
    {
        $address = $this->input->post("address");
        $city = $this->input->post("city");
        $department = $this->input->post("department");
        $homephone = $this->input->post("homephone");
        $officephone = $this->input->post("officephone");
        $otherphone = $this->input->post("otherphone");
        $id = $this->session->userdata("id");
        
        $data = array(
            'ClientId' => $id,
            'Address' => $address,
            'City' => $city,
            'Department' => $department,
            'HomePhoneNumber' => $homephone,
            'OfficePhoneNumber' => $officephone,
            'OtherPhoneNumber' => $otherphone
        );
        if ($this->session->userdata("info")==1) {
            if ($this->Addresses_model->update($id, $data)) {
                $this->session->set_flashdata("update", "Se guardo la informacion del nuevo usuario");
                redirect(base_url());
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url());
            }
        } else {
            if ($this->Addresses_model->save($data)) {
                $this->session->set_flashdata("update", "Se guardo la informacion del nuevo usuario");
                redirect(base_url());
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url());
            }
        }
    }


    public function Remove($id)
    {
        
    }
}
