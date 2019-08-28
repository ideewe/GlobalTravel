<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registro_model extends CI_Model
{

	public function save($data)
	{
		return $this->db->insert("user", $data);
	}

	public function getUser($id)
	{
		$this->db->where("IdUser", $id);
		$resultados = $this->db->get("user");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
	}

	public function getUsuarios()
    {
        $this->db->where("State", "0");
        $resultado = $this->db->get("user");
        return $resultado->result();
	}

	public function getClientes()
    {
        $this->db->where("rol_id", "4");
        $resultado = $this->db->get("user");
        return $resultado->result();
	}

	public function getSellers()
    {
        $this->db->where("rol_id", "3");
        $resultado = $this->db->get("user");
        return $resultado->result();
	}
	
	public function getUserClient($id)
    {
        $this->db->where("SellerId", $id);
        $resultado = $this->db->get("clientoperation");
        return $resultado->result();
	}

	public function getUserSeller($id)
    {
        $this->db->where("ClientId", $id);
        $resultado = $this->db->get("clientoperation");
        return $resultado->result();
    }
	
	public function getUserDelete()
    {
        $this->db->where("State", "1");
        $resultado = $this->db->get("user");
        return $resultado->result();
    }

	public function update($id, $data)
	{
		$this->db->where("IdUser", $id);
		return $this->db->update("user", $data);
	}

	public function Remove($id)
	{
		$this->db->where("IdUser", $id);
		return $this->db->delete("user");
	}
}
