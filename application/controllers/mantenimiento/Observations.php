<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Observations extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Observations_model");
        $this->load->model("Registro_model");
    }


    public function index()
    {
        $id = $this->session->userdata("id");
        $data = array(
            'Banks' => $this->Banks_model->getBanks(),
            'Info' => $this->Card_model->getCard($id),
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/ClientInfo/addMembership', $data);
        $this->load->view('layouts/footer');
    }

    public function HisObservations($id)
    {
        $data = array(
            'Observations' => $this->Observations_model->getObservations($id),
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/ClientInfo/addObservation', $data);
        $this->load->view('layouts/footer');
    }

    public function store($id)
    {
        $ObservationDescription = $this->input->post("ObservationDescription");
        $Date = $this->input->post("Date");

        $data = array(
            'UserId' => $id,
            'ObservationDescription' => $ObservationDescription,
            'Date' => $Date,
            'State' => "0"
        );
        if ($this->Observations_model->save($data)) {
            $this->session->set_flashdata("update", "Se guardo la informacion del nuevo usuario");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
        }
    }


    public function Remove($id)
    { }
}
