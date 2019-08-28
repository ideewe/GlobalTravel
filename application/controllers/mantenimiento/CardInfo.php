<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CardInfo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Card_model");
        $this->load->model("Banks_model");
        $this->load->model("Registro_model");
    }


    public function index($id)
    {
        $data = array(
            'Banks' => $this->Banks_model->getBanks(),
            'Info' => $this->Card_model->getCard($id),
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/ClientInfo/addCard',$data);
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

    public function HisCard($id)
    {
        $data = array(
            'Banks' => $this->Banks_model->getBanks(),
            'Info' => $this->Card_model->getCard($id),
            'User' => $this->Registro_model->getUser($id),
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/ClientInfo/addCard',$data);
        $this->load->view('layouts/footer');
    }

    public function store($id)
    {
        $ExpirationDate = $this->input->post("ExpirationDate");
        $Digits = $this->input->post("Digits");
        $BankId = $this->input->post("BankId");
        $info = array(
            'info' => $this->Card_model->getCard($id)
        );
        
        $data = array(
            'ClientId' => $id,
            'ExpirationDate' => $ExpirationDate,
            'Digits' => $Digits,
            'BankId' => $BankId
        );
        if (!$this->Card_model->getCard($id)) {
            if ($this->Card_model->save($data)) {
                $this->session->set_flashdata("update", "Se guardo la informacion del nuevo usuario");
                redirect(base_url());
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url()."mantenimiento/Usuarios");
            }
        } else {
            if ($this->Card_model->update($id, $data)) {
                $this->session->set_flashdata("update", "Se guardo la informacion del nuevo usuario");
                redirect(base_url());
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url()."mantenimiento/Usuarios");
            }
        }
    }


    public function Remove($id)
    {
        
    }
}
