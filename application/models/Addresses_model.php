<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addresses_model extends CI_Model
{

	public function save($data)
	{
		return $this->db->insert("address", $data);
	}

	public function getAddress($id)
	{
		$this->db->where("ClientId", $id);
		$resultados = $this->db->get("address");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
	}

	public function update($id, $data)
	{
		$this->db->where("ClientId", $id);
		return $this->db->update("address", $data);
	}

	public function Remove($id)
	{
		$this->db->where("ClientId", $id);
		return $this->db->delete("address");
	}
}