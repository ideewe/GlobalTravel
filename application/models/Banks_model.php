<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banks_model extends CI_Model
{

	public function save($data)
	{
		return $this->db->insert("bank", $data);
	}

	public function getBank($id)
	{
		$this->db->where("Id", $id);
		$resultados = $this->db->get("bank");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
	}

	public function getBanks()
    {
        $this->db->where("State", "0");
        $resultado = $this->db->get("bank");
        return $resultado->result();
	}

	public function update($id, $data)
	{
		$this->db->where("Id", $id);
		return $this->db->update("bank", $data);
	}

	public function Remove($id)
	{
		$this->db->where("Id", $id);
		return $this->db->delete("bank");
	}
}