<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Registro_model");
    }

    public function index()
    {
        $this->load->view('admin/signup');
    }

    public function selfstore()
    {
        $name = $this->input->post("name");
        $username = $this->input->post("username");
        $email = $this->input->post("email");
        $identity = $this->input->post("identity");
        $password = $this->input->post("password");
        $confirmpassword = $this->input->post("confirmpassword");
        $GenderId = $this->input->post("GenderId");
        $CivilStatusId = $this->input->post("CivilStatusId");
        $CellPhoneNumber = $this->input->post("CellPhoneNumber");
        $rol = "4";

        $this->form_validation->set_rules("username", "Username", "required|is_unique[user.username]");

        if ($this->form_validation->run()) {
            if ($password == $confirmpassword) {
                $data = array(
                    'FullName' => $name,
                    'Username' => $username,
                    'IdNumber' => $identity,
                    'GenderId' => $GenderId,
                    'CivilStatusId' => $CivilStatusId,
                    'CellPhoneNumber' => $CellPhoneNumber,
                    'Email' => $email,
                    'password' => sha1($password),
                    'rol_id' => $rol
                );
                if ($this->Registro_model->save($data)) {
                    $this->session->set_flashdata("update", "Se guardo la informacion del nuevo usuario");
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                    $this->index();
                }
            } else {
                $this->session->set_flashdata("error", "Las contraseñas no coinciden");
                $this->index();
            };
        } else {
            $this->index();
        }
    }

    public function update()
    {
        $id = $this->input->post("id");
        $newname = $this->input->post("name");
        $identity = $this->input->post("identity");
        $username = $this->input->post("username");
        $email = $this->input->post("email");
        $GenderId = $this->input->post("GenderId");
        $CivilStatusId = $this->input->post("CivilStatusId");
        $CellPhoneNumber = $this->input->post("CellPhoneNumber");
        $password = $this->input->post("password");
        $confirmpassword = $this->input->post("confirmpassword");
        $rol = $this->input->post("rol_id");


        if (empty($_POST['password']) and empty($_POST['confirmpassword'])) {
            $data = array(
                'FullName' => $newname,
                'Username' => $username,
                'IdNumber' => $identity,
                'GenderId' => $GenderId,
                'CivilStatusId' => $CivilStatusId,
                'CellPhoneNumber' => $CellPhoneNumber,
                'Email' => $email,
                'rol_id' => $rol
            );

            if ($this->Registro_model->update($id, $data)) {
                $this->session->set_flashdata("update", "Se actualizo la informacion del usuario");
                $newdata = array(
                    'id' => $id,
                    'nombre' => $newname,
                    'identidad' => $identity,
                    'genero' => $GenderId,
                    'estadocivil' => $CivilStatusId,
                    'celular' => $CellPhoneNumber,
                    'user' => $username,
                    'email' => $email,
                    'rol_id' => $rol,
                    'login' => TRUE
                );
                $this->session->set_userdata($newdata);
                redirect(base_url() . "dashboard");
            } else {
                $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
                redirect(base_url() . "dashboard");
            }
        } elseif ($password == $confirmpassword) {
            $data = array(
                'FullName' => $newname,
                'Username' => $username,
                'IdNumber' => $identity,
                'GenderId' => $GenderId,
                'CivilStatusId' => $CivilStatusId,
                'CellPhoneNumber' => $CellPhoneNumber,
                'Email' => $email,
                'password' => sha1($password),
                'rol_id' => $rol
            );

            if ($this->Registro_model->update($id, $data)) {
                $this->session->set_flashdata("update", "Se actualizo la informacion del usuario");
                $newdata = array(
                    'id' => $id,
                    'nombre' => $newname,
                    'identidad' => $identity,
                    'genero' => $GenderId,
                    'estadocivil' => $CivilStatusId,
                    'celular' => $CellPhoneNumber,
                    'user' => $username,
                    'email' => $email,
                    'rol_id' => $rol,
                    'login' => TRUE
                );
                $this->session->set_userdata($newdata);
                redirect(base_url() . "dashboard");
            } else {
                $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
                redirect(base_url() . "dashboard");
            }
        } else {
            $this->session->set_flashdata("error", "Las contraseñas no coinciden");
            redirect(base_url() . "dashboard");
        };
    }
}
