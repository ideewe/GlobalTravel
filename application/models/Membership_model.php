<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Membership_model extends CI_Model
{

	public function save($data)
	{
		return $this->db->insert("client", $data);
	}

	public function getClientMembership($id)
	{
		$this->db->where("UserId", $id);
		$resultados = $this->db->get("client");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
    }
    
    public function saveMembership($data)
	{
		return $this->db->insert("membership", $data);
	}

	public function getMembership($id)
	{
		$this->db->where("MembershipId", $id);
		$resultados = $this->db->get("membership");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
	}

	public function getMemberships()
    {
        $this->db->where("State", "0");
        $resultado = $this->db->get("membership");
        return $resultado->result();
	}

	public function update($id, $data)
	{
		$this->db->where("UserId", $id);
		return $this->db->update("client", $data);
	}

	public function Remove($id)
	{
		$this->db->where("UserId", $id);
		return $this->db->delete("client");
    }
    
    public function updateMembership($id, $data)
	{
		$this->db->where("MembershipId", $id);
		return $this->db->update("membership", $data);
	}

	public function RemoveMembership($id)
	{
		$this->db->where("MembershipId", $id);
		return $this->db->delete("Membership");
	}
}
