<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_principal extends CI_Model {

	public function seccion(){
		$query = $this->db->where('estado_seccion','1')->get('seccion');
		return $query->result();
	}


	public function categoria(){
		$query = $this->db->where('estado_categoria','1')->get('categoria');
		return $query->result();
	}

	public function alcalde(){
		return $this->db->join('tipo_fotos','tipo_fotos.id_tipo = fotos.id_tipo')->where('nombre_tipo','Alcalde')->where('estado_fotos','1')->get('fotos')->result();
	}

	public function slider(){
		return $this->db->join('tipo_fotos','tipo_fotos.id_tipo = fotos.id_tipo')->where('nombre_tipo','Principal')->where('estado_fotos','1')->get('fotos')->result();
	}

	public function thumbnail_horizontal(){
		return $this->db->join('tipo_fotos','tipo_fotos.id_tipo = fotos.id_tipo')->where('nombre_tipo','Horizontal')->where('estado_fotos','1')->get('fotos')->result();	
	}

	public function thumbnail_vertical(){
		return $this->db->join('tipo_fotos','tipo_fotos.id_tipo = fotos.id_tipo')->where('nombre_tipo','Vertical')->where('estado_fotos','1')->get('fotos')->result();	
	}

	public function icon_contact(){
		return $this->db->join('tipo_fotos','tipo_fotos.id_tipo = fotos.id_tipo')->where('nombre_tipo','Iconos-Superior')->where('estado_fotos','1')->get('fotos')->result();	
	}		

	public function social(){
		return $this->db->where('estado_social','1')->get('sociales')->result();
	}

}

?>