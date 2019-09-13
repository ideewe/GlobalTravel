<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Packages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Packages_model");
        $this->load->model("Registro_model");
    }


    public function index()
    {
        $data = array('Paquetes' => $this->Packages_model->getPackages(),);
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/Packages/PackageList', $data);
        $this->load->view('layouts/footer');
    }

    public function DeletedPackages()
    {
        $data = array('Paquetes' => $this->Packages_model->getDeletedPackages(),);
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/Packages/PackageList', $data);
        $this->load->view('layouts/footer');
    }

    public function MyPackages()
    {
        $id = $this->session->userdata("id");
        $data = array(
            'MisPaquetes' => $this->Packages_model->getMyPackages($id),
            'Paquetes' => $this->Packages_model->getPackages(),
            'Vendedores' => $this->Registro_model->getUsuarios()
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/Packages/MyPackageList', $data);
        $this->load->view('layouts/footer');
    }

    public function MySelledPackages()
    {
        $id = $this->session->userdata("id");
        $data = array(
            'MisPaquetes' => $this->Registro_model->getMySelledPackages($id),
            'Paquetes' => $this->Packages_model->getPackages(),
            'Vendedores' => $this->Registro_model->getUsuarios(),
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/Packages/MyPackageList', $data);
        $this->load->view('layouts/footer');
    }

}
