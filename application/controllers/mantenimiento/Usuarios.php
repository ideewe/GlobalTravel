<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model("Registro_model");
                $this->load->model("Observations_model");
                $this->load->model("Addresses_model");
                $this->load->model("Card_model");
                $this->load->model("Membership_model");
                $this->load->model("Packages_model");
        }


        public function index()
        {
                $data = array('Usuarios' => $this->Registro_model->getUsuarios(),);
                $this->load->view('layouts/aside');
                $this->load->view('layouts/navsidebar');
                $this->load->view('layouts/header');
                $this->load->view('admin/usuarios/list', $data);
                $this->load->view('layouts/footer');
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

        public function getClients()
        {
                $data = array('Usuarios' => $this->Registro_model->getClientes(),);
                $this->load->view('layouts/aside');
                $this->load->view('layouts/navsidebar');
                $this->load->view('layouts/header');
                $this->load->view('admin/Clientes/list_getClients', $data);
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

        public function UserSellers()
        {
                $id = $this->session->userdata("id");
                $data = array(
                        'Sellers' => $this->Registro_model->getUserSeller($id),
                        'Usuarios' => $this->Registro_model->getUsuarios()
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

        public function edit($id)
        {
                $data = array('Usuario' => $this->Registro_model->getUser($id),);
                $this->load->view('layouts/aside');
                $this->load->view('layouts/navsidebar');
                $this->load->view('layouts/header');
                $this->load->view('admin/usuarios/edit', $data);
                $this->load->view('layouts/footer');
        }

        public function updateuser($id)
        {
                $newname = $this->input->post("name");
                $username = $this->input->post("username");
                $identity = $this->input->post("identity");
                $email = $this->input->post("email");
                $password = $this->input->post("password");
                $confirmpassword = $this->input->post("confirmpassword");
                $GenderId = $this->input->post("GenderId");
                $CivilStatusId = $this->input->post("CivilStatusId");
                $CellPhoneNumber = $this->input->post("CellPhoneNumber");

                if ($this->input->post("rol") == "Administrador") {
                        $rol = "2";
                } elseif ($this->input->post("rol") == "Vendedor") {
                        $rol = "3";
                } elseif (empty($_POST['rol'])) {
                        $rol = $this->input->post("rol_id");
                } else {
                        $rol = "4";
                }

                if (empty($_POST['password']) and empty($_POST['confirmpassword'])) {
                        $data = array(
                                'FullName' => $newname,
                                'Username' => $username,
                                'IdNumber' => $identity,
                                'Email' => $email,
                                'GenderId' => $GenderId,
                                'CivilStatusId' => $CivilStatusId,
                                'CellPhoneNumber' => $CellPhoneNumber,
                                'rol_id' => $rol
                        );

                        if ($this->Registro_model->update($id, $data)) {
                                $this->session->set_flashdata("update", "Se actualizo la informacion del usuario");
                                redirect(base_url() . "mantenimiento/usuarios");
                        } else {
                                $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
                                redirect(base_url() . "mantenimiento/usuarios");
                        }
                } elseif ($password == $confirmpassword) {
                        $data = array(
                                'FullName' => $newname,
                                'Username' => $username,
                                'IdNumber' => $identity,
                                'Email' => $email,
                                'GenderId' => $GenderId,
                                'CivilStatusId' => $CivilStatusId,
                                'CellPhoneNumber' => $CellPhoneNumber,
                                'rol_id' => $rol,
                                'password' => sha1($password)
                        );

                        if ($this->Registro_model->update($id, $data)) {
                                $this->session->set_flashdata("update", "Se actualizo la informacion del usuario");
                                redirect(base_url() . "mantenimiento/usuarios");
                        } else {
                                $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
                                $this->edit($id);
                        }
                } else {
                        $this->session->set_flashdata("error", "Las contraseñas no coinciden");
                        $this->edit($id);
                };
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
                $rol = $this->input->post("rol");

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
                $data = array(
                        'Usuario' => $this->Registro_model->getUser($id),
                        'Observaciones' => $this->Observations_model->getObservations($id)
                );
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

        public function Profile($id)
        {
                $data = array(
                        'Usuario' => $this->Registro_model->getUser($id),
                        'Observacion' => $this->Observations_model->getObservations($id),
                        'Direccion' => $this->Addresses_model->getAddress($id),
                        'Tarjeta' => $this->Card_model->getCards($id),
                        'Membresia' => $this->Membership_model->getClientMembership($id),
                        'Membresias' => $this->Membership_model->getMemberships($id),
                        'Bancos' => $this->Card_model->getBanks(),
                        'MisPaquetes' => $this->Packages_model->getMyPackages($id),
                        'Paquetes' => $this->Packages_model->getPackages(),
                        'Vendedores' => $this->Registro_model->getUsuarios()
                );
                $this->load->view('layouts/aside');
                $this->load->view('layouts/navsidebar');
                $this->load->view('layouts/header');
                $this->load->view("admin/usuarios/Profile", $data);
                $this->load->view('layouts/footer');
        }
}
