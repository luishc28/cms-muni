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
		return $this->db->where('tipo_fotos','2')->where('estado_fotos','1')->get('fotos')->result();
	}

	public function slider(){
		return $this->db->where('tipo_fotos','1')->where('estado_fotos','1')->get('fotos')->result();
	}

	public function thumbnail_horizontal(){
		return $this->db->where('tipo_fotos','3')->where('estado_fotos','1')->get('fotos')->result();	
	}

	public function thumbnail_vertical(){
		return $this->db->where('tipo_fotos','4')->where('estado_fotos','1')->get('fotos')->result();	
	}	

}

?>