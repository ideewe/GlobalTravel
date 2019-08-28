<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Card_model extends CI_Model
{

	public function save($data)
	{
		return $this->db->insert("cardinfo", $data);
	}

	public function getCards($id)
	{
		$this->db->where("ClientId", $id);
		$resultados = $this->db->get("cardinfo");
		return $resultados->result();
	}

	public function getBanks()
	{
		$resultados = $this->db->get(" bank");
		return $resultados->result();
	}

	public function update($id, $data)
	{
		$this->db->where("ClientId", $id);
		return $this->db->update("cardinfo", $data);
	}

	public function Remove($id)
	{
		$this->db->where("ClientId", $id);
		return $this->db->delete("cardinfo");
	}
}
