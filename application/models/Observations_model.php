<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Observations_model extends CI_Model
{

	public function save($data)
	{
		return $this->db->insert("observations", $data);
	}

	public function getObservation($id)
	{
		$this->db->where("UserId", $id);
		$resultados = $this->db->get("observations");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		} else {
			return false;
		}
    }

    public function getObservations($id)
	{
		$this->db->where("UserId", $id);
        $resultado = $this->db->get("observations");
        return $resultado->result();
    }

	public function update($id, $data)
	{
		$this->db->where("ObservationId", $id);
		return $this->db->update("observations", $data);
	}

	public function Remove($id)
	{
		$this->db->where("ObservationId", $id);
		return $this->db->delete("observations");
    }
}
