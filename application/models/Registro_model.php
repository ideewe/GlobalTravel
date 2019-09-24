<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registro_model extends CI_Model
{

	//Methods for users in general
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

	//Methods for Clients 
	public function getClientes()
    {
        $this->db->where("rol_id", "4");
        $resultado = $this->db->get("user");
        return $resultado->result();
	}

	public function updateClient($id, $data)
	{
		$this->db->where("Id", $id);
		return $this->db->update("clientoperation", $data);
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
        $resultado = $this->db->get("sellerclients");
        return $resultado->result();
	}

	public function SaveSellersClient($data)
    {
        return $this->db->insert("sellerclients", $data);
	}

	public function getUserSeller($id)
    {
        $this->db->where("ClientId", $id);
        $resultado = $this->db->get("clientoperation");
        return $resultado->result();
    }
	
	
}
