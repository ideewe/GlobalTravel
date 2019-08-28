<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Membership extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Card_model");
        $this->load->model("Registro_model");
        $this->load->model("Membership_model");
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
        $this->load->view('admin/ClientInfo/addMembership',$data);
        $this->load->view('layouts/footer');
    }

    public function HisMembership($id)
    {
        $data = array(
            'Memberships' => $this->Membership_model->getMemberships(),
            'Info' => $this->Membership_model->getClientMembership($id),
            'User' => $this->Registro_model->getUser($id),
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/ClientInfo/addMembership',$data);
        $this->load->view('layouts/footer');
    }

    public function store($id)
    {
        $AffiliationDate = $this->input->post("AffiliationDate");
        $CargoDate = $this->input->post("CargoDate");
        $ExpirationDate = $this->input->post("ExpirationDate");
        $Company = $this->input->post("Company");
        $MembershipId = $this->input->post("MembershipId");
        $Job = $this->input->post("Job");
        $IsCompany = $this->input->post("IsCompany");
        $Anniversary = $this->input->post("Anniversary");
        $Birthdate = $this->input->post("Birthdate");
        $PartnerNumber = date('Y').date('n').$id;
        
        $data = array(
            'UserId' => $id,
            'ExpirationDate' => $ExpirationDate,
            'AffiliationDate' => $AffiliationDate,
            'CargoDate' => $CargoDate,
            'Company' => $Company,
            'MembershipId' => $MembershipId,
            'Job' => $Job,
            'IsCompany' => $IsCompany,
            'Anniversary' => $Anniversary,
            'PartnerNumber' => $PartnerNumber,
            'Birthday' => $Birthdate
        );
        if (!$this->Membership_model->getClientMembership($id)) {
            if ($this->Membership_model->save($data)) {
                $this->session->set_flashdata("update", "Se guardo la informacion del usuario");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            }
        } else  {
            if ($this->Membership_model->update($id,$data)) {
                $this->session->set_flashdata("update", "Se actualizo la informacion del usuario");
                redirect(base_url()."mantenimiento/Usuarios");
            } else {
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            }
        }
    }


    public function Remove($id)
    {
        
    }
}
