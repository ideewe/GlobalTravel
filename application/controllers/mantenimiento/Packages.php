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

    public function edit($id)
    {
        $data = array(
            'Paquete' => $this->Packages_model->getPackage($id)
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/Packages/editPackage', $data);
        $this->load->view('layouts/footer');
    }

    public function updatepackage($id)
    {
        $name = $this->input->post("name");
        $price = $this->input->post("price");
        $observations = $this->input->post("observations");

        $data = array(
            'Name' => $name,
            'Price' => $price,
            'Observations' => $observations
        );
        if ($this->Packages_model->update($id, $data)) {
            $this->session->set_flashdata("update", "Se actualizo la informacion del paquete");
            redirect(base_url() . "mantenimiento/packages");
        } else {
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            $this->edit($id);
        }
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

    public function CancelOrder($PackageId)
    {
        $data = array('State' => "1");
        if ($this->Packages_model->updateMyOperation($PackageId, $data)) {
            $this->session->set_flashdata("update", "Se cancelo su orden");
            echo "mantenimiento/packages/MyPackages";
        } else {
            $this->session->set_flashdata("error", "No se pudo cancelar su orden");
            echo "mantenimiento/packages/MyPackages";
        }
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
