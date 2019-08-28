<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Packages_model extends CI_Model
{

	public function save($data)
	{
		return $this->db->insert("packages", $data);
	}

	public function getPackage($id)
	{
		$this->db->where("Id", $id);
		$resultados = $this->db->get("packages");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
	}

	public function getPackages()
    {
        $this->db->where("State", "0");
        $resultado = $this->db->get("packages");
        return $resultado->result();
	}

	public function getMyPackages($id)
    {
        $this->db->where("ClientId", $id);
        $resultado = $this->db->get("clientoperation");
        return $resultado->result();
	}

	public function getMySelledPackages($id)
    {
        $this->db->where("SellerId", $id);
        $resultado = $this->db->get("clientoperation");
        return $resultado->result();
	}
	
	public function getDeletedPackages()
    {
        $this->db->where("State", "1");
        $resultado = $this->db->get("packages");
        return $resultado->result();
    }

	public function update($id, $data)
	{
		$this->db->where("Id", $id);
		return $this->db->update("packages", $data);
	}

	public function Remove($id)
	{
		$this->db->where("Id", $id);
		return $this->db->delete("packages");
	}
}
