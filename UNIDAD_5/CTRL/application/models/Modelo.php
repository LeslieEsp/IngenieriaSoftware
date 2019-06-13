<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Model {

	public function verganado()
	{

		$us = $this->db->query("SELECT * FROM `ganado` WHERE 1");
		$data = $us->result_array();
		return $data;
	}

	public function insertarganado_model($Raza,$Fecha_Naci,$Estado,$Fecha_Muerte)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO ganado (Raza,Fecha_Naci,Estado,Fecha_Muerte) VALUES ('$Raza' ,'$Fecha_Naci','$Estado','$Fecha_Muerte')");
	}
	public function eliminarganado_model($id)
	{
		$ejecutar_consulta = $this->db->query("DELETE FROM ganado WHERE id=$id ORDER BY Raza,Fecha_Naci,Estado,Fecha_Muerte ");
	}
public function editarganado_model($id,$Raza,$Fecha_Naci,$Estado,$Fecha_Muerte)
	{
		$ejecutar_consulta = $this->db->query("UPDATE ganado  SET Raza='$Raza',Fecha_Naci='$Fecha_Naci',Estado='$Estado',Fecha_Muerte='$Fecha_Muerte'WHERE id=$id");
	}
	
	
}

