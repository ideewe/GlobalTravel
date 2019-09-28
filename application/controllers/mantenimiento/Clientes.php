<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clientes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Registro_model");
        $this->load->model("Packages_model");
    }


    public function index()
    {
        $data = array('Usuarios' => $this->Registro_model->getClientes());
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/Clientes/list_getClients', $data);
        $this->load->view('layouts/footer');
    }

    public function addOperation($id)
    {
        $data = array(
            'Paquetes' => $this->Packages_model->getPackages(),
            'Usuario' => $this->Registro_model->getUser($id),
            'id' => $id
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/Clientes/addOperation', $data);
        $this->load->view('layouts/footer');
    }

    public function VerifySellers($client, $seller){
        $Sellers = $this->Registro_model->getUserSeller($client);
        foreach ($Sellers as $seller ) {
            if ($seller->SellerId == $seller) {
                return true;
                break;
            }
        }
        return false;
    }

    public function VerifyClients($client, $seller){
        $Clients = $this->Registro_model->getUserClient($seller);
        foreach ($Clients as $Client ) {
            if ($Client->ClientId == $client) {
                return true;
                break;
            }
        }
        return false;
    }

    public function storeOperation()
    {
        $SellerId = $this->session->userdata("id");
        $Date = date("Y-m-d");
        $ClientId = $this->input->post("clientid");
        $PackageId = $this->input->post("paquete");

        $data = array(
            'ClientId' => $ClientId,
            'SellerId' => $SellerId,
            'PackageId' => $PackageId,
            'State' => 0,
            'Date' => $Date
        );

        $cliente = array(
            'ClientId' => $ClientId,
            'SellerId' => $SellerId,
            'State' => 0
        );
        if ($this->Packages_model->saveOperation($data)) {
            if($this->VerifyClients($ClientId,$SellerId)==false){
                if ($this->Registro_model->SaveSellersClient($cliente)) {
                    $this->session->set_flashdata("update", "Se guardo la informacion de la Venta y su Cliente");
                }else{
                    $this->session->set_flashdata("update", "Se guardo la informacion de la Venta pero no la del cliente/vendedor");
                }
            }else{
                $this->session->set_flashdata("update", "Se guardo la informacion de la Venta");
            }
            if ($this->VerifySellers($ClientId,$SellerId)==false) {
                if ($this->Registro_model->SaveClientsSeller($cliente)) {
                    $this->session->set_flashdata("update", "Se guardo la informacion de la Venta y su Cliente");
                }else{
                    $this->session->set_flashdata("update", "Se guardo la informacion de la Venta pero no la del cliente/vendedor");
                }
            }
            $this->index();
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion de la Venta");
            $this->index();
        }
    }



    public function Userlist()
    {
        $data = array('Usuarios' => $this->Registro_model->getUserDelete(),);
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/usuarios/list', $data);
        $this->load->view('layouts/footer');
    }

    public function getSellers()
    {
        $data = array('Usuarios' => $this->Registro_model->getSellers(),);
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/Clientes/list_getSellers', $data);
        $this->load->view('layouts/footer');
    }

    public function UserClients()
    {
        $id = $this->session->userdata("id");
        $data = array(
            'Clientes' => $this->Registro_model->getUserClient($id),
            'Usuarios' => $this->Registro_model->getUsuarios()
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/clientes/list_clients', $data);
        $this->load->view('layouts/footer');
    }

    

    public function OperationsDone($Client)
    {
        $id = $this->session->userdata("id");
        $data = array(
            'Operaciones' => $this->Registro_model->getOperations($id),
            'Paquetes' => $this->Packages_model->getPackages(),
            'Vendedor' => $id,
            'Cliente' => $this->Registro_model->getUser($Client),
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/clientes/listOperations', $data);
        $this->load->view('layouts/footer');
    }

    public function UserSellers()
    {
        $id = $this->session->userdata("id");
        $data = array(
            'Sellers' => $this->Registro_model->getUserSeller($id),
            'Usuarios' => $this->Registro_model->getSellers()
        );
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/clientes/list_sellers', $data);
        $this->load->view('layouts/footer');
    }

    public function add()
    {
        $this->load->view('layouts/aside');
        $this->load->view('layouts/navsidebar');
        $this->load->view('layouts/header');
        $this->load->view('admin/usuarios/add');
        $this->load->view('layouts/footer');
    }

    public function store()
    {
        $name = $this->input->post("name");
        $username = $this->input->post("username");
        $identity = $this->input->post("identity");
        $email = $this->input->post("email");
        $GenderId = $this->input->post("GenderId");
        $CivilStatusId = $this->input->post("CivilStatusId");
        $CellPhoneNumber = $this->input->post("CellPhoneNumber");
        $password = $this->input->post("password");
        $confirmpassword = $this->input->post("confirmpassword");

        if ($this->input->post("rol") == "Administrador") {
            $rol = "2";
        } elseif ($this->input->post("rol") == "Vendedor") {
            $rol = "3";
        } else {
            $rol = "4";
        }

        $this->form_validation->set_rules("username", "Username", "required|is_unique[user.username]");

        if ($this->form_validation->run()) {
            if ($password == $confirmpassword) {
                $data = array(
                    'FullName' => $name,
                    'Username' => $username,
                    'IdNumber' => $identity,
                    'Email' => $email,
                    'GenderId' => $GenderId,
                    'CivilStatusId' => $CivilStatusId,
                    'CellPhoneNumber' => $CellPhoneNumber,
                    'rol_id' => $rol,
                    'password' => sha1($password)
                );
                if ($this->Registro_model->save($data)) {
                    $this->session->set_flashdata("update", "Se guardo la informacion del nuevo usuario");
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                    $this->add();
                }
            } else {
                $this->session->set_flashdata("error", "Las contraseñas no coinciden");
                $this->add();
            };
        } else {
            $this->add();
        }
    }

    public function view($id)
    {
        $data = array('Usuario' => $this->Registro_model->getUser($id),);
        $this->load->view("admin/usuarios/view", $data);
    }

    public function delete($id)
    {
        $data = array('State' => "1",);
        $this->Registro_model->update($id, $data);
        echo "mantenimiento/usuarios";
    }

    public function state($id)
    {
        $data = array('State' => "0",);
        $this->Registro_model->update($id, $data);
        echo "mantenimiento/usuarios/Userlist";
    }

    public function Remove($id)
    {
        $this->Registro_model->Remove($id);
        echo "mantenimiento/usuarios/Userlist";
    }

    public function RemoveClient($id)
    {
        $data = array('State' => "1",);
        $this->Registro_model->updateClient($id, $data);
        echo "mantenimiento/usuarios/Userlist";
    }
}

